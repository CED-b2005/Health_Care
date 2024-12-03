<?php
session_start();
error_reporting(E_ALL); // Báo cáo tất cả các lỗi
ini_set('display_errors', 1); // Hiển thị lỗi trên trình duyệt

include("../connection.php");
// Kiểm tra kết nối
if ($database === null) {
    die("Kết nối đến cơ sở dữ liệu không thành công.");
}

// hàm gửi yêu cầu của bác sĩ
function sendRequest($database, $doctor_email, $request_type, $message)
{
    // Kiểm tra email bác sĩ
    $checkUser    = "SELECT * FROM webuser WHERE email = ? AND usertype = 'doctor'";
    $stmt = $database->prepare($checkUser);
    $stmt->bind_param("s", $doctor_email);
    $stmt->execute();
    $userResult = $stmt->get_result();

    if ($userResult->num_rows > 0) {
        // Gửi yêu cầu
        $insertSql = "INSERT INTO notification (sender_email, recipient_email, title, message, type)
                      VALUES (?, ?, ?, ?, ?)";
        $stmt = $database->prepare($insertSql);
        $title = $request_type === 'delete' ? 'Yêu cầu hủy lịch' : 'Yêu cầu cập nhật';
        $recipient_email = 'admin@edoc.com';

        $stmt->bind_param("sssss", $doctor_email, $recipient_email, $title, $message, $request_type);
        if ($stmt->execute()) {
            echo "<p>Yêu cầu đã được gửi thành công!</p>";
        } else {
            echo "<p>Lỗi khi gửi yêu cầu: " . $stmt->error . "</p>";
        }
    } else {
        echo "<p>Email không tồn tại hoặc không phải bác sĩ!</p>";
    }
}

// Function to get notifications
function getNotifications($database)
{
    $sql = "SELECT n.id, n.title, n.message, n.type, n.create_time, n.is_read, u.email AS doctor_email
            FROM notification n
            JOIN webuser u ON n.sender_email = u.email
            WHERE n.recipient_email = 'admin@edoc.com' AND n.type IN ('delete', 'update')
            ORDER BY n.create_time DESC";

    return $database->query($sql);
}

// Handle form submission for sending requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_request'])) {
    $doctor_email = $_POST['doctor_email'];
    $request_type = $_POST['request_type'];
    $message = $_POST['message'];
    sendRequest($database, $doctor_email, $request_type, $message);
}

?>

<?php
// Truy vấn để đếm số lượng thông báo chưa đọc
$recipient_email = 'admin@edoc.com';
$query = "SELECT COUNT(*) as unread_count FROM notification WHERE recipient_email = '$recipient_email' AND is_read = 0";
$result = $database->query($query);
$row = $result->fetch_assoc();
$unread_count = $row['unread_count'];
$number_of_nptice = $unread_count;
?>
<?php
function getDoctorEmailByRequestId($database, $request_id)
{
    $query = "SELECT sender_email FROM notification WHERE id = ?";
    $stmt = $database->prepare($query);
    $stmt->bind_param("i", $request_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['sender_email'];
    }
    return null;
}
?>
<!-- Xử lý đánh dấu đã đọc của php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit_request'])) {
        // Handle request submission
        $doctor_email = $_POST['doctor_email'];
        $request_type = $_POST['request_type'];
        $message = $_POST['message'];
        sendRequest($database, $doctor_email, $request_type, $message);
    } elseif (isset($_POST['submit_button']) && isset($_POST['id'])) {
        // Handle marking as read
        $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
        $sqlquery = "UPDATE notification SET is_read = 1 WHERE id = ?";
        $stmt = $database->prepare($sqlquery);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo json_encode(['success' => 'Cập nhật thành công!']);
        } else {
            echo json_encode(['error' => 'Lỗi thực thi: ' . $stmt->error]);
        }
        $stmt->close();
    } elseif (isset($_POST['id']) && isset($_POST['action'])) {
        // Handle approval/rejection
        $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
        $action = $_POST['action'] === 'approve' ? 1 : 0;
        $query = "UPDATE notification SET is_accept = ? WHERE id = ?";
        $stmt = $database->prepare($query);
        $stmt->bind_param('ii', $action, $id);
        if ($stmt->execute()) {
            echo json_encode(['success' => 'Trạng thái đã được cập nhật']);
        } else {
            echo json_encode(['error' => 'Cập nhật thất bại']);
        }
        $stmt->close();
    } else {
        echo json_encode(['error' => 'Thiếu tham số cần thiết.']);
    }
}

//  Xử lý nhận phản hồi admin
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra xem ID và hành động có được cung cấp không
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $action = $_POST['action'] ?? null;

    // Kiểm tra nếu ID không hợp lệ hoặc không có hành động
    if (!$id || !in_array($action, ['approve', 'reject'])) {
        http_response_code(400); // Mã lỗi 400 nếu dữ liệu không hợp lệ
        echo json_encode(['error' => 'ID không hợp lệ hoặc hành động không hợp lệ.']);
        exit;
    }

    // Kết nối cơ sở dữ liệu (nếu chưa có)
    if ($database->connect_error) {
        http_response_code(500);
        echo json_encode(['error' => 'Không thể kết nối cơ sở dữ liệu']);
        exit;
    }

    // Xử lý hành động (approve/reject)
    if ($action === 'approve') {
        $query = "UPDATE notification SET is_accept = 1 WHERE id = ?";
    } elseif ($action === 'reject') {
        $query = "UPDATE notification SET is_accept = 0 WHERE id = ?";
    }

    // Thực thi câu lệnh SQL
    $stmt = $database->prepare($query);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        http_response_code(200);
        echo json_encode(['success' => 'Trạng thái đã được cập nhật']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Cập nhật thất bại']);
    }

    $stmt->close();
    $database->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thông báo</title>
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/notice.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%">
                                    <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title">Administrator</p>
                                    <p class="profile-subtitle">admin@edoc.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../logout.php"><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-dashbord">
                        <a href="index.php" class="non-style-link-menu">
                            <div>
                                <p class="menu-text">Dashboard</p>
                        </a>
        </div>
        </td>
        </tr>
        <tr class="menu-row">
            <td class="menu-btn menu-icon-doctor menu-icon-doctor">
                <a href="doctors.php" class="non-style-link-menu ">
                    <div>
                        <p class="menu-text">Doctors</p>
                </a>
    </div>
    </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-schedule">
            <a href="schedule.php" class="non-style-link-menu">
                <div>
                    <p class="menu-text">Schedule</p>
                </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-appoinment">
            <a href="appointment.php" class="non-style-link-menu">
                <div>
                    <p class="menu-text">Appointment</p>
            </a></div>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-patient">
            <a href="patient.php" class="non-style-link-menu">
                <div>
                    <p class="menu-text">Patients</p>
            </a></div>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-notice menu-active menu-icon-notice">
            <a href="notice.php" class="non-style-link-menu non-style-link-menu-active">
                <div class="d-flex">
                    <p class="menu-text">Notice
                        <?php if ($number_of_nptice > 0) { ?>
                            <span class="badge"><?php echo $number_of_nptice; ?></span>
                        <?php } ?>
                    </p>
            </a></div>
        </td>
    </tr>
    </table>
    </div>
    <div id="notification-container">
        <?php
        require_once '../connection.php';

        $recipient_email = 'admin@edoc.com';
        $sql = "SELECT n.id, n.title, n.message, n.create_time, n.is_read
        FROM notification n
        WHERE n.recipient_email = ? 
        ORDER BY n.create_time DESC";

        $stmt = $database->prepare($sql);
        $stmt->bind_param("s", $recipient_email);
        $stmt->execute();
        $result = $stmt->get_result();
        echo "<h1>Request List</h1>";
        if ($result->num_rows > 0) {
            while ($notification = $result->fetch_assoc()) {
                $class = $notification['is_read'] ? 'read' : '';
                echo "<div class='notification $class' data-id='{$notification['id']}'>";

                // Div chứa hình ảnh
                echo "<div class='notification-image'>";
                echo '<img src="../img/user.png" alt="User Icon" width="50px" style="border-radius:50%;">';
                echo "</div>";
                // Div chứa tiêu đề và thông điệp
                echo "<div class='notification-content'>";
                echo "<h3>{$notification['title']}</h3>"; // Tiêu đề
                echo "<p>{$notification['message']}</p>"; // Thông điệp
                echo "</div>";
                // div chứa phản hồi
                echo "<div class='response'>";
                echo "<button class='approve-btn' onclick=\"updateStatus({$notification['id']}, 'approve')\">Accept</button>";
                echo "<button class='reject-btn' onclick=\"updateStatus({$notification['id']}, 'reject')\">Reject</button>";
                echo "<button class='approved-btn' style='display: none;'>Accepted</button>";
                echo "<button class='rejected-btn' style='display: none;'>Rejected</button>";
                echo "</div>";
                // Div chứa biểu tượng menu
                echo "<div class='notification-menu'>";
                echo "<div class='menu-icon'>⋮</div>"; // Biểu tượng menu
                echo "<div class='options-menu'>";
                echo "<button class='mark-as-read' onclick='sendRequest({$notification['id']})' value='{$notification['id']}' name='id'>Mark as read</button>";
                echo "<a href='detail_notice.php?id={$notification['id']}' class='other-option'>View detail</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>"; // Đóng notification
            }
        } else {
            echo "<p> Notification is empty.</p>";
        }
        ?>
    </div>
    <!-- $number_of_nptice -->

    <script>
        function sendRequest(id) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'notice.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status == 200) {
                    console.log(`Request successfully sent to server + ${id}`);

                } else {
                    console.log('Error occurred:', xhr.statusText);
                }
            };
            xhr.send(`submit_button=clicked&id=${id}`); // Truyền id chính xác
        }


        document.addEventListener('DOMContentLoaded', () => {
            const notifications = document.querySelectorAll('.notification');
            const badge = document.querySelector('.badge');
            var numberOfNotice = badge.innerHTML;

            notifications.forEach(notification => {
                const menuIcon = notification.querySelector('.menu-icon');
                const optionsMenu = notification.querySelector('.options-menu');

                menuIcon.addEventListener('click', (e) => {
                    e.stopPropagation(); // Ngăn sự kiện lan ra ngoài
                    optionsMenu.style.display = optionsMenu.style.display === 'flex' ? 'none' : 'flex';
                });

                const markAsReadButton = optionsMenu.querySelector('.mark-as-read');
                markAsReadButton.addEventListener('click', () => {
                    if (!notification.classList.contains('read')) {
                        numberOfNotice = numberOfNotice - 1
                        badge.innerHTML = numberOfNotice;
                        if (numberOfNotice == 0) {
                            badge.style.display = 'none';
                        }
                    }
                    notification.classList.add('read');
                    optionsMenu.style.display = "none";
                });

                // Đóng menu khi nhấp ra ngoài
                document.addEventListener('click', () => {
                    optionsMenu.style.display = 'none';
                });
            });
        });

        function updateStatus(id, action) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'notice.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status == 200) {
                    console.log(`Request successfully sent to server: ID=${id}, Action=${action}`);
                    // Tìm phần tử notification tương ứng với id
                    var notification = document.querySelector(`.notification[data-id="${id}"]`);
                    if (notification) {
                        var approveBtn = notification.querySelector('.approve-btn');
                        var rejectBtn = notification.querySelector('.reject-btn');
                        var approvedBtn = notification.querySelector('.approved-btn');
                        var rejectedBtn = notification.querySelector('.rejected-btn');


                        // Ẩn 2 nút Duyệt và Từ chối
                        approveBtn.style.display = 'none';
                        rejectBtn.style.display = 'none';

                        // Kiểm tra hành động và hiển thị nút tương ứng
                        if (action === 'approve') {
                            if (approvedBtn) {
                                approvedBtn.style.display = 'inline-block'; // Hiển thị nút "Đã duyệt"
                            }
                        } else if (action === 'reject') {
                            if (rejectedBtn) {
                                rejectedBtn.style.display = 'inline-block'; // Hiển thị nút "Đã từ chối"
                            }
                        }
                    }
                } else {
                    console.log('Error occurred:', xhr.statusText);
                }
            };
            xhr.send(`id=${id}&action=${action}`); // Gửi cả id và action
        }
    </script>

</body>

</html>
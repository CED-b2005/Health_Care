<?php

//learn from w3schools.com

session_start();

if (isset($_SESSION["user"])) {
    if (($_SESSION["user"]) == "" or $_SESSION['usertype'] != 'd') {
        header("location: ../login.php");
    } else {
        $useremail = $_SESSION["user"];
    }
} else {
    header("location: ../login.php");
}

//import database
include("../connection.php");
$userrow = $database->query("select * from doctor where docemail='$useremail'");
$userfetch = $userrow->fetch_assoc();
$userid = $userfetch["docid"];
$username = $userfetch["docname"];


//echo $userid;
//echo $username;
// Lấy thông báo dành cho người dùng hiện tại
$notifications = $database->query("SELECT * FROM notification WHERE sender_email = '$useremail' ORDER BY create_time DESC");

// Xử lý đánh dấu đã đọc
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link rel="stylesheet" href="../css/doctor_notice.css"> -->
    <link rel="stylesheet" href="../css/notice.css">




</head>

<body>
</body>

</html>
<div class="container">
    <div class="menu">
        <table class="menu-container" border="0">
            <tr>
                <td style="padding:10px" colspan="2">
                    <table border="0" class="profile-container">
                        <tr>
                            <td width="30%" style="padding-left:20px">
                                <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                            </td>
                            <td style="padding:0px;margin:0px;">
                                <p class="profile-title"><?php echo substr($username, 0, 13)  ?>..</p>
                                <p class="profile-subtitle"><?php echo substr($useremail, 0, 22)  ?></p>
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
                <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
                    <a href="index.php" class="non-style-link-menu non-style-link-menu-active">
                        <div>
                            <p class="menu-text">Dashboard</p>
                    </a>
    </div></a>
    </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-appoinment">
            <a href="appointment.php" class="non-style-link-menu">
                <div>
                    <p class="menu-text">My Appointments</p>
            </a>
</div>
</td>
</tr>

<tr class="menu-row">
    <td class="menu-btn menu-icon-session">
        <a href="schedule.php" class="non-style-link-menu">
            <div>
                <p class="menu-text">My Sessions</p>
            </div>
        </a>
    </td>
</tr>
<tr class="menu-row">
    <td class="menu-btn menu-icon-patient">
        <a href="patient.php" class="non-style-link-menu">
            <div>
                <p class="menu-text">My Patients</p>
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
<tr class="menu-row">
    <td class="menu-btn menu-icon-settings">
        <a href="settings.php" class="non-style-link-menu">
            <div>
                <p class="menu-text">Settings</p>
        </a></div>
    </td>
</tr>

</table>
</div>
<div id="notification-container">
    <?php
    require_once '../connection.php';

    $recipient_email = 'admin@edoc.com';
    $sql = "SELECT n.id, n.title, n.message, n.create_time, n.is_read, n.is_accept
        FROM notification n
        WHERE n.recipient_email = ? 
        ORDER BY n.create_time DESC";

    $stmt = $database->prepare($sql);
    $stmt->bind_param("s", $recipient_email);
    $stmt->execute();
    $result = $stmt->get_result();
    echo "<h1>Danh sách phản hồi yêu cầu của bạn</h1>";
    if ($result->num_rows > 0) {
        while ($notification = $result->fetch_assoc()) {
            $class = $notification['is_read'] ? 'read' : '';
            $is_accept = isset($notification['is_accept']) ? $notification['is_accept'] : null;

            echo "<div class='notification $class' data-id='{$notification['id']}'>";

            echo "<div class='notification-image'>";
            echo '<img src="../img/user.png" alt="User Icon" width="50px" style="border-radius:50%;">';
            echo "</div>";

            echo "<div class='notification-content'>";
            echo "<h3>{$notification['title']}</h3>";
            echo "<p>{$notification['message']}</p>";
            echo "</div>";

            echo "<div class='response'>";
            if ($is_accept === 1) {
                echo "<button class='approved-btn' style='display: block;' value='$is_accept'>Yêu cầu đã được duyệt</button>";
            } elseif ($is_accept === 0) {
                echo "<button class='rejected-btn' style='display: block;' value='$is_accept'>Yêu cầu đã bị từ chối</button>";
            }
            echo "</div>";

            echo "<div class='notification-menu'>";
            echo "<div class='menu-icon'>⋮</div>";
            echo "<div class='options-menu'>";
            echo "<button class='mark-as-read' onclick='sendRequest({$notification['id']})' value='{$notification['id']}' name='id'>Đánh dấu đã đọc</button>";
            echo "<a href='detail_notification.php?id={$notification['id']}' class='other-option'>Xem Chi Tiết</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
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
</script>
</body>

</html>
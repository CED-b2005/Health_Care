<?php
session_start();
include("../connection.php");
// require_once("notice.php");

// Kiểm tra xem ID có được truyền qua không
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    die("ID không hợp lệ");
}

// Truy vấn thông tin chi tiết từ bảng `notification`
$query = "SELECT n.id, n.sender_email, n.recipient_email, n.title, n.message, n.type, n.is_read, n.is_accept, n.create_time
          FROM notification n
          WHERE n.id = ?";
$stmt = $database->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $notification = $result->fetch_assoc();
} else {
    die("Không tìm thấy thông báo.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Thông Báo</title>
    <link rel="stylesheet" href="../css/main.css">
    <style>
        /* Styling cơ bản cho giao diện */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-item .label {
            font-weight: bold;
            color: #555;
        }

        .detail-item .value {
            color: #333;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d8ebfa;
            color: #0A76D8;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0A76D8;
            color: white;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Views detail</h1>
        <div class="detail-item">
            <span class="label">ID:</span>
            <span class="value"><?php echo $notification['id']; ?></span>
        </div>
        <div class="detail-item">
            <span class="label">Sender_email:</span>
            <span class="value"><?php echo $notification['sender_email']; ?></span>
        </div>
        <div class="detail-item">
            <span class="label">Recipient_email:</span>
            <span class="value"><?php echo $notification['recipient_email']; ?></span>
        </div>
        <div class="detail-item">
            <span class="label">Title:</span>
            <span class="value"><?php echo $notification['title']; ?></span>
        </div>
        <div class="detail-item">
            <span class="label">Message:</span>
            <span class="value"><?php echo $notification['message']; ?></span>
        </div>
        <div class="detail-item">
            <span class="label">Status:</span>
            <span class="value"><?php echo $notification['is_read'] ? 'Read' : 'Unread'; ?></span>
        </div>
        <div class="detail-item">
            <span class="label">Response:</span>
            <span class="value">
                <?php
                if ($notification['is_accept'] === null) {
                    echo "in progress";
                } elseif ($notification['is_accept'] == 1) {
                    echo "accepted";
                } else {
                    echo "rejected";
                }
                ?>
            </span>
        </div>
        <div class="detail-item">
            <span class="label">Create_time:</span>
            <span class="value"><?php echo $notification['create_time']; ?></span>
        </div>
        <a href="notice.php" class="btn">Back</a>
    </div>
</body>

</html>
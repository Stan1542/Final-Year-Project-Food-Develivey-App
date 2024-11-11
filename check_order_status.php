<?php
include('elements/dbconnect.php');

if (isset($_SESSION['otp_user_id'])) {
    $userId = $_SESSION['otp_user_id'];
    $stmt = $conn->prepare("SELECT `Delivery_Status` FROM `orders` WHERE `User_id` = ? ORDER BY `Placed_On` DESC LIMIT 1");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
        echo json_encode(['status' => $order['Delivery_Status']]);
    } else {
        echo json_encode(['status' => 'No orders found']);
    }
} else {
    echo json_encode(['status' => 'User not logged in']);
}
?>
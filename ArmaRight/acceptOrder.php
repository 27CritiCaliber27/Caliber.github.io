<?php
if (isset($_POST['acceptOrder'])) {
    // Assuming you have a database connection here
    $conn = mysqli_connect("localhost", "root", "", "armadata");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the order ID to accept
    $orderId = $_POST['acceptOrder'];

    // Perform the necessary actions to accept the order (e.g., update the database)

    // Example query to update the order status to "Accepted"
    $sql = "DELETE * FROM order_items WHERE order_id = $orderId";

    if (mysqli_query($conn, $sql)) {
        echo "Order accepted successfully";
    } else {
        echo "Error accepting order: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
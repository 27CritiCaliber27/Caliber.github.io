<?php
session_start();
$database_name = "armadata";
    $con = mysqli_connect("localhost","root","",$database_name);

// Check if the user is logged in or implement your authentication logic here

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    
    // Process the checkout logic
    if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
        // Assuming you have a users table in your database
        $userId = 1;
        $total = 0;

        // Perform any additional processing, such as updating the database, sending confirmation emails, etc.
        // Insert the order into the database
        $insertOrderQuery = "INSERT INTO orders (user_id, total_amount) VALUES ('$userId', '$total')";
        mysqli_query($con, $insertOrderQuery);

        // Get the order ID
        $orderId = mysqli_insert_id($con);

        // Insert each item from the cart into the order_items table
        foreach ($_SESSION["cart"] as $key => $value) {
            $productId = $value["product_id"];
            $quantity = $value["item_quantity"];
            $price = $value["product_price"];

            $insertItemQuery = "INSERT INTO order_items (product_id, quantity, price) VALUES ('$productId', '$quantity', '$price')";
            mysqli_query($con, $insertItemQuery);
        }

        
        // Clear the cart after successful checkout
        $_SESSION["cart"] = array();
        
        // Redirect to a thank you page or any other appropriate page
        header("Location: thankYou.php");
        exit();
    } else {
        // Redirect to the cart page if the cart is empty
        echo '<script>
            function confirmCart(){
                alert("There are no items in the cart!");
            }
            </script>';
        header("Location: productCart.php");
        exit();
    }
} else {
    // Redirect to the home page or handle the request accordingly
    header("Location: index.php");
    exit();
}
?>
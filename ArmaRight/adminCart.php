<?php
// Assuming you have a database connection here
$conn = mysqli_connect("localhost", "root", "", "armadata");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted for clearing orders
if (isset($_POST["clearOrders"])) {
    // Logic to clear orders (truncate the order_items table)
    $sqlTruncate = "TRUNCATE TABLE order_items";
    if (mysqli_query($conn, $sqlTruncate)) {
        echo '<script>alert("Orders ready for delivery!");</script>';
    } else {
        echo '<script>alert("Error clearing orders: ' . mysqli_error($conn) . '");</script>';
    }
}

// Fetch orders from the database
$sql = "SELECT * FROM order_items";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            header {
    text-align: left;
    background-color: white;
    margin-top: -20px;
    margin-bottom: -20px;
    margin-left: -20px;
    margin-right: -20px;
    padding-left: 1%;
    color: black;
    font-family:'Times New Roman', Times, serif;
}

body {
    background-image:url(images/destinyBack.png); 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;   
    text-align: center;
}

h3 {
    text-align: center;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    margin-right: -20px;
    margin-left: -10px;
}
  
  /* Navigation links */
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    padding-right: 1%;
    text-decoration: none;
}
  
  /* The subnavigation menu */
.subnav {
    float: left;
    overflow: hidden;
}
  
  /* Subnav button */
.subnav .subnavbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
  
  /* Add a red background color to navigation links on hover */
.navbar a:hover, .subnav:hover .subnavbtn {
    background-color: red;
}
  
  /* Style the subnav content - positioned absolute */
.subnav-content {
    display: none;
    position: absolute;
    left: 0;
    background-color: red;
    width: 100%;
    z-index: 1;
}
  
  /* Style the subnav links */
.subnav-content a {
    float: left;
    color: white;
    text-decoration: none;
}
  
  /* Add a grey background color on hover */
.subnav-content a:hover {
    background-color: #eee;
    color: black;
}
  
  /* When you move the mouse over the subnav container, open the subnav content */
.subnav:hover .subnav-content {
    display: block;
}

a.devPage {
    float: right;
    padding-left: 1%;
    padding-right: 1%;
    
}

body {
    background-image:url(images/destinyBack.png); 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;   
    text-align: center;
}



section {
    width: 100%;
    height: 100%;
    display:list-item;
    background-color: white;
    border-style: groove;
    padding-bottom: 1%;
    margin-top: 20px;
}

div.cartContent {
    text-align: left;
}

button {
    border-style: groove;
    width: auto;
    height: 5%;
}

div.body {
    text-align: justify;
    background-color: white;
    border-style: groove;
    padding: 1%;
    margin: 1%;
    margin-top: 20px;
}

div.references {
    text-align: left;
    background-color: gray;
    border-style: groove;
    padding: 1%;
    margin: 1%;
}

tr {
    text-align: center;
    background-color: white;
}

table td{
    background-color: grey;
    border-style: groove;
}
        </style>
        <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
        <title> ARMA RIGHT </title>
    </head>
    <body>
        <header>
            <image src = "images/LogoFinalAltTitle.png" width = "350px" height = "250px" id = "logo"></image>
        </header>
        <div class="navbar">
            <a href = "adminCart.php"> Orders </a>
            <div class="subnav">
                <button class="subnavbtn"> Shop <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="adminPistols.php"> Pistols </a>
                    <a href="adminSMG.php"> SMGs </a>
                    <a href="adminAssault.php"> Assault Rifles </a>
                </div>
            </div>
        
            <a class = "devPage" href="index.php"> Log Out </a>
        </div>
        <section>
        <h3>Orders</h3>
        <form method="post" action="adminCart.php">
        
    

    <!-- Your existing HTML content -->

    <?php
    // Display the table of orders
    if (mysqli_num_rows($result) > 0) {
        ?>
        <table border="1">
            <tr>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <button type="submit" name="clearOrders">Accept Orders</button>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row["product_id"]; ?></td>
                    <td><?php echo $row["quantity"]; ?></td>
                    <td>$ <?php echo $row["price"]; ?></td>
                    <td>$ <?php echo number_format($row["quantity"] * $row["price"], 2); ?></td>                    
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else {
        echo "<p>No orders available.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
        
        </form>
        </section>
        <script src = "adminCart.js"></script>
    </body>
</html>
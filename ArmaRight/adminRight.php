<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "adminCart.css">
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
        
            <a class = "devPage" href="armaLog.php"> Log Out </a>
        </div>
        <section>
        <h3>Orders</h3>
        <form method="post" action="acceptOrder.php">
            <table border="1">
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>

                <?php
                // Assuming you have a database connection here
                $conn = mysqli_connect("localhost", "root", "", "your_database_name");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch orders from the database
                $sql = "SELECT * FROM orders";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["product_name"]; ?></td>
                            <td><?php echo $row["quantity"]; ?></td>
                            <td>$ <?php echo $row["price"]; ?></td>
                            <td>$ <?php echo number_format($row["quantity"] * $row["price"], 2); ?></td>
                            <td><button type="submit" name="acceptOrder" value="<?php echo $row["order_id"]; ?>">Accept Order</button></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>No orders available.</td></tr>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </table>
        </form>
        </section>
    </body>
</html>
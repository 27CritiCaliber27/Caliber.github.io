<?php
    session_start();
    $database_name = "armadata";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                    
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="productCart.php"</script>';
            }else{
                echo '<script>alert("Product is already added to Cart!")</script>';
                echo '<script>window.location="productCart.php"</script>';
            }
            
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Removing a product!")</script>';
                    echo '<script>window.location="productCart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weapon Cart</title>
    <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

.navbar {
    overflow: hidden;
    background-color: #333;
    margin-right: 5px;
    margin-left: -5px;
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

div.body {
    text-align: justify;
    background-color: white;
    border-style: groove;
    padding: 1%;
    color: black;
    margin: 1%;
    font-family:'Times New Roman', Times, serif;
}

.product{
    border: 1px solid #eaeaec;
    margin: -1px 19px 3px -1px;
    padding: 10px;
    text-align: center;
    background-color: #efefef;
    border-style: groove;
}
        
table, th, tr{
    text-align: center;
    background-color: white;
}

.title2{
    text-align: center;
    color: black;
    background-color: #efefef;
    padding: 2%;
    border-style: groove;
}
h3{
    text-align: center;
    color: black;
    background-color: #efefef;
    padding: 2%;
    border-style: groove;
}

h2{
    text-align: center;
    color: black;
    background-color: #efefef;
    padding: 2%;
    border-style: groove;
}

table th{
    background-color: grey;
    border-style: groove;
}

    </style>
</head>
<body>
    <header>
        <image src = "images/LogoFinalAltTitle.png" width = "350px" height = "250px" id = "logo"></image>
        <div class="navbar">
        <a href="armaRight.php"> Home </a>
        <div class="subnav">
            <button class="subnavbtn"> Shop <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="armaPistols.php"> Pistols </a>
                    <a href="armaSMG.php"> SMGs </a>
                    <a href="armaAssault.php"> Assault Rifles </a>
                </div>
            </div>
        
            <a class = "devPage" href="productCart.php"> Cart </a>
            <a class = "devPage" href="devPage.php"> Contact Us </a>
            <a class = "devPage" href="index.php"> Log Out </a>
        </div>
    </header>
    
    <div class="container" style="width: 65%">
        <h2>Weapons for Sale</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="productCart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2"> Weapon Cart </h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>


            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="productCart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger"> Remove Item </span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right"> Total </td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
                
            </table>
            <div class="text-right" style="margin-top: 10px;">
                <a href = "checkout.php" class = "btn btn-primary" method = "confirmCart"> Checkout </a>
            </div> <br>
        </div>     
    </div>
</body>
</html>
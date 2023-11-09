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
        
            <a class = "devPage" href="index.php"> Log Out </a>
        </div>
        <section>
            <h3> Orders </h3>
            <div id = "cartContent">
                <!-- Shows the ordered items of the customer -->
            </div>
            <button onclick = "confirmCart()"> Accept and Ship Order </button>
            <button onclick = "clearCart()"> Reject Order </button>
        </section>
        <script src = "adminCart.js"></script>
    </body>
</html>
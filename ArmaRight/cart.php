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
    background-color: gray;
    border-style: groove;
    padding-bottom: 1%;
}

div.cartContent {
    text-align: left;
}

button {
    border-style: groove;
    width: 5%;
    height: 5%;
}

div.body {
    text-align: justify;
    background-color: gray;
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

        </style>
        <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
        <title> ARMA RIGHT </title>
    </head>
    <body>
        <header>
            <image src = "images/LogoFinalAltTitle.png" width = "350px" height = "250px" id = "logo"></image>
        </header>
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
        
            <a class = "devPage" href="cart.php"> Cart </a>
            <a class = "devPage" href="devPage.php"> Contact Us </a>
            <a class = "devPage" href="armaLog.php"> Log Out </a>
        </div>
        <section>
            <h3> Weapon Cart </h3>
            <div id = "cartContent">
                <!-- Cart content will be displayed here -->
            </div>
            <button onclick = "confirmCart()"> Submit Order </button>
            <button onclick = "clearCart()"> Clear Order </button>
        </section>

        <script src = "cart.js"></script>
    </body>
</html>
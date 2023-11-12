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

ul.weapons {
    width: 75%;
    height: 75%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

li.mac10 {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}

div.mac10Hover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.mac10Hover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

li.mp5 {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.mp5Hover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.mp5Hover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

li.ump {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.umpHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.umpHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

li.p90 {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.p90Hover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.p90Hover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

li.vector {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.vectorHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.vectorHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

button {
    border-style: groove;
}

div.stats{
    text-align: justify;
}

div.navBar {
    background: blue;
    border-style: groove;
    height: 30px;
    font-size: 15px;
    text-align: justify;
    padding-top: 1%;
    padding-left: 1%;
    padding-right: 1%;
    
}

a.devPage {
    float: right;
    padding-left: 1%;
    padding-right: 1%;
    
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
                <button class="subnavbtn"> Weapons <i class="fa fa-caret-down"></i></button>
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
        
        <ul class = "weapons">

            <div class = "mac10Hover">
                <li class = "mac10">
                    <h3> Mac-10 </h3>
                    <img src = "images/mac10.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Typically chambered in 9x19mm Parabellum or .45 ACP, with other caliber variants available. </p>
                        <p> Capacity: Utilizes detachable box magazines with various capacities, including 20, 30, and 32 rounds. </p>
                        <p> Action: Blowback-operated, fully automatic. </p>
                        <p> Rate of Fire: Known for its exceptionally high rate of fire, often exceeding 1,000 rounds per minute. </p>
                        <p> Sights: Equipped with rudimentary iron sights, typically consisting of a front post and a rear notch. </p>
                    </div>
                </li>>
            </div>

            <div class = "mp5Hover">
                <li class = "mp5">
                    <h3> H&K MP5 </h3>
                    <img src = "images/mp5.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Calibers: Available in various calibers, including 9x19mm Parabellum, .40 S&W, and 10mm Auto. </p>
                        <p> Action: Roller-delayed blowback, selective fire (fully automatic or semi-automatic). </p>
                        <p> Capacity: Utilizes detachable box magazines with capacities ranging from 15 to 30 rounds. </p>
                        <p> Rate of Fire: Selectable rate of fire, typically around 800 rounds per minute. </p>
                        <p> Sights: Equipped with adjustable, high-quality iron sights, ensuring accuracy and target acquisition. </p>
                    </div>
                </li>
            </div>

            <div class = "umpHover">
                <li class = "ump">
                    <h3> H&K UMP-45 </h3>
                    <img src = "images/ump45.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Chambered for the .45 ACP cartridge, known for its stopping power. </p>
                        <p> Action: Blowback-operated, selective fire (fully automatic, two-round burst, or semi-automatic). </p>
                        <p> Capacity: Utilizes detachable box magazines with capacities ranging from 12 to 25 rounds. </p>
                        <p> Rate of Fire: Selectable rate of fire, typically around 600 rounds per minute. </p>
                        <p> Sights: Equipped with adjustable sights for improved accuracy and target acquisition. </p>
                    </div>
                </li>
            </div>

            <div class = "p90Hover">
                <li class = "p90">
                    <h3> FN P90 </h3>
                    <img src = "images/fnP90.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Chambers the 5.7x28mm cartridge, known for its high velocity and armor-penetrating capabilities. </p>
                        <p> Action: Blowback-operated, selective fire (fully automatic or semi-automatic). </p>
                        <p> Capacity: Utilizes detachable box magazines with capacities of 10, 20, or 50 rounds, depending on the model. </p>
                        <p> Rate of Fire: Typically around 900 rounds per minute. </p>
                        <p> Sights: Equipped with integrated iron sights, often with a top-mounted Picatinny rail for optics or accessories. </p>
                    </div>
                </li>
            </div>

            <div class = "vectorHover">
                <li class = "vector">
                    <h3> Kriss Vector </h3>
                    <img src = "images/krissVector.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Calibers: Available in various calibers, including 9x19mm Parabellum, .45 ACP, and 10mm Auto, offering flexibility in ammunition selection. </p>
                        <p> Action: Patented "Super V" delayed blowback action, which redirects recoil energy downward, reducing felt recoil and muzzle rise. </p>
                        <p> Capacity: Utilizes detachable magazines with various capacities, depending on the caliber and model. </p>
                        <p> Rate of Fire: Typically around 1,200 rounds per minute in fully automatic mode; semi-automatic versions are also available. </p>
                        <p> Sights: Equipped with flip-up iron sights and often features a top Picatinny rail for optics or accessories. </p>
                    </div>
                </li>
            </div>
        </ul>
        <script src = "armaSMG.js"></script>
    </body>
</html>
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

section.weapons {
    width: 75%;
    height: 75%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

div.glock {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}

div.usp {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.uspHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.uspHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.glockHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.glockHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.desertEagle {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.desertEagleHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.desertEagleHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.fiveSeven {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.fiveSevenHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.fiveSevenHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.cz75o {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.cz75oHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.cz75oHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.addItem {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.addItemHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.addItemHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

button.addItem {
    width: 100%;
    height: 100%;
    background-color: white;
}

div.stats{
    text-align: justify;
}

        </style>
        <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
        <title> ADMIN RIGHT </title>
    </head>
    <body>
        <header>
            <image src = "images/LogoFinalAltTitle.png" width = "350px" height = "250px" id = "logo"></image>
        </header>
        <div class="navbar">
            <a href="adminCart.php"> Orders </a>
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

        <section class = "weapons">

            <div class = "glockHover">
                <div class = "glock">
                    <h3> Glock-17 </h3>
                    <img src = "images/glock17.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: 9x19mm Parabellum. </p>
                        <p> Capacity: Typically 17 rounds in the standard magazine. </p>
                        <p> Action: Striker-fired, semi-automatic. </p>
                        <p> Safety: Features a trigger safety and firing pin safety. </p>
                        <p> Accuracy: Known for its accuracy and reliability, even in adverse conditions. </p>
                    </div>
                </div>>
            </div>

            <div class = "uspHover">
                <div class = "usp">
                    <h3> USP </h3>
                    <img src = "images/USP.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Calibers: Available in various calibers, including 9x19mm, .40 S&W, and .45 ACP. </p>
                        <p> Action: Recoil-operated, semi-automatic. </p>
                        <p> Capacity: Magazine capacity varies by caliber and model. </p>
                        <p> Safety: Equipped with multiple safety features, including a manual safety/decocking lever and firing pin block. </p>
                        <p> Accuracy: Known for its accuracy and reliable performance in various conditions. </p>
                    </div>
                </div>
            </div>

            <div class = "desertEagleHover">
                <div class = "desertEagle">
                    <h3> Desert Eagle </h3>
                    <img src = "images/desertEagle.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Calibers: Available in powerful calibers such as .357 Magnum, .44 Magnum, .50 Action Express. </p>
                        <p> Action: Gas-operated, semi-automatic. </p>
                        <p> Capacity: Magazine capacity varies by caliber, typically 7 rounds for .357 Magnum, 8 rounds for .44 Magnum, and 7 rounds for .50 AE. </p>
                        <p> Safety: Equipped with a manual safety lever. </p>
                        <p> Accuracy: Known for its accuracy and long-range capabilities, often used in target shooting competitions. </p>
                    </div>
                </div>
            </div>

            <div class = "fiveSevenHover">
                <div class = "fiveSeven">
                    <h3> Five-seveN </h3>
                    <img src = "images/fiveSeven.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Calibers: Chambered for the unique 5.7x28mm cartridge, known for its armor-penetrating capabilities and reduced recoil. </p>
                        <p> Action: Recoil-operated, semi-automatic. </p>
                        <p> Capacity: Typically comes with 20-round magazines, but 10-round versions are available for some markets. </p>
                        <p> Safety: Equipped with ambidextrous manual safety and trigger safety. </p>
                        <p> Accuracy: Known for its accuracy, especially at medium distances. </p>
                    </div>
                </div>
            </div>

            <div class = "cz75oHover">
                <div class = "cz75o">
                    <h3> CZ-75 Omega </h3>
                    <img src = "images/cz75o.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Calibers: Available in various calibers, including 9x19mm Parabellum and .40 S&W. </p>
                        <p> Action: Features a simplified trigger system that allows users to easily switch between DA/SA trigger 
                            and SAO trigger, providing versatility in shooting styles. </p>
                        <p> Capacity: Magazine capacity varies depending on the specific model and caliber. </p>
                        <p> Safety: Equipped with various safety features, including ambidextrous manual safety, firing pin safety, 
                            and a hammer safety notch. </p>
                        <p> Accuracy: Benefits from a combination of factors, a high-quality barrel, adjustable sights, and a predictable trigger pull 
                            that contribute to consistent shot placement and tight groupings on target. </p>
                    </div>
                </div>
            </div>

            <div class = "addItemHover">
                <div class = "addItem">
                    <button class = "addItem" onclick = "buttonMode()"> Add an item </button>
                </div>
            </div>
        </section>
        <script src = "adminPistols.js"></script>
    </body>
</html>
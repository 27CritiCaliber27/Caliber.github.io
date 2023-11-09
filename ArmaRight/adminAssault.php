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

section.weapons {
    width: 75%;
    height: 75%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

div.m4a1 {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}

div.m4a1Hover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.m4a1Hover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.famas {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.famasHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.famasHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.fnFAL {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.fnFALHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.fnFALHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.groza {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.grozaHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.grozaHover:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

div.steyrAug {
    width: 350px;
    height: 700px;
    background-color: white;
    padding: 1%;
    margin: 1%;
    border-style: groove;

}
div.steyrAugHover {
    padding: 1%;
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 900px;
}
      
div.steyrAugHover:hover {
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
        
            <a class = "devPage" href="armaLog.php"> Log Out </a>
        </div>
        <section class = "weapons">

            <div class = "m4a1Hover">
                <div class = "m4a1">
                    <h3> M4A1 </h3>
                    <img src = "images/m4A1.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Typically chambered in 5.56x45mm NATO, offering a balance of range and firepower. </p>
                        <p> Action: Gas-operated, selective fire (fully automatic or semi-automatic). Some variants feature a burst fire mode. </p>
                        <p> Capacity: Uses detachable box magazines, often with 20 or 30 rounds, though other capacities are available. </p>
                        <p> Rate of Fire: Fully automatic mode typically has a cyclic rate of around 700-950 rounds per minute. </p>
                        <p> Accuracy: Renowned for its accuracy within its effective range, making it effective in both close quarters and medium-range engagements. </p>
                    </div>
                </div>>
            </div>

            <div class = "famasHover">
                <div class = "famas">
                    <h3> FAMAS </h3>
                    <img src = "images/famas.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Originally chambered in 5.56x45mm NATO, later versions adopted other calibers. </p>
                        <p> Action: Gas-operated, selective fire (fully automatic or semi-automatic). </p>
                        <p> Capacity: Uses detachable magazines with various capacities, commonly 25 or 30 rounds. </p>
                        <p> Rate of Fire: Capable of a cyclic rate of approximately 900 rounds per minute. </p>
                        <p> Accuracy: Generally accurate within its effective range, but limitations may exist due to its relatively short barrel length. </p>
                    </div>
                </div>
            </div>

            <div class = "fnFALHover">
                <div class = "fnFAL">
                    <h3> FN FAL </h3>
                    <img src = "images/fnFAL.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Originally chambered in 7.62x51mm NATO, offering substantial firepower. </p>
                        <p> Action: Gas-operated, selective fire (fully automatic or semi-automatic). Some variants are semi-automatic only. </p>
                        <p> Capacity: Uses detachable box magazines with capacities typically ranging from 20 to 30 rounds. </p>
                        <p> Rate of Fire: Fully automatic mode typically has a cyclic rate of around 650-700 rounds per minute. </p>
                        <p> Accuracy: Capable of delivering accurate fire out to medium ranges, especially in semi-automatic mode. </p>
                    </div>
                </div>
            </div>

            <div class = "grozaHover">
                <div class = "groza">
                    <h3> OTS-14 </h3>
                    <img src = "images/groza.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Typically chambered in 9x39mm, a subsonic cartridge designed for quiet and accurate shooting. </p>
                        <p> Action: Gas-operated, selective fire (fully automatic or semi-automatic). </p>
                        <p> Capacity: Uses detachable box magazines with capacities ranging from 10 to 20 rounds. </p>
                        <p> Rate of Fire: Fully automatic mode typically has a cyclic rate of around 700-800 rounds per minute. </p>
                        <p> Accuracy: Capable of delivering accurate fire within its effective range, especially when used with subsonic ammunition. </p>
                    </div>
                </div>
            </div>

            <div class = "steyrAugHover">
                <div class = "steyrAug">
                    <h3> Steyr Aug </h3>
                    <img src = "images/steyrAug.png" width = "300px" height = "200px">
                    <div class = "stats">
                        <h4> Characteristics: </h4>
                        <p> Caliber: Typically chambered in 5.56x45mm NATO, offering a balance of range and firepower. </p>
                        <p> Action: Gas-operated, selective fire (fully automatic or semi-automatic). </p>
                        <p> Capacity: Uses detachable translucent magazines with capacities of 30 rounds, although other capacities are available. </p>
                        <p> Rate of Fire: Fully automatic mode typically has a cyclic rate of around 680-750 rounds per minute. </p>
                        <p> Accuracy: Renowned for its accuracy, with the integrated optic aiding in precise shooting. </p>
                    </div>
                </div>
            </div>

            <div class = "addItemHover">
                <div class = "addItem">
                    <button class = "addItem" onclick = "buttonMode()"> Add an item </button>
                </div>
            </div>
            
        </section>
        <script src = "adminAssault.js"></script>
    </body>
</html>
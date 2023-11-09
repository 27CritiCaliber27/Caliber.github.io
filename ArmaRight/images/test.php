<!DOCTYPE html>
<html>
    <head>
        <style>
            /* The navigation menu */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navigation links */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
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

        </style>
    </head>
    <body>
    <!-- The navigation menu -->
        <div class="navbar">
            <a href="#home">Home</a>
            <div class="subnav">
            <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#company">Company</a>
                <a href="#team">Team</a>
                <a href="#careers">Careers</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#bring">Bring</a>
                <a href="#deliver">Deliver</a>
                <a href="#package">Package</a>
                <a href="#express">Express</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#link1">Link 1</a>
                <a href="#link2">Link 2</a>
                <a href="#link3">Link 3</a>
                <a href="#link4">Link 4</a>
            </div>
        </div>
        <a href="#contact">Contact</a>
    </div>
    </body>
</html>
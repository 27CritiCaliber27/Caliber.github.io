const form = document.getElementById("logIn")
        // to function the form
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting

            const adminUser = "CritiCaliber";
            const adminMail = "peterlaporre27@gmail.com"
            const adminPass = "admin";
           
            const userName = document.getElementById("userName").value;
            const passWord = document.getElementById("password").value;

            if (userName == (adminUser && passWord == adminPass) || (adminMail && passWord == adminPass)) {
                alert("Welcome back, " + adminUser + "!");
                window.location.href = "adminCart.php";
            }
  
            else if (userName != adminUser || passWord != adminPass){
                alert("Incorrect username and/or password. Please try again.");
                form.reset();
            }
            
            else {
                alert("Invalid inputs. Please check your entries.");
            }
        });

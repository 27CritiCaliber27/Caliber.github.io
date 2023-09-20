const form = document.getElementById("logIn")
        // to function the form
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting

            const adminUser = "admin";
            const adminPass = "admin";
            const testUser = "student1";
            const testPass = "1234";
            const userName = document.getElementById("userName").value;
            const passWord = document.getElementById("password").value;

            if (userName == adminUser && passWord == adminPass) {
                alert("Get back to post, " + adminUser + "!");
                window.location.href = "adminRight.html";
            }
            else if (userName == testUser && passWord == testPass){
                alert("Welcome to the shop, " + testUser + "!");
                window.location.href = "armaRight.html";
            }
                
            else if ((userName != adminUser || passWord != adminPass) && (userName != testUser || passWord != testPass)){
                alert("Incorrect username and/or password. Please try again.");
                form.reset();
            }
            
            else {
                alert("Invalid inputs. Please check your entries.");
            }
        });
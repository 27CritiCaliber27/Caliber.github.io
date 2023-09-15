const form = document.getElementById("myForm")
        // to function the form
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting

            const firstName = document.getElementById("firstName").value;
            const middleInitial = document.getElementById("middleInitial").value;
            const lastName = document.getElementById("lastName").value;
            const email = document.getElementById("email").value;

            if (!firstName || !middleInitial || !lastName || !isValidEmail(email)) {
                alert("Invalid inputs. Please check your entries.");
            } else {
                alert("Success!");
                form.reset(); // Clear the form
            }
        });
        
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
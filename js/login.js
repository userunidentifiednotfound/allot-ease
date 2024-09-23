//Login Function
function validateLogin(event) {
    event.preventDefault(); // Prevent the form from submitting

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Validate credentials
    if (email === "allotease" && password === "varun") {
       window.location.href = "admin.html"; // Redirect to admin panel
    } else {
       alert("Incorrect username or password. Please try again.");
    }
 }

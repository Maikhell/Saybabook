document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("logoutbtn");

    if (button) {
        button.addEventListener("click", askUser);
    } else {
        console.error("Error: Button with ID 'logoutbtn' not found.");
    }

    function askUser(event) {
        // Prevent form submission or default behavior
        event.preventDefault();
        try {
            let answer = confirm("Are you sure you want to logout?");
            if (answer === true) {
                console.log("True: Logging out...");
                // Redirect after confirmation
                window.location.href = "landingpage.php";
            } else {
                console.log("Didn't logout: User cancelled.");
            }
        } catch (err) {
            console.error("An unexpected error occurred:", err);
        }
    }
});

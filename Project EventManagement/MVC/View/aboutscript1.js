document.addEventListener("DOMContentLoaded", function() {
    const eventForm = document.getElementById("eventForm");
    const messageDiv = document.getElementById("message");

    eventForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const category = document.getElementById("category").value;
        const description = document.getElementById("description").value;

        if (validateForm(name, category, description)) {
            createEvent(name, category, description);
        }
    });

    function validateForm(name, category, description) {
        if (name.trim() === "" || category.trim() === "" || description.trim() === "") {
            messageDiv.textContent = "All fields are required";
            return false;
        }
        return true;
    }

    function createEvent(name, category, description) {
        fetch("create_event.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ name, category, description })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then(message => {
            messageDiv.textContent = message;
            eventForm.reset();
        })
        .catch(error => {
            console.error("Error creating event:", error);
            messageDiv.textContent = "Error creating event. Please try again later.";
        });
    }
});

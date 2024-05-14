document.addEventListener("DOMContentLoaded", function() {
    const contactList = document.getElementById("contactList");

    // Load contact details using AJAX
    fetch("contacts.php")
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(data => {
            displayContactDetails(data);
        })
        .catch(error => {
            console.error("Error loading contact details:", error);
            contactList.innerHTML = "<li>Error loading contact details. Please try again later.</li>";
        });

    // Function to display contact details
    function displayContactDetails(contact) {
        const contactItems = [
            `<li><strong>Name:</strong> ${contact.name}</li>`,
            `<li><strong>Email:</strong> ${contact.email}</li>`,
            `<li><strong>Phone:</strong> ${contact.phone}</li>`,
            `<li><strong>Address:</strong> ${contact.address}</li>`
        ];
        contactList.innerHTML = contactItems.join("");
    }
});

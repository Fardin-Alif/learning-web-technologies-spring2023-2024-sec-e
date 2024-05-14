document.addEventListener("DOMContentLoaded", function() {
    const eventList = document.getElementById("eventList");

    // Function to fetch events from server
    function fetchEvents() {
        fetch("events.json")
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(events => {
                displayEvents(events);
            })
            .catch(error => {
                console.error("Error fetching events:", error);
            });
    }

    // Function to display events
    function displayEvents(events) {
        eventList.innerHTML = "";
        events.forEach(event => {
            const eventElement = document.createElement("div");
            eventElement.classList.add("event");
            eventElement.innerHTML = `
                <h3>${sanitizeHTML(event.name)}</h3>
                <p><strong>Category:</strong> ${sanitizeHTML(event.category)}</p>
                <p>${sanitizeHTML(event.description)}</p>
                <button onclick="updateEvent(${event.id})">Update</button>
            `;
            eventList.appendChild(eventElement);
        });
    }

    // Function to update event
    window.updateEvent = function(id) {
        // Redirect to update page with event ID
        window.location.href = `update_event.php?id=${id}`;
    };

    // Function to sanitize HTML
    function sanitizeHTML(str) {
        const temp = document.createElement("div");
        temp.textContent = str;
        return temp.innerHTML;
    }

    // Initial fetch of events
    fetchEvents();
});

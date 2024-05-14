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
                <h3>${event.name}</h3>
                <p><strong>Category:</strong> ${event.category}</p>
                <p>${event.description}</p>
            `;
            eventList.appendChild(eventElement);
        });
    }

    // Initial fetch of events
    fetchEvents();
});

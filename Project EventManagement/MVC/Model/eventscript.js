document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const filterCheckboxes = document.querySelectorAll(".filter");
    const eventList = document.getElementById("eventList");

    searchInput.addEventListener("input", filterEvents);
    filterCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener("change", filterEvents);
    });

    function filterEvents() {
        const searchValue = searchInput.value.toLowerCase();
        const filters = Array.from(filterCheckboxes).filter(checkbox => checkbox.checked).map(checkbox => checkbox.value);

        // AJAX call to fetch event data
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    const filteredEvents = data.filter(event => {
                        return (event.name.toLowerCase().includes(searchValue) || event.description.toLowerCase().includes(searchValue)) &&
                            (filters.length === 0 || filters.includes(event.category));
                    });
                    displayEvents(filteredEvents);
                } else {
                    console.error("Error fetching events:", xhr.status);
                }
            }
        };
        xhr.open("GET", "events.json");
        xhr.send();
    }

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
});

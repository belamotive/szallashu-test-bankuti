import "bootstrap";
import "bootstrap/dist/css/bootstrap.css";

document.addEventListener("DOMContentLoaded", function () {
    const listItems = document.querySelectorAll(".list__item");

    listItems.forEach(function (item) {
        const arrow = item.querySelector(".list__arrow");
        const infoWindow = item.querySelector(".list__info");

        item.addEventListener("click", function () {
            // Adjust the event listener to toggle the class on the infoWindow element
            infoWindow.classList.toggle("list__info--visible");
        });

        // Add an event listener to hide the infoWindow when clicking outside the list item
        document.addEventListener("click", function (event) {
            if (!item.contains(event.target)) {
                infoWindow.classList.remove("list__info--visible");
            }
        });
    });
});

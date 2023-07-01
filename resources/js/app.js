import "bootstrap";
import "bootstrap/dist/css/bootstrap.css";

const moreResultsButton = document.getElementById("more-results");
const list = document.querySelector(".list");
let moreRequested = 0;
const itemsPerLoad = 3;

console.log("list:", list);

/* moreResultsButton.addEventListener("click", function () {
    // Fetch additional items using AJAX
    fetch(
        "/api/more-results?limit=" + itemsPerLoad + "&offset=" + moreRequested
    )
        .then((response) => response.json())
        .then((data) => {
            // Append the new items to the list
            data[0].forEach((title) => {
                const listItem = document.createElement("li");
                listItem.className = "list__item col-sm-4";
                listItem.innerHTML = `
                    <div class="image list__cover-image">IMG</div>
                    <h3 class="list__title">${title}</h3>
                `;
                list.appendChild(listItem);
            });

            // Update the number of items to show for the next "More results" click
            moreRequested += itemsPerLoad;

            console.log("moreRequested:", moreRequested);
            console.log("data[1]:", data[1]);

            // Check if there are no more results
            if (data[1] <= moreRequested) {
                moreResultsButton.style.display = "none";
            }
        });
}); */

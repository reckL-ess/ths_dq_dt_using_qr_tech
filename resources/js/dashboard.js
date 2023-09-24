// dashboard.js

// Wait for the page to fully load before running the JavaScript
document.addEventListener("DOMContentLoaded", function () {
    const clickableElement = document.getElementById("clickable");
    const displayElement = document.getElementById("display");

    clickableElement.addEventListener("click", () => {
        if (displayElement.style.display === "none") {
            displayElement.style.display = "block";
        } else {
            displayElement.style.display = "none";
        }
    });
});

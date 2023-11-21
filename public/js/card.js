function redirectToPage(url) {
    // This function redirects to the specified page when the card is clicked
    window.location.href = url;
}

function saveCard(event) {
    // This function handles the save icon click
    event.stopPropagation(); // Stop the click event from propagating to the card
    // Implement your save functionality here
    console.log("Saved!");
}

function likeCard(event) {
    // This function handles the like icon click
    event.stopPropagation(); // Stop the click event from propagating to the card
    // Implement your like functionality here
    console.log("Liked!");
}
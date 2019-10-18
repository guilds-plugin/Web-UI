//How to target elements with JS: https://developer.mozilla.org/nl/docs/Web/API/Document/querySelector
const searchField = document.querySelector('.search');
const guildNames = document.querySelectorAll('.guild-name');

//How to bind events to elements: https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener
if (searchField !== null) {
    searchField.addEventListener('keyup', filterGuilds);
}

// The function that gets executed every time a key is released inside the search field
function filterGuilds(event)
{
    // Get the entered value from the search field
    let searchString = searchField.value;
    console.log(searchString);

    // Loop over all the guild names in the table
    guildNames.forEach(function (name) {

        // Reset all rows back to display block (to re-show what was hidden before)
        name.parentElement.parentElement.style.display = 'table-row';

        // Get the text value of the guild links
        const guildName = name.textContent.toLowerCase();

        // If the guild name does not contain the search string
        if (!guildName.includes(searchString)) {

            // Hide that row
            name.parentElement.parentElement.style.display = 'none';
        }

    });
}

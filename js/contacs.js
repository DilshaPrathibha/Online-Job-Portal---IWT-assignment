// Function to move the .contactForum h2 to the top of the page when window width exceeds 780px
function moveHeading() {
    const heading = document.querySelector('.contactForum h2');
    const form = document.querySelector('.contactForum form');
    
    // Check if the window width is greater than or equal to 780px
    if (window.innerWidth >= 780) {
        // Apply styles to place the h2 at the top
        heading.style.position = 'absolute';
        heading.style.top = '0';
        heading.style.left = '0';
        heading.style.width = '100%';
        heading.style.textAlign = 'center';
        heading.style.fontSize = '2.5rem';
        heading.style.backgroundColor = 'white'; // Optional: Background color
        heading.style.padding = '20px 0';
        heading.style.zIndex = '10';

        // Adjust the form margin to prevent overlap with the h2
        form.style.marginTop = '100px';
    } else {
        // Reset the styles for smaller screens
        heading.style.position = 'static';
        heading.style.width = 'auto';
        heading.style.textAlign = 'center';
        heading.style.fontSize = '2rem';
        heading.style.backgroundColor = 'transparent';
        heading.style.padding = '0';
        form.style.marginTop = '0';
    }
}

// Call the moveHeading function when the page loads
window.addEventListener('load', moveHeading);

// Call the moveHeading function whenever the window is resized
window.addEventListener('resize', moveHeading);

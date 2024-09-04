// homepage.js

document.addEventListener('DOMContentLoaded', function() {
    // Function to create typing effect
    function typeEffect(element, text, speed) {
        let i = 0;
        const interval = setInterval(function() {
            element.innerHTML += text.charAt(i);
            i++;
            if (i >= text.length) {
                clearInterval(interval);
            }
        }, speed);
    }

    // Typing effect for the introduction text
    const introText = document.querySelector('.intro h1 span');
    const introTextContent = '\nGIAN RUSSELL\nVILLEGAS';
    introText.innerHTML = ''; // Clear existing content
    typeEffect(introText, introTextContent, 100); // Adjust speed as needed

    // Fade-in effect for the introduction text
    const intro = document.querySelector('.intro');
    intro.style.opacity = 0;
    intro.style.transition = 'opacity 1.5s ease-in-out';

    setTimeout(() => {
        intro.style.opacity = 1;
    }, 500);

    // Fade-in effect for the icons
    const icons = document.querySelector('.icons');
    icons.style.opacity = 0;
    icons.style.transition = 'opacity 1.5s ease-in-out';

    setTimeout(() => {
        icons.style.opacity = 1;
    }, 800);
});

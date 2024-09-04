// aboutme.js

document.addEventListener('DOMContentLoaded', function() {

    function typeEffect(element, text, speed) {
        let i = 0;
        const interval = setInterval(function() {
            if (text.charAt(i) === '<') {
                const endIndex = text.indexOf('>', i) + 1;
                element.innerHTML += text.substring(i, endIndex);
                i = endIndex;
            } else {
                element.innerHTML += text.charAt(i);
                i++;
            }

            if (i >= text.length) {
                clearInterval(interval);
            }
        }, speed);
    }


    const aboutMeText = document.querySelector('.aboutme h2');
    const aboutMeTextContent = "Hi, I'm Gian Russell Villegas. I am passionate about web development and technology. <br> Currently, I am pursuing a degree in BS Information Technology at Bicol University. <br> Apart from coding, I enjoy playing online games, reading mangas, and watching anime. <br><br><br> Feel free to explore my portfolio and get to know more about my skills and projects. <br> If you have any questions or collaboration opportunities, don't hesitate to contact me.";
    aboutMeText.innerHTML = ''; 
    typeEffect(aboutMeText, aboutMeTextContent, 20);

    const aboutMe = document.querySelector('.aboutme');
    aboutMe.style.opacity = 0;
    aboutMe.style.transition = 'opacity 0.5s ease-in-out';

    setTimeout(() => {
        aboutMe.style.opacity = 1;
    }, 500);
});

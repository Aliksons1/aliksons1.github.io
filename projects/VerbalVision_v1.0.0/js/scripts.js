/*!
* Start Bootstrap - Clean Blog v6.0.9 (https://startbootstrap.com/theme/clean-blog)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-clean-blog/blob/master/LICENSE)
*/


window.addEventListener('DOMContentLoaded', () => {
    let scrollPos = 0;
    const mainNav = document.getElementById('mainNav');
    const headerHeight = mainNav.clientHeight;
    window.addEventListener('scroll', function() {
        const currentTop = document.body.getBoundingClientRect().top * -1;
        if ( currentTop < scrollPos) {
            // Scrolling Up
            if (currentTop > 0 && mainNav.classList.contains('is-fixed')) {
                mainNav.classList.add('is-visible');
            } else {
                console.log(123);
                mainNav.classList.remove('is-visible', 'is-fixed');
            }
        } else {
            // Scrolling Down
            mainNav.classList.remove(['is-visible']);
            if (currentTop > headerHeight && !mainNav.classList.contains('is-fixed')) {
                mainNav.classList.add('is-fixed');
            }
        }
        scrollPos = currentTop;
    });
})

document.addEventListener("DOMContentLoaded", function () {
    const registrationForm = document.querySelector("form");
    registrationForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission
        // Handle form submission (e.g., AJAX request for registration)
    });
});



// Register pop-up
document.addEventListener("DOMContentLoaded", function () {
    const openPopupButton = document.getElementById("open-popup");
    const closePopupButton = document.getElementById("close-popup");
    const registrationPopup = document.getElementById("registration-popup");

    openPopupButton.addEventListener("click", function () {
        registrationPopup.style.display = "block";
    });

    closePopupButton.addEventListener("click", function () {
        registrationPopup.style.display = "none";
    });
});






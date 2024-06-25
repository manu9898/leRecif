

/* animate efflects */
/*
document.addEventListener("DOMContentLoaded", function() {
    const elementsToAnimate = document.querySelectorAll('.animated-element');

    window.addEventListener('scroll', function() {
        elementsToAnimate.forEach(function(element) {
            if (isInViewport(element)) {
                startAnimation(element);
            } else {
                stopAnimation(element);
            }
        });
    });
});

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function startAnimation(element) {
    element.classList.add('animate__animated', 'animate__flipInX');
}

function stopAnimation(element) {
    element.classList.remove('animate__animated', 'animate__flipInX');
}


document.addEventListener("DOMContentLoaded", function() {
    const scrollLinks = document.querySelectorAll('.smooth-scroll');

    scrollLinks.forEach(scrollLink => {
        scrollLink.addEventListener('click', smoothScroll);
    });

    function smoothScroll(e) {

        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);


        const currentPage = this.getAttribute('data-current-page');
        if (currentPage !== targetId.substring(1)) {
            const scrollOptions = {
                top: targetElement.offsetTop,
                behavior: 'smooth',
                duration: 1500
            };
            window.scrollTo(scrollOptions);
        }
    }
});
*/
/* animate efflects */

/* readMore */

document.addEventListener('DOMContentLoaded', function() {
    var moreTextButtons = document.querySelectorAll('.moreText');

    moreTextButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var truncatedText = this.parentElement.querySelector('.txtSecondDiv');

            // Toggle la classe 'truncatedText'
            truncatedText.classList.toggle('truncatedText');

            // Si le texte est tronqué, supprime le backgroundColor blanc
            if (truncatedText.classList.contains('truncatedText')) {
                truncatedText.style.backgroundColor = ''; // Supprime le backgroundColor
            } else {
                truncatedText.style.backgroundColor = 'white'; // Définit le backgroundColor à blanc
            }

            // Masque le lien "Lire la suite" après avoir cliqué
            this.style.display = 'none';

            // Empêche la propagation de l'événement au document global
            event.stopPropagation();
        });
    });

    // Ajoute un écouteur de clic sur tout le document
    document.addEventListener('click', function(event) {
        // Réinitialise le texte tronqué et le backgroundColor
        moreTextButtons.forEach(function(button) {
            var truncatedText = button.parentElement.querySelector('.txtSecondDiv');
            truncatedText.classList.add('truncatedText'); // Ajoute la classe 'truncatedText' pour tronquer le texte
            truncatedText.style.backgroundColor = ''; // Supprime le backgroundColor blanc
            button.style.display = 'block'; // Affiche à nouveau tous les boutons "Lire la suite"
        });
    });
});
/* end of readMore */

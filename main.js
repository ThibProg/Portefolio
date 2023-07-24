// Fonction pour déplacer la page vers une section spécifique en douceur
function smoothScroll(target) {
    const element = document.querySelector(target);
    const elementPosition = element.getBoundingClientRect().top;
    const offsetPosition = elementPosition - 60; // Décalage pour tenir compte de l'en-tête

    window.scrollBy({
        top: offsetPosition,
        behavior: 'smooth'
    });
}

// Gestion des clics sur les liens du menu de navigation
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        const target = event.target.getAttribute('href');
        smoothScroll(target);
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const faders = document.querySelectorAll('.fade-in');

    const appearOnScroll = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.1 });

    faders.forEach(fader => appearOnScroll.observe(fader));
});

// Sticky header
const header = document.querySelector('header');
window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 50);
});

// Scroll to top button
const backToTop = document.createElement('button');
backToTop.id = 'backToTop';
backToTop.innerHTML = '↑';
document.body.appendChild(backToTop);

window.addEventListener('scroll', () => {
    backToTop.classList.toggle('show', window.scrollY > 300);
});
backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// Loading screen
const loadingScreen = document.createElement('div');
loadingScreen.id = 'loadingScreen';
loadingScreen.innerHTML = '<div>Carregando...</div>';
document.body.appendChild(loadingScreen);
window.addEventListener('load', () => {
    loadingScreen.classList.add('fade-out');
    setTimeout(() => loadingScreen.remove(), 800);
});

// Lightbox
const galleryImages = document.querySelectorAll('.gallery-image');
const overlay = document.createElement('div');
overlay.id = 'lightboxOverlay';
overlay.innerHTML = `
    <span id="lightboxClose">&times;</span>
    <span id="lightboxPrev">&#10094;</span>
    <img src="" alt="Lightbox">
    <span id="lightboxNext">&#10095;</span>
`;
document.body.appendChild(overlay);

const overlayImg = overlay.querySelector('img');
let currentIndex = 0;
galleryImages.forEach((img, index) => img.addEventListener('click', () => showImage(index)));

function showImage(index) {
    currentIndex = index;
    overlayImg.src = galleryImages[currentIndex].src;
    overlay.classList.add('show');
}

document.querySelector('#lightboxClose').addEventListener('click', () => overlay.classList.remove('show'));
document.querySelector('#lightboxPrev').addEventListener('click', () => showImage((currentIndex - 1 + galleryImages.length) % galleryImages.length));
document.querySelector('#lightboxNext').addEventListener('click', () => showImage((currentIndex + 1) % galleryImages.length));

// Fade-in sections
const sections = document.querySelectorAll('section');
const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => entry.isIntersecting && entry.target.classList.add('visible'));
}, { threshold: 0.1 });

sections.forEach(section => {
    section.classList.add('section-fade');
    sectionObserver.observe(section);
});

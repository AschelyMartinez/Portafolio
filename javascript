window.addEventListener('scroll', function() {
    const skillsSection = document.querySelector('.habilidades');
    const skillsBars = document.querySelectorAll('.skill-bar-fill');
    const sectionPosition = skillsSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight;

    if (sectionPosition < screenPosition) {
        skillsBars.forEach(bar => {
            bar.style.width = bar.getAttribute('style').match(/(\d+)%/)[0];
        });
    }
});

function abrirModal(idModal) {
    document.getElementById(idModal).style.display = 'flex';
}

function cerrarModal(idModal) {
    document.getElementById(idModal).style.display = 'none';
}
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".section");
    let delay = 0;

    sections.forEach(section => {
        section.style.animationDelay = `${delay}s`;
        delay += 0.5;
    });
});

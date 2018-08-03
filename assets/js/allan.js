document.addEventListener("DOMContentLoaded", function(event) {
    main();
});

function main() {

    document.querySelector('button.ToggleButton').addEventListener('click', toggleNavigation);
}

function toggleNavigation() {
    document.querySelector('.Navigation').classList.toggle('Navigation-open');
}
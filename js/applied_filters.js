const removeButtons = document.querySelectorAll('.remove-button');
removeButtons.forEach(button => {
    button.addEventListener('click', () => {
        const word = button.getAttribute('data-word');
        const wordContainer = button.parentNode;
        wordContainer.remove();
        // console.log(`Usunięto słowo: ${word}`);
    });
});
document.getElementById('showMoreButton').addEventListener('click', function() {
    var checkboxes = document.querySelectorAll('.producent__container.hidden');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].classList.remove('hidden');
    }
    this.style.display = 'none';
});
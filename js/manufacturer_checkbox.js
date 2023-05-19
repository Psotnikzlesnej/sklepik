document.getElementById('showMoreButton').addEventListener('click', function() {
    var checkboxes = document.querySelectorAll('.producent__parametr.hidden');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].classList.remove('hidden');
    }
    this.style.display = 'none';
});
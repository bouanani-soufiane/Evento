setTimeout(function () {
    document.getElementById('successMessage').style.display = 'none';
}, 5000);

setTimeout(function () {
    document.getElementById('errorMessage').style.display = 'none';
}, 5000);

document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submitButton');

    submitButton.disabled = true;
    submitButton.style.backgroundColor = '#999999'
    submitButton.style.borderColor = '#999999'

});

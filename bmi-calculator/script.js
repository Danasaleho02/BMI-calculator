document.querySelector('form').addEventListener('submit', function (event) {
    var weight = document.getElementById('weight').value;
    var height = document.getElementById('height').value;

    if (!weight || !height) {
        event.preventDefault();
        alert("Please fill out both weight and height.");
    }
});

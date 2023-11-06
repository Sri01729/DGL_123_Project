    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the height, weight, BMI button, and BMI result elements
        var heightInput = document.querySelector('input[name="height"]');
        var weightInput = document.querySelector('input[name="weight"]');
        var calculateButton = document.getElementById('calculateBMI');
        var bmiResultInput = document.getElementById('bmiResult');

        // Add a click event listener to the BMI button
        calculateButton.addEventListener('click', function () {
            // Get the height and weight values from the input fields
            var height = parseFloat(heightInput.value);
            var weight = parseFloat(weightInput.value);
        });
    });


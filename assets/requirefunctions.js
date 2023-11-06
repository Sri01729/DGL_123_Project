function calculateBMI(weight, height) {
  // Convert height from centimeters to meters
  height = height / 100;

  // Calculate BMI
  var bmi = weight / (height * height);

  return bmi;
}

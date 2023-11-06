
function calculateMacroNutrition() {

    var quantity_1 = document.getElementById("quantity1").value;
    var quantity_2 = document.getElementById("quantity2").value;
    var quantity_3 = document.getElementById("quantity3").value;


    // Get the select element
    var dropdown1 = document.getElementById("food1");
    var dropdown2 = document.getElementById("food2");
    var dropdown3 = document.getElementById("food3");

    // Get the selected option
    var selectedOption1 = dropdown1.options[dropdown1.selectedIndex];
    var selectedOption2 = dropdown2.options[dropdown2.selectedIndex];
    var selectedOption3 = dropdown3.options[dropdown3.selectedIndex];

    // Get the value of the selected option
    var selectedValue1 = selectedOption1.value;
    var selectedValue2 = selectedOption2.value;
    var selectedValue3 = selectedOption3.value;

    // Define an array to food groups and their corresponding types
    var valueGroups = {
        dairy: ["Panner", "Ice cream"],
        veg: ["Roti", "Rice", "Peanut butter", "Oats"],
        non_veg: ["Beef", "Lamb", "Chicken"],
        snacks: ["Chocolate"]
    };



}
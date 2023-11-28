<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Find the position of "/DGL_123_PROJECT/" in the request URI
$position = strpos($requestUri, "/DGL_123_PROJECT/");

if ($position !== false) {
    // Extract "/DGL_123_PROJECT/" and everything after it
    $extractedPath = substr($requestUri, $position, strlen("/DGL_123_PROJECT/"));

    // Assign the extracted path
    $proj_root= $extractedPath;
} else {
    // "/DGL_123_PROJECT/" not found in the request URI
    echo "Not found";
}
$imagePath = $proj_root . "assets/images/piechart.png";
?>
<div class="progress">
    <main>
        <h1 style="text-align: center; color: #f99c1a; margin-bottom: 40px;">Nutrition Tracking</h1>
        <div class="nutrition-form">
            <div class="meal-dropdown">
                <label for="meal">Meal:</label>
                <select id="meal">
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                    <option value="snacks">Snacks</option>
                </select>
            </div>
            <div class="add-food">
                <label for="food">Add Food:</label>
                <span class="add-button">+</span>
            </div>
            <div class="tablecont">
                <table>
                    <tr>
                        <td>
                            <label for="food1">Food:</label>
                            <select id="food1">
                                <option value="">Select the food item</option>
                                <?php
                                // Include the PHP file to access the $food array
                                include '../Models/nutritiondata.php';

                                // Loop through $food and populate the dropdown
                                foreach ($food as $foodItem) {
                                    echo '<option value="' . $foodItem['id'] . '">' . $foodItem['food_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="quantity1">Quantity(In gms):</label>
                            <input type="number" id="quantity1" placeholder="0">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="food2">Food:</label>
                            <select id="food2">
                                <option value="">Select the food item</option>
                                <?php
                                // Include the PHP file to access the $food array
                                include '../Models/nutritiondata.php';

                                // Loop through $food and populate the dropdown
                                foreach ($food as $foodItem) {
                                    echo '<option value="' . $foodItem['id'] . '">' . $foodItem['food_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="quantity2">Quantity(In gms):</label>
                            <input type="number" id="quantity2" placeholder="0">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="food3">Food:</label>
                            <select id="food3">
                                <option value="">Select the food item</option>
                                <?php
                                // Include the PHP file to access the $food array
                                include '../Models/nutritiondata.php';

                                // Loop through $food and populate the dropdown
                                foreach ($food as $foodItem) {
                                    echo '<option value="' . $foodItem['id'] . '">' . $foodItem['food_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="quantity3">Quantity(In gms):</label>
                            <input type="number" id="quantity3" placeholder="0">
                        </td>
                    </tr>
                </table>
                <div class="macro">
                    <h2>Macro Nutrients</h2>
                    <div class="macro-inputs">
                        <div class="macro-row">
                            <label for="protein">Protein(per 100gms):</label>
                            <input type="text" id="protein">
                        </div>
                        <div class="macro-row">
                            <label for="fats">Fats(per 100gms):</label>
                            <input type="text" id="fat">
                        </div>
                        <div class="macro-row">
                            <label for="carbs">Carbs(per 100gms):</label>
                            <input type="text" id="carbs">
                        </div>
                        <div class="macro-row">
                            <label for="calories">Calories:</label>
                            <input type="text" id="calories">
                        </div>
                    </div>
                    <div class="macro-chart">
                        <img src="<?= $imagePath ?>">
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 100px ;"></div>
        <button class="submit-button" onclick="calculateMacroNutrition()" style=" margin: 0px 0px 80px 650px; ">Submit</button>
    </main>
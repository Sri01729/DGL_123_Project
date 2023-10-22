<?php include 'header.view.php'; ?>

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
                                <option value="food1_option1">Food Option 1</option>
                                <option value="food1_option2">Food Option 2</option>
                            </select>
                        </td>
                        <td>
                            <label for="quantity1">Quantity:</label>
                            <input type="number" id="quantity1" placeholder="0">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="food2">Food:</label>
                            <select id="food2">
                                <option value="food2_option1">Food Option 1</option>
                                <option value="food2_option2">Food Option 2</option>
                            </select>
                        </td>
                        <td>
                            <label for="quantity2">Quantity:</label>
                            <input type="number" id="quantity2" placeholder="0">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="food3">Food:</label>
                            <select id="food3">
                                <option value="food3_option1">Food Option 1</option>
                                <option value="food3_option2">Food Option 2</option>
                            </select>
                        </td>
                        <td>
                            <label for="quantity3">Quantity:</label>
                            <input type="number" id="quantity3" placeholder="0">
                        </td>
                    </tr>
                </table>
                <div class="macro">
                    <h2>Macro Nutrients</h2>
                    <div class="macro-inputs">
                        <div class="macro-row">
                            <label for="protein">Protein:</label>
                            <input type="text" id="protein">
                        </div>
                        <div class="macro-row">
                            <label for="fats">Fats:</label>
                            <input type="text" id="fats">
                        </div>
                        <div class="macro-row">
                            <label for="carbs">Carbs:</label>
                            <input type="text" id="carbs">
                        </div>
                        <div class="macro-row">
                            <label for="calories">Calories:</label>
                            <input type="text" id="calories">
                        </div>
                    </div>
                    <div class="macro-chart">
                        <img src="../assets/images/piechart.png">
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 100px ;"></div>
        <button class="submit-button" style="margin: 0px 0px 50px 650px; ">Submit</button>
    </main>

    <?php include 'footer.view.php'; ?>
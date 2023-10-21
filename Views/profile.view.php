<?php include 'header.view.php'; ?>

<div class="profile">
    <main>
        <h1>Set up profile</h1>
        <form>
            <div class="form-group">
                <label class="radio-label">Gender:</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                    <label><input type="radio" name="gender" value="other"> Other</label>
                </div>
            </div>

            <div class="container">
                <div class="form-group">
                    <label>Height (cm):</label>
                    <input type="number" name="height" required>
                </div>
                <div class="form-group">
                    <label>Weight (kg):</label>
                    <input type="number" name="weight" required>
                </div>
                <div class="form-group">
                    <label>Age:</label>
                    <input type="number" name="age" required>
                </div>
            </div>
            <div class="container">
                <div class="form-group">
                    <label>Body Fat Percentage:</label>
                    <input type="number" name="bodyfat">
                </div>
                <div class="form-group">
                    <label>BMI:</label>
                    <input type="number" name="bmi">
                </div>
            </div>
            <button type="submit" class="submit-button">SUBMIT</button>
        </form>
    </main>

    <?php include 'footer.view.php'; ?>
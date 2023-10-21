<?php include 'header.view.php'; ?>

<div class="progress">
    <main>
        <h1 class="progressh1">Progress Tracking</h1>
        <div class="container">

            <div class="flex-container">
                <div class="grid">
                    <div class="cell1">
                        <p>Body Measurements (in cms)</p>
                    </div>
                    <div class="cell">
                        <input type="date">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Shoulders">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Neck">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Forearms">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Bust">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Chest">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Right Thigh">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Left Thigh">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Right Bicep">
                    </div>
                    <div class="cell">
                        <input type="text" placeholder="Left Bicep">
                    </div>
                </div>
                <div class="chart">
                    <img src="assets/images/bodymeasgraph.png">
                </div>
            </div>
        </div>
        <div class="totalmeas">
            <span>Total Measurements</span>
            <input class="totalmeassub" type="text">
        </div>
        <button class="submit-button">Submit</button>
    </main>

    <?php include 'footer.view.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h2>BMI Calculator</h2>
        <form method="POST" action="index.php">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" placeholder="Enter your weight" required>

            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" placeholder="Enter your height" required>

            <button type="submit">Calculate BMI</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            if ($weight > 0 && $height > 0) {
                $heightInMeters = $height / 100;
                $bmi = round($weight / ($heightInMeters * $heightInMeters), 2);

                echo "<div class='result'>Your BMI is $bmi. ";

                if ($bmi < 18.5) {
                    echo "You are underweight.";
                } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                    echo "You have a normal weight.";
                } elseif ($bmi >= 25 && $bmi < 29.9) {
                    echo "You are overweight.";
                } else {
                    echo "You are obese.";
                }

                echo "</div>";
            } else {
                echo "<div class='result'>Please enter valid values for both weight and height.</div>";
            }
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>

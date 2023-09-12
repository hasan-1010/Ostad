<?php
if (isset($_POST['convert'])) {
    $temperature = floatval($_POST['temperature']);
    $from = $_POST['from'];
    $to = $_POST['to'];

    if ($from == 'Degree Celcius') {
        if ($to == 'Fahrenheit') {
            $x = ($temperature * 9 / 5) + 32;
        } else if ($to == 'Kelvin') {
            $x = $temperature + 273.15;
        } else {
            $x = $temperature;
        }
    } else if ($from == 'Fahrenheit') {
        if ($to == 'Degree Celcius') {
            $x = ($temperature - 32) * 5 / 9;
        } else if ($to == 'Kelvin') {
            $x = ($temperature - 32) * 5 / 9 + 273.15;
        } else {
            $x = $temperature;
        }
    } else {
        if ($to == 'Degree Celcius') {
            $x = $temperature - 273.15;
        } else if ($to == 'Fahrenheit') {
            $x = ($temperature - 273.15) * 9 / 5 + 32;
        } else {
            $x = $temperature;
        }
    }
    $result = sprintf("%g %s = %g %s", $temperature, $from, $x, $to);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Temperature Converter</h2>
                </div>
                <div class="border border-secondary p-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Temperature</span>
                            <input type="number" name="temperature" step=".001" class="form-control" required value="<?= isset($_POST['temperature']) ? $_POST['temperature'] : '' ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Convert From</span>
                            <select name="from" class="form-select" required>
                                <option value="">Select a Unit</option>
                                <option value="Degree Celcius" <?= isset($_POST['from']) && $_POST['from'] == 'Degree Celcius' ? 'selected' : '' ?>>Degree Celcius</option>
                                <option value="Fahrenheit" <?= isset($_POST['from']) && $_POST['from'] == 'Fahrenheit' ? 'selected' : '' ?>>Fahrenheit</option>
                                <option value="Kelvin" <?= isset($_POST['from']) && $_POST['from'] == 'Kelvin' ? 'selected' : '' ?>>Kelvin</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Convert To</span>
                            <select name="to" class="form-select" required>
                                <option value="">Select a Unit</option>
                                <option value="Degree Celcius" <?= isset($_POST['to']) && $_POST['to'] == 'Degree Celcius' ? 'selected' : '' ?>>Degree Celcius</option>
                                <option value="Fahrenheit" <?= isset($_POST['to']) && $_POST['to'] == 'Fahrenheit' ? 'selected' : '' ?>>Fahrenheit</option>
                                <option value="Kelvin" <?= isset($_POST['to']) && $_POST['to'] == 'Kelvin' ? 'selected' : '' ?>>Kelvin</option>
                            </select>
                        </div>
                        <?php if (isset($result)) : ?>
                            <h5 class="text-center"><strong><?= $result ?></strong></h5>
                        <?php endif; ?>
                        <hr>
                        <div class="text-center">
                            <button type="submit" name="convert" class="btn btn-dark">Convert</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
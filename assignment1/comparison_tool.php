<?php
if (isset($_POST['compare'])) {
    $number1 = floatval($_POST['number1']);
    $number2 = floatval($_POST['number2']);

    $result = $number1 == $number2 ? "Both numbers are equal." : ($number1 > $number2 ? "$number1 is greater." : "$number2 is greater.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Comparison Tool</h2>
                </div>
                <div class="border border-secondary p-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Number 1</span>
                            <input type="number" name="number1" step=".001" class="form-control" required value="<?= isset($_POST['number1']) ? $_POST['number1'] : '' ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Number 2</span>
                            <input type="number" name="number2" step=".001" class="form-control" required value="<?= isset($_POST['number2']) ? $_POST['number2'] : '' ?>">
                        </div>
                        <?php if (isset($result)) : ?>
                            <h5 class="text-center"><strong><?= $result ?></strong></h5>
                        <?php endif; ?>
                        <hr>
                        <div class="text-center">
                            <button type="submit" name="compare" class="btn btn-dark">Compare</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
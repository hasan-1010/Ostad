<?php
if (isset($_POST['calculate'])) {
    $test1 = floatval($_POST['test1']);
    $test2 = floatval($_POST['test2']);
    $test3 = floatval($_POST['test3']);

    if ($test1 > 100 || $test2 > 100 || $test3 > 100 || $test1 < 0 || $test2 < 0 || $test3 < 0) {
        $error = "Invalid Marks";
    } else if ($test1 == 0 && $test2 == 0 && $test3 == 0) {
        $avg = 0;
        $result = "F";
    } else {
        $avg = ($test1 + $test2 + $test3) / 3;
        switch ($avg) {
            case $avg >= 80:
                $result = "A";
                break;
            case $avg >= 90:
                $result = "B";
                break;
            case $avg >= 60:
                $result = "C";
                break;
            case $avg >= 50:
                $result = "D";
                break;
            default:
                $result = "F";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Grade Calculator</h2>
                </div>
                <div class="border border-secondary p-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Test 1</span>
                            <input type="number" name="test1" min="0" max="100" step=".1" class="form-control" required value="<?= isset($_POST['test1']) ? $_POST['test1'] : '' ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Test 2</span>
                            <input type="number" name="test2" min="0" max="100" step=".1" class="form-control" required value="<?= isset($_POST['test2']) ? $_POST['test2'] : '' ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Test 3</span>
                            <input type="number" name="test3" min="0" max="100" step=".1" class="form-control" required value="<?= isset($_POST['test3']) ? $_POST['test3'] : '' ?>">
                        </div>
                        <?php if (isset($result)) : ?>
                            <h5 class="text-center"><strong>Average Marks: <?= sprintf("%.2f", $avg) ?></strong></h5>
                            <h5 class="text-center"><strong>Your Result: <?= $result ?></strong></h5>
                            <p class="text-center">
                                A = 80 or above<br>
                                B = 70 or above<br>
                                C = 60 or above<br>
                                D = 50 or above<br>
                                F = less than 50
                            </p>
                        <?php endif; ?>
                        <?php if (isset($error)) : ?>
                            <h5 class="text-center text-danger"><strong><?= $error ?></strong></h5>
                        <?php endif; ?>
                        <hr>
                        <div class="text-center">
                            <button type="submit" name="calculate" class="btn btn-dark">Calculate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
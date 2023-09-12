<?php
if (isset($_POST['calculate'])) {
    $number1 = floatval($_POST['number1']);
    $number2 = floatval($_POST['number2']);
    $operator = $_POST['operator'];
    $temp1 = $number1 < 0 ? sprintf("(%g)", $number1) : sprintf("%g", $number1);
    $temp2 = $number2 < 0 ? sprintf("(%g)", $number2) : sprintf("%g", $number2);

    switch ($operator) {
        case '+':
            $result = sprintf("%s $operator %s = %g", $temp1, $temp2, $number1 + $number2);
            break;
        case '-':
            $result = sprintf("%s $operator %s = %g", $temp1, $temp2, $number1 - $number2);
            break;
        case '*':
            $result = sprintf("%s $operator %s = %g", $temp1, $temp2, $number1 * $number2);
            break;
        case '/':
            if ($number2)
                $result = sprintf("%s $operator %s = %g", $temp1, $temp2, $number1 / $number2);
            else
                $result = "Undefined. You can't divide something by 0.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Simple Calculator</h2>
                </div>
                <div class="border border-secondary p-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="number" name="number1" step=".000001" class="form-control" placeholder="Enter Number" required value="<?= isset($_POST['number1']) ? $_POST['number1'] : '' ?>">
                            <select name="operator" class="form-select" required>
                                <option value="+" <?= isset($_POST['operator']) && $_POST['operator'] == '+' ? 'selected' : '' ?>>+</option>
                                <option value="-" <?= isset($_POST['operator']) && $_POST['operator'] == '-' ? 'selected' : '' ?>>-</option>
                                <option value="*" <?= isset($_POST['operator']) && $_POST['operator'] == '*' ? 'selected' : '' ?>>*</option>
                                <option value="/" <?= isset($_POST['operator']) && $_POST['operator'] == '/' ? 'selected' : '' ?>>/</option>
                            </select>
                            <input type="number" name="number2" step=".000001" class="form-control" placeholder="Enter Number" required value="<?= isset($_POST['number2']) ? $_POST['number2'] : '' ?>">
                        </div>
                        <?php if (isset($result)) : ?>
                            <h5 class="text-center"><strong><?= $result ?></strong></h5>
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
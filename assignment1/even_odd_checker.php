<?php
if (isset($_POST['check'])) {
    $number = intval($_POST['number']);

    $result = $number % 2 ? "$number is an odd number." : "$number is an even number.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Even or Odd Checker</h2>
                </div>
                <div class="border border-secondary p-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Number</span>
                            <input type="number" name="number" step="1" class="form-control" required value="<?= isset($_POST['number']) ? $_POST['number'] : '' ?>">
                        </div>
                        <?php if (isset($result)) : ?>
                            <h5 class="text-center"><strong><?= $result ?></strong></h5>
                        <?php endif; ?>
                        <hr>
                        <div class="text-center">
                            <button type="submit" name="check" class="btn btn-dark">Check</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
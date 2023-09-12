<?php
if (isset($_POST['generate'])) {
    $temperature = floatval($_POST['temperature']);

    switch ($temperature) {
        case $temperature >= 20:
            $result =  "It's warm.";
            break;
        case $temperature >= 10:
            $result = "It's cool.";
            break;
        default:
            $result = "It's freezing!";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Weather Report</h2>
                </div>
                <div class="border border-secondary p-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Temperature</span>
                            <input type="number" name="temperature" step=".001" class="form-control" required value="<?= isset($_POST['temperature']) ? $_POST['temperature'] : '' ?>">
                            <span class="input-group-text">° C</span>
                        </div>
                        <?php if (isset($result)) : ?>
                            <h5 class="text-center"><strong><?= $result ?></strong></h5>
                        <?php endif; ?>
                        <hr>
                        <div class="text-center">
                            <button type="submit" name="generate" class="btn btn-dark">Generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
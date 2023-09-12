<?php
$name = "Md. Mehedi Hasan";
$age = 29;
$country = "Bangladesh";
$aboutMe = 'I am a passionate freelance web developer specializing in PHP. I graduated with a degree in Computer Science and Engineering from International University of Scholars in 2019.<br><br>
I have nearly four years of extensive experience in this field. Currently, I am working on an IMS project with a foreign company.<br><br>
I excel in front-end and back-end development, utilizing a wide range of technologies such as PHP, HTML, CSS, JavaScript, and more. My expertise extends to database management, UI/UX design, and integrating third-party libraries.<br><br>
I\'ve had the privilege to work on a variety of projects, ranging from creating responsive e-commerce websites to building custom web applications for clients in diverse industries.<br><br>
In addition to my extensive experience, I\'m committed to staying updated with the latest technologies and trends. Recognizing the importance of framework proficiency, I\'m currently focused on enhancing my skills in Laravel, an industry-preferred framework. This will allow me to offer even more advanced and efficient web solutions for my clients.
';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="bg-secondary p-2">
                    <h2 class="text-center">Personal Information</h2>
                </div>
                <div class="border border-secondary p-3">
                    <div class="d-flex">
                        <div class="w-25"><strong>Name:</strong></div>
                        <div class="w-75"><?= $name ?></div>
                    </div>
                    <div class="d-flex">
                        <div class="w-25"><strong>Age:</strong></div>
                        <div class="w-75"><?= $age ?></div>
                    </div>
                    <div class="d-flex">
                        <div class="w-25"><strong>Country:</strong></div>
                        <div class="w-25"><?= $country ?></div>
                    </div>
                    <hr>
                    <p><strong>About Me</strong></p>
                    <hr>
                    <p><?= $aboutMe ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
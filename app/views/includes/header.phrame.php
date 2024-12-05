<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'Unknown'?> | <?=APP_NAME?></title>
    <meta name="description" content="<?=APP_DESC?>">
    <meta name="author" content="<?=APP_AUTHOR?>">
    <link rel="icon" href="<?=ROOT?>/assets/img/favicon_io/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=ROOT?>/assets/img/favicon_io/favicon.png" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/index.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-content">
            <div><img src="<?=ROOT?>/assets/img/logotext.png" alt="PHPhrame Logo" width="180px"></div>
            <div class="nav-links">
                <a href="<?=ROOT?>">Home</a>
                <a href="#features">Features</a>
                <a href="#why-choose">Why Us</a>
                <a href="#founders">Founders</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="burger" id="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

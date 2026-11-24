<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Gamespark' ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <script src="/js/script.js" defer></script>
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap" rel="stylesheet">
    <!-- tab icon -->
    <link rel="icon" type="/images/logo-gamespark.jpg" href="/images/logo-gamespark.jpg">

</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo-title-nav">
                <a href="/index.php"><img src="/images/logo-gamespark.jpg" alt="Gamespark Logo" class="header-logo"></a>
                <a href="/index.php" class="header-title">GameSpark</a>
            </div>
            <div class="nav-links">
                <a href="/views/pages/games.php">Games</a>
                <a href="/views/pages/over-ons.php">Over ons</a>
                <img src="/images/user-icon.svg" alt="User Icon" class="user-icon">
            </div>
        </nav>
    </header>
<?php
    $controller = "Site";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tent</title>
        <link rel="stylesheet" href="/Content/site.css" />
        <script src="/Content/site.js"></script>
    </head>
    <body>
        <header>
            <div class="logo"></div>
            <?php
                //Includes the Login partial
                require '/Views/Partials/Login.php';
            ?>
            <ul class="menu">
                <li class="menu-item">
                    <a href="/" class="menu-item-link">
                        Nieuws.
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/Acties" class="menu-item-link">
                        Acties
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/Over" class="menu-item-link">
                        Over ons
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/Vacatures" class="menu-item-link">
                        Vacatures
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/Shop" class="menu-item-link">
                        Webshop
                    </a>
                </li>
            </ul>
        </header>
        <div role="main">
            <?php
                //Includes the view
                require '/Includes/ViewHandler.php';
            ?>
        </div>
        <div class="ad-wrap">
            <?php
                //Includes the Advertisement partial
                require '/Views/Partials/Advertisement.php';
            ?>
        </div>
    </body>
</html>

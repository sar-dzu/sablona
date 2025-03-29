<?php
include_once ('functions.php');
$menu = getMenuData("header");
$theme = isset($theme) ? $_GET["theme"] : "light";
?>
<header style="background-color: <?php echo $theme === "dark" ? "grey" : "white"; ?>" class="container main-header">

    <div class="logo-holder">
        <a href="<?php echo $menu['home']['path'];?>">
            <img alt="img" src="img/logo.png" height="40">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <a href=<?php echo $theme === "dark" ? "theme=light" : "?theme=dark"; ?>>Spustiť funkciu</a>
            <?php printMenu($menu); ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>
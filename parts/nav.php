<?php
include_once ('classes/Menu.php');
$menuManager = new Menu();
$theme = isset($theme) ? $_GET["theme"] : "light";
?>
<header style="background-color: <?php echo $theme === "dark" ? "grey" : "white"; ?>" class="container main-header">

    <div class="logo-holder">
        <a href="<?php echo (isset($menuManager->getMenuData("header")['home']['path'])) ? $menuManager->getMenuData("header")['home']['path'] : ''; ?>">
            <img alt="img" src="img/logo.png" height="40">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <a href=<?php echo $theme === "dark" ? "theme=light" : "?theme=dark"; ?>>Spustiť funkciu</a>
            <?php
            if ($menuManager->isValidMenuType("header")) {
                $menuData = $menuManager->getMenuData("header");
                $menuManager->printMenu($menuData);
            } else {
                echo "Neplatný typ menu";
            }
            ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>
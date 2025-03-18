<?php
function generateSlides($dir)
{
    $files = glob($dir . '/*.jpg');
    $json = file_get_contents("data/datas.json");
    $data = json_decode($json, true);
    $text = $data["text_banner"];

    foreach ($files as $file) {
        echo '<div class="slide fade">';
        echo '<img src="'.$file.'">';
        echo '<div class="slide-text">';
        echo($text[basename($file)]);
        echo '</div>';
        echo '</div>';
    }
    echo '<a id="prev" class="prev"></a>';
    echo '<a id="next" class="next"></a>';
}

function validateMenuType($type)
{
    $menuTypes = [
        'header',
        'footer',
    ];
        return in_array($type, $menuTypes);
}

function getMenuData($type)
{
    $menu = [];
    if (validateMenuType($type)) {
        if ($type == "header") {
            $menu = [
                'home' => [
                    'name' => 'Domov',
                    'path' => 'index.php',
                ],
                'portfolio' => [
                    'name' => 'Portfólio',
                    'path' => 'portfolio.php',
                ],
                'qna' => [
                    'name' => 'Q&A',
                    'path' => 'qna.php',
                ],
                'kontakt' => [
                    'name' => 'Kontakt',
                    'path' => 'kontakt.php',
                ]
            ];
        } elseif ($type == "footer") {
            $menu = [
                'home' => [
                    'name' => 'Domov',
                    'path' => 'index.php',
                ],
                'qna' => [
                    'name' => 'Q&A',
                    'path' => 'qna.php',
                ],
                'kontakt' => [
                    'name' => 'Kontakt',
                    'path' => 'kontakt.php',
                ]
            ];
        }
    }
    return $menu;
}

function printMenu($menu)
{
    foreach ($menu as $menuName => $menuData) {
        echo '<li><a href="'.$menuData['path'].'">'.$menuData['name'].'</a></li>';
    }
}
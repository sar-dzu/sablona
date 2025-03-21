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
    echo '<a id="prev" class="prev"><</a>';
    echo '<a id="next" class="next">></a>';
}

function validateMenuType(string $type): bool
{
    $menuTypes = [
        'header',
        'footer',
    ];
        return in_array($type, $menuTypes);
}

function getMenuData(string $type): array
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

function printMenu(array $menu)
{
    foreach ($menu as $menuName => $menuData) {
        echo '<li><a href="'.$menuData['path'].'">'.$menuData['name'].'</a></li>';
    }
}


// portfolio
function preparePortfolio(int $numberOfRows = 2, int $numberOfCols = 4): array
{
    $portfolio = [];
    $colIndex = 1;
    for ($i = 0; $i < $numberOfRows; $i++) {
        for ($j = 0; $j < $numberOfCols; $j++) {
            $portfolio[$i][$j] = $colIndex;
            $colIndex++;
        }
    }
    return $portfolio;
}

function finishPortfolio()
{
    $portfolio = preparePortfolio();
    foreach ($portfolio as $row => $col) {
        echo '<div class="row">';
        foreach ($col as $index) {
            echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$index.'">
                Web stránka: '.$index.'
                </div>';
        }
        echo '</div>';
    }
}
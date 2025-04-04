<?php
class Menu
{
    private array $validateMenuTypes = ["header", "footer"];

    public function isValidMenuType(string $type): bool {
        return in_array($type, $this->validateMenuTypes);
    }

    public function getMenuData(string $type): array
    {
        $menu = [];
        if ($this->isValidMenuType($type)) {
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
        } else {
            throw new InvalidArgumentException("Invalid menu type:", $type);
        }
        return $menu;
    }

    public function printMenu(array $menu): void {
        echo '<ul>';
        foreach ($menu as $menuName => $menuItem) {
            echo '<li><a href="'.$menuItem['path'].'">'.$menuItem['name'].'</a></li>';
        }
        echo '</ul>';
    }

}
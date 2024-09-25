<?php
    $menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        [
            "nama" => "Tentang"
        ], 
        [
            "nama" => "Kontak"
        ],
    ];

    // function tampilkanMenuBertingkat (array $menu) {
    //     echo "<ul>";
    //     foreach ($menu as $key => $item) { 
    //         echo "<li>{$item['nama']}</li>";
    //     }

    //     echo "</ul>";
    //     }
    //     tampilkanMenuBertingkat ($menu);

        
    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
        foreach ($menu as $item) {
            echo "<li>{$item['nama']}";
            
            // Jika ada subMenu, panggil fungsi ini secara rekursif
            if (isset($item['subMenu'])) {
                tampilkanMenuBertingkat($item['subMenu']);
            }
    
            echo "</li>";
        }
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
    ?>
    

    
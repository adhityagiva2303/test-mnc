<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title Frontend
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, login, sign up and this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Iropin ORG', // -> For Login Form
    'title_prefix' => 'Base', // -> For Base Form
    'title_postfix' => 'Template', // -> For BreadCumb

    /*
    |--------------------------------------------------------------------------
    | Menu Front End
    |--------------------------------------------------------------------------
    |
    | You can build up your menu in here, what you want you can put to this array and
    | This array automatically load your menu to frontend apps.
    |
    */
    
    'menu' => [
        'HOME' => [
            'text' => 'Home',
            'url' => '/'
        ],
        'About Us' => [
            'text' => 'About Us',
            'url' => '/aboutUs',
            'subModule' => [
                [
                    'text' => "Visi Misi",
                    'url' => "/aboutUs/visiMisi"
                ],
                [
                    'text' => "AD/ART",
                    'url' => "/aboutUs/adArt"
                ],
                [
                    'text' => "Pengurus Pusat",
                    'url' => "/aboutUs/pengurusPusat"
                ],
                [
                    'text' => "Kolegium RO",
                    'url' => "/aboutUs/kolegiumRo"
                ],
                [
                    'text' => "Majelis Kehormatan dan Disiplin Profesi",
                    'url' => "/aboutUs/MKDP"
                ]
            ]
        ],
        'Pengurus Daerah' => [
            'text' => 'Pengurus Daerah',
            'url' => '/pengurusDaerah',
            'subModule' => [
                [
                    'text' => "Sumatera",
                    'url' => "/pengurusDaerah/sumatera"
                ],
                [
                    'text' => "Jawa",
                    'url' => "/pengurusDaerah/jawa"
                ],
                [
                    'text' => "Kalimantan",
                    'url' => "/pengurusDaerah/kalimantan"
                ],
                [
                    'text' => "Sulawesi",
                    'url' => "/pengurusDaerah/sulawesi"
                ],
                [
                    'text' => "Pengda Bali",
                    'url' => "/pengurusDaerah/pengdaBali"
                ],
                [
                    'text' => "Pengda NTT",
                    'url' => "/pengurusDaerah/pengdaNTT"
                ],
                [
                    'text' => "Pengda NTB",
                    'url' => "/pengurusDaerah/pengdaNTB"
                ]
            ]
        ],
        'LEGALITAS' => [
            'text' => 'Legalitas',
            'url' => '/legalitas',
            'subModule' => [
                [
                    'text' => 'Peraturan',
                    'url' => '/legalitas/peraturan',
                ],
                [
                    'text' => 'MUNAS 6',
                    'url' => '/legalitas/munas6',
                ]
            ]
        ],
        'ANGGOTA_BERTANYA' => [
            'text' => 'Anggota Bertanya',
            'url' => '/anggotaBertanya'
        ],
        'CPD_ONLINE' => [
            'text' => 'CPD Online',
            'url' => '/cpdOnline'
        ],
        'DATA_ANGGOTA' => [
            'text' => 'Data Anggota',
            'url' => '/dataAnggota'
        ],
        'CONTACT_US' => [
            'text' => 'Contact Us',
            'url' => '/contactUs'
        ]
    ]
    
];

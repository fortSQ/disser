<?

/** Тип товаров (в порядке приоритета) */
const TYPE_PARTNER      = 'partner';
const TYPE_EXPRESS      = 'express';
const TYPE_UNDEFINED    = 'undefined';
const TYPE_POSTAL       = 'postal';
const TYPE_STORAGE      = 'storage';

return [
    'product_types' => [
        TYPE_PARTNER    => 'Партнёрская',
        TYPE_EXPRESS    => 'Экспресс',
        TYPE_UNDEFINED  => 'Не определена',
        TYPE_POSTAL     => 'Почтовая',
        TYPE_STORAGE    => 'На хранение'
    ],

    'rooms' => [
        'A' => 30,
        'B' => 12,
    ],

    'goods' => [
        [
            'name'          => 'iPhone 7',
            'barcode'       => 'WIK8348784ANR464384',
            'cell'          => 'A.33.6.2',
            'weight'        => 420,
            'dimension_x'   => 21,
            'dimension_y'   => 15,
            'dimension_z'   => 7,
            'type'          => TYPE_EXPRESS,
            'add_date'      => '2017-07-04',
            'locate_date'   => '2017-07-06',
            'priority'      => 100,
        ],
        [
            'name'      => 'T-short Red Alert',
            'barcode'   => 'MDB473746FBSJ3432J4',
            'cell'      => 'A.38.5.7',
            'weight'        => 360,
            'dimension_x'   => 28,
            'dimension_y'   => 31,
            'dimension_z'   => 4,
            'type'          => TYPE_POSTAL,
            'add_date'      => '2017-07-05',
            'locate_date'   => '2017-07-07',
            'priority'      => 96,
        ],
        [
            'name'      => 'Costume Happy Family',
            'barcode'   => '9400109699938438421784',
            'cell'      => 'A.45.1.4',
            'weight'        => 11833,
            'dimension_x'   => 61,
            'dimension_y'   => 43.2,
            'dimension_z'   => 30.5,
            'type'          => TYPE_STORAGE,
            'add_date'      => '2017-07-05',
            'locate_date'   => '2017-07-07',
            'priority'      => 90,
        ],
        [
            'name'      => 'Headphones KOSS',
            'barcode'   => 'JJD1405086116611',
            'cell'      => 'A.30.3.1',
            'weight'        => 215,
            'dimension_x'   => 16.3,
            'dimension_y'   => 10.7,
            'dimension_z'   => 4.8,
            'type'          => TYPE_PARTNER,
            'add_date'      => '2017-07-06',
            'locate_date'   => '2017-07-07',
            'priority'      => 86,
        ],
        [
            'name'      => 'Incoming package U48340',
            'barcode'   => '02113117000387',
            'cell'      => 'A.30.6.4',
            'weight'        => 10420,
            'dimension_x'   => 59,
            'dimension_y'   => 50,
            'dimension_z'   => 39,
            'type'          => TYPE_UNDEFINED,
            'add_date'      => '2017-07-06',
            'locate_date'   => '2017-07-07',
            'priority'      => 40,
        ],
        [
            'name'      => 'Incoming package U26704',
            'barcode'   => '953222475202',
            'cell'      => 'A.27.6.5',
            'weight'        => 460,
            'dimension_x'   => 22,
            'dimension_y'   => 16,
            'dimension_z'   => 11,
            'type'          => TYPE_UNDEFINED,
            'add_date'      => '2017-07-07',
            'locate_date'   => '2017-07-08',
            'priority'      => 38,
        ],
    ],

    'employees' => [
        [
            'name'          => 'Калинина К.А.',
            'function'      => 'Сборщик',
            'hiring_date'   => '2015-06-13',
        ],
        [
            'name'          => 'Митрофанова К.В.',
            'function'      => 'Упаковщик',
            'hiring_date'   => '2016-02-07',
        ],
        [
            'name'          => 'Рыжков И.А.',
            'function'      => 'Сборщик',
            'hiring_date'   => '2016-10-21',
        ],
        [
            'name'          => 'Корчагин М.Р.',
            'function'      => 'Сортировщик',
            'hiring_date'   => '2017-05-17',
        ],
    ],
];
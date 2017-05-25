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

    'goods' => [
        [
            'name'          => 'iPhone 7',
            'barcode'       => 'WIK8348784ANR464384',
            'cell'          => 'A.12.6.2',
            'weight'        => 420,
            'dimension_x'   => 21,
            'dimension_y'   => 15,
            'dimension_z'   => 7,
            'type'          => TYPE_EXPRESS,
            'add_date'      => '2017-07-04',
            'locate_date'   => '2017-07-06',
        ],
        [
            'name'      => 'T-short Red Alert',
            'barcode'   => 'MDB473746FBSJ3432J4',
            'cell'      => 'B.2.5.7',
            'weight'        => 360,
            'dimension_x'   => 28,
            'dimension_y'   => 31,
            'dimension_z'   => 4,
            'type'          => TYPE_POSTAL,
            'add_date'      => '2017-07-05',
            'locate_date'   => '2017-07-07',
        ],
    ],
];
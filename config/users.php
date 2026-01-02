<?php

return[
    'extension' => 'jpg',
    'original_path' => 'photos/users/originals',
    'sizes'=>[
        '300' =>
            [
                'width'=>'150',
                'height'=>'150'
            ],
        '450' =>
            [
                'width'=>'250',
                'height'=>'250'
            ],
        '650' =>
            [
                'width'=>'350',
                'height'=>'350'
            ],
    ],
    'path_pattern' => 'photos/users/variants/%sx%s',
    'jpeg_compression' => 80,
];

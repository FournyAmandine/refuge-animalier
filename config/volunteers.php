<?php

return[
    'extension' => 'jpg',
    'original_path' => 'photos/volunteers/originals',
    'sizes'=>[
        '300' =>
            [
                'width'=>'300',
                'height'=>'300'
            ],
        '450' =>
            [
                'width'=>'450',
                'height'=>'450'
            ],
        '650' =>
            [
                'width'=>'650',
                'height'=>'650'
            ],
    ],
    'path_pattern' => 'photos/volunteers/variants/%sx%s',
    'jpeg_compression' => 80,
];

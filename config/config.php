<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'product',

/*
* Modules .
*/
'modules'   => ['product'],

'product' => [
                    'Name'          => 'Product',
                    'name'          => 'product',
                    'table'         => 'products',
                    'model'         => 'Lavalite\Product\Models\Product',
                    'image'         => [
                        'xs'        => ['width' => '60',         'height' => '45'],
                        'sm'        => ['width' => '100',        'height' => '75'],
                        'md'        => ['width' => '460',        'height' => '345'],
                        'lg'        => ['width' => '800',        'height' => '600'],
                        'xl'        => ['width' => '1000',       'height' => '750'],
                        ],

                    'fillable'          => ['user_id', 'id',  'user_id',  'category_id',  'model_id',  'filter_id',  'store_id',  'download_id',  'related_id',  'name',  'slug',  'price',  'status',  'quantity',  'description',  'meta_title',  'meta_description',  'meta_keyword',  'tags',  'image',  'sku',  'upc',  'ean',  'jan',  'isbn',  'mpn',  'location',  'tax_class',  'substract_stock',  'outofstock_status',  'seo_keyword',  'order',  'dimensions',  'weight_class',  'length_class',  'date_available',  'manufacturer',  'layouts',  'options',  'attributes',  'recurrings',  'discounts',  'special',  'images',  'rewards',  'created_at',  'updated_at'],
                    'listfields'        => ['id', 'id',  'user_id',  'category_id',  'model_id',  'filter_id',  'store_id',  'download_id',  'related_id',  'name',  'slug',  'price',  'status',  'quantity',  'description',  'meta_title',  'meta_description',  'meta_keyword',  'tags',  'image',  'sku',  'upc',  'ean',  'jan',  'isbn',  'mpn',  'location',  'tax_class',  'substract_stock',  'outofstock_status',  'seo_keyword',  'order',  'dimensions',  'weight_class',  'length_class',  'date_available',  'manufacturer',  'layouts',  'options',  'attributes',  'recurrings',  'discounts',  'special',  'images',  'rewards',  'created_at',  'updated_at'],
                    'translatable'      => ['id',  'user_id',  'category_id',  'model_id',  'filter_id',  'store_id',  'download_id',  'related_id',  'name',  'slug',  'price',  'status',  'quantity',  'description',  'meta_title',  'meta_description',  'meta_keyword',  'tags',  'image',  'sku',  'upc',  'ean',  'jan',  'isbn',  'mpn',  'location',  'tax_class',  'substract_stock',  'outofstock_status',  'seo_keyword',  'order',  'dimensions',  'weight_class',  'length_class',  'date_available',  'manufacturer',  'layouts',  'options',  'attributes',  'recurrings',  'discounts',  'special',  'images',  'rewards',  'created_at',  'updated_at'],

                    'upload-folder'     => '/uploads/product/product',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
];

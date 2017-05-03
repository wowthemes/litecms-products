<?php

namespace Lavalite\Product;

use DB;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'name'          => 'product.product.view',
                'readable_name' => 'View Product',
            ],
            [
                'name'          => 'product.product.create',
                'readable_name' => 'Create Product',
            ],
            [
                'name'          => 'product.product.edit',
                'readable_name' => 'Update Product',
            ],
            [
                'name'          => 'product.product.delete',
                'readable_name' => 'Delete Product',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'key'      => 'product.product.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ],
            */
        ]);
    }
}

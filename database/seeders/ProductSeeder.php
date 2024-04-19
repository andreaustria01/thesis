<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */
    protected $products = [
        [
            'category'=> 'PASTRIES',
            'productName'=> 'Brownies x10 (big)',
            'price'=> '150',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Brownies x8 (small)',
            'price'=> '80',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Cheese Cupcake',
            'price'=> '12',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Pork Hopia 4pcs',
            'price'=> '27',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Hopia Ube 4pcs',
            'price'=> '26',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Hopia Ube 16pcs',
            'price'=> '104',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Hopia Mongo 4pcs',
            'price'=> '26',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Hopia Mongo 16pcs',
            'price'=> '104',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Egg Pie (whole)',
            'price'=> '240',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Fruit Pie',
            'price'=> '210',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Pineapple Pie',
            'price'=> '210',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Strawberry Inipit',
            'price'=> '40',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Yema Inipit',
            'price'=> '40',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Special Mamon',
            'price'=> '20',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Chiffon Cake Slice',
            'price'=> '20',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Toasted Ensaymada',
            'price'=> '18',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Ham Ensaymada',
            'price'=> '18',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Cheese Ensaymada',
            'price'=> '18',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Best Ever Ensaymada',
            'price'=> '30',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Cinnamon Roll',
            'price'=> '20',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Banana Boat',
            'price'=> '11',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],

        [
            'category'=> 'PASTRIES',
            'productName'=> 'Banana Loaf',
            'price'=> '70',
            'quantity'=> '212',
            'criticalLevel' => '15',
        ],
    ];
    
    
    public function run()
    {
        //
        foreach($this->products as $product) {
            Product::create($product);
        }
    }
}

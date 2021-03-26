<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name'=>'Product A',
                'description'=>'Beschrijving 1',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        DB::table('products')->insert(
            [
                'name'=>'Product B',
                'description'=>'Beschrijving B',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        DB::table('products')->insert(
            [
                'name'=>'Product B',
                'description'=>'Beschrijving B',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]);
    }
}

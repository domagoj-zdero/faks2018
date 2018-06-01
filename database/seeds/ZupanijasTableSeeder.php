<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Prophecy\Comparator\Factory;

class ZupanijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('zupanijas')->insert([
            'name' => $faker->streetName,
        ]);
        $faker = Factory::create();
        DB::table('zupanijas')->insert([
            'name' => $faker->streetName,
        ]);
        $faker = Factory::create();
        DB::table('zupanijas')->insert([
            'name' => $faker->streetName,
        ]);
        $faker = Factory::create();
        DB::table('zupanijas')->insert([
            'name' => $faker->streetName,
        ]);
        $faker = Factory::create();
        DB::table('zupanijas')->insert([
            'name' => $faker->streetName,
        ]);
        $faker = Factory::create();
        DB::table('zupanijas')->insert([
            'name' => $faker->streetName,
        ]);
    }
}

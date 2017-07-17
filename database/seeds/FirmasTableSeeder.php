<?php

use Illuminate\Database\Seeder;

class FirmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++){
            DB::table('Comision.firma')->insert([
                'decano' => 'VACIO',
                'facultad' => 'VACIO'
            ]);
        }
    }
}

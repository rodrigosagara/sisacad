<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TurmasTableSeeder::class);
    }
}

//Turmas Seeder
class TurmasTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert([
            'nome' => 'A',
            'serie' => '1 ANO - ENSINO FUNDAMENTAL 1',
            'sala' => '1-A'
        ]);

        DB::table('turmas')->insert([
            'nome' => 'B',
            'serie' => '9 ANO - ENSINO FUNDAMENTAL 2',
            'sala' => '9-B'
        ]);

        DB::table('turmas')->insert([
            'nome' => 'C',
            'serie' => '3 ANO - ENSINO MEDIO',
            'sala' => '3-C'
        ]);
    }
}

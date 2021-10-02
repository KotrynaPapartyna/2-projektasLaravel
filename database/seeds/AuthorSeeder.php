<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.php artisan migrate:refresh
     *
     * @return void
     */
    public function run()
    {
        // pildoma duomenu baze
        DB::tabe('authors')->insert([
            'name'=> Str::random(12),
            'surname'=>Str::random(15),
            'username'=>Str::random(17)
        ]);

    }
}

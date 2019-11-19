<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')
                            ->insert([
                                [
                                    'titulo' => 'Titulo Noticia 1',
                                    'noticia' => 'Lo que sea... tengo mucho sueño',
                                    'autor' => 'Alguien X',
                                    'imagen' => 'imagen1.jpg'
                                ],
                                [
                                    'titulo' => Str::Random(25),
                                    'noticia' => Str::Random(15) .' '.Str::Random(7). ' ' . Str::Random(20),
                                    'autor' => Str::Random(24),
                                    'imagen' => Str::Random(14).'jpg'
                                ]
        ]);
    }
}

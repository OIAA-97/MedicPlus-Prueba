<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Se importa el 'Facades\DB', para pasar argumentos.
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* El metodo 'INSERT' realiza el array asociativo que representara
           las columnas y valores que queremos guardar en la tabla. */
        
        DB::table('professions')->truncate();

        DB::table('professions')->insert([
        'title' => 'Desarrollador back-end',
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador front-end mixter',
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador back-end mixter',
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador Bootstrapt',
        ]);
    }
}

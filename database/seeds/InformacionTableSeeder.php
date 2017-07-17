<?php

use Illuminate\Database\Seeder;

class InformacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Comision.informacion')->insert([
            'informacion' => '<h4 align="center"><b>ACTA DEL SORTEO DE LA COMISION DE POSTULANTES</b></h4><h4 align="center"><b>CONCURSO DE ADMISION 2017-2</b></h4><p align="justify">El dia Lunes 18 de Julio del 2017 a las 12h00 se ha realizado el Sorteo de la Comision de Postulantes para asistir a observar la calificacion de las pruebas del Examen de Admision 2017-2; en presencia de los miembros de la Comisión Supervisora Dr. German Grajeda Reyes, Decano de la Fac. de Ing. de Petroleo, Gas Natural y Petroquimica, Msc. Ing. Julia Salinas Garcia, Decana de la Fac. de Ing. Quimica y Textil, Msc. Ing. Eusebio Robles Garcia, Decano de la Natividad Alvarado (TEUNI - Accesitario), el JEfe de la Oficina Central de Admision, Mag. Ing. Silvio Quinteros Chavez y Mag. Ing. Carlos F. Ponce Sanchez, Profesor Adjunto de la OCAD y en presencia de postulantes.</p><p align="justify">De acuerdo al procedimiento para el Sorteo de la Comision de Postulantes, resultaron designados:<br></p>',
        ]);
    }
}

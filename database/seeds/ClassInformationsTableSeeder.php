<?php

use Illuminate\Database\Seeder;

class ClassInformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  $students = \SisEdu\Models\Student::all();

        factory(SisEdu\Models\ClassInformation::class, 50)
	        ->create()
          ->each(function (\SisEdu\Models\ClassInformation  $model) use ($students) {
          	$studentsCol = $students->random(10);
          	$model->students()->attach($studentsCol->pluck('id'));
          });
    }
}

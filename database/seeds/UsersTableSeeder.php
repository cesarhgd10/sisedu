<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(\SisEdu\Models\User::class)->create([
      'email' => 'admin@user.com',
      'enrolment' => 100000
    ]);
  }
}
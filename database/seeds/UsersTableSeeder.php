<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $now = new DateTime();
    $table = DB::table('users');

    $table->insert([
      'name'       => "John Doe",
      'email'      => "test@gmail.com",
      'password'   => Hash::make('test123'),
      'created_at' => $now,
    ]);
  }
}

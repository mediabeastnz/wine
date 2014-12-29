<?php

class UsersTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();

    User::create(array('firstname' => 'John', 'lastname' => 'Doe', 'email' => 'john@bar.com', 'sex' => 'male'));
    User::create(array('firstname' => 'Jane', 'lastname' => 'Doe', 'email' => 'jane@bar.com', 'sex' => 'female'));
    User::create(array('firstname' => 'Jack', 'lastname' => 'Doe', 'email' => 'jack@bar.com', 'sex' => 'male'));
  }

}

<?php

class BottlesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('bottles')->delete();

    Bottle::create(array('name' => 'The Crater Rim', 'user_id' => '1', 'year' => '2000'));
    Bottle::create(array('name' => 'Pegasus bay', 'user_id' => '2', 'year' => '2012'));
  }

}

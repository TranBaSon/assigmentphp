<?php

use Illuminate\Database\Seeder;

class studentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\student::class,200)->create();
    }
}

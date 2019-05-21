<?php

use BetterLife\Cause;
use Illuminate\Database\Seeder;

class CausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BetterLife\Cause::class, 30)->create();
    }
}

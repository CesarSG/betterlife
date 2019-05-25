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
        $causes = factory(BetterLife\Cause::class, 5)
                ->create()
                ->each(function ($cause){
                    $cause->images()->create(['image_patch'=>'test.jpg']);
        });
    }
}

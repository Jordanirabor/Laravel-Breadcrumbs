<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      factory(App\City::class)->create([
        'name' => 'Johannesburg',
        'country_id' => function(){

            return factory(App\Country::class)->create([
                'name' => 'South Africa',
                'continent_id' => function(){

                    return factory(App\Continent::class)->create([
                        'name' => 'Africa' ])->id;
                }
                ])->id;
        }
        ]);
    }
}
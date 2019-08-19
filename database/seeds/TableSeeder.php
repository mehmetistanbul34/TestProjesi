<?php

use App\GameModel;
use App\GamerModel;
use App\GameOverModel;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        for($i=0; $i<10; $i++) {
            GameModel::create([
                'title' => join(',', $faker->words(1))
            ]);
        }

        for($i=0; $i<30; $i++) {
            GamerModel::create([
                'user_name' => $faker->name
            ]);
        }

        for($i=0; $i<10; $i++) {
            GameOverModel::create([
                'game_id' => $faker->randomElement($array = array('1','2','3','4','5','6','7','8','9','10')),
                'gamer_id' => $faker->randomElement($array = array('1','2','3','4','5','6','7','8','9','10',
                                                        '11','12','13','14','15','16','17','18','19','20')),
                'score' => mt_rand(1,350),
                'start_date' => now()
            ]);
        }
        for($i=0; $i<100; $i++) {
            GameOverModel::create([
                'game_id' => $faker->randomElement($array = array('1','2','3','4','5','6','7','8','9','10')),
                'gamer_id' => $faker->randomElement($array = array('1','2','3','4','5','6','7','8','9','10',
                                                        '11','12','13','14','15','16','17','18','19','20')),
                'score' => mt_rand(1,250),
                'start_date' => now(),
                'finish_date' => now()
            ]);
        }
    }
}

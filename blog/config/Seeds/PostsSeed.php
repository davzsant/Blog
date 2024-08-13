<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;

class PostsSeed extends AbstractSeed
{
    public function run(): void
    {
        $faker = Factory::create();
        $data = [];

        for($i = 0;$i < 200; $i++) {
            $data["title"] = $faker->sentence(3);
            $data["body"] = $faker->paragraph(3);
            $data["user_id"] = $faker->numberBetween(1,200);
            $table = $this->table('posts');
            $table->insert($data)->save();
        }

    }
}

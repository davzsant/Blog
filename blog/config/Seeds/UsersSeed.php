<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    public function run(): void
    {
        $faker = Factory::create();
        $data = [];
        for( $i = 0; $i < 200; $i++ ) {
            $data['userName'] = $faker->unique()->userName();
            $data['name'] = $faker->firstName();
            $data['email'] = $faker->unique()->email();
            $data['password'] = password_hash( "12345678", PASSWORD_DEFAULT );
            $data['bio'] = $faker->paragraph();
            $table = $this->table('users');
            $table->insert($data)->save();
        }

    }
}

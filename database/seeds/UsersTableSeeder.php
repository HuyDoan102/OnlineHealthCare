<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,10) as $index) {
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->gender = $faker->boolean();
            $user->avatar = $faker->image;
            $user->date_of_birth = $faker->datetime();
            $user->phone = $faker->e164PhoneNumber;
            $user->address = $faker->country;
            $user->role_id = 3;
            $user->password = bcrypt("132123");
            $user->remember_token = str_random(72);
            $user->save();
        }
    }
}

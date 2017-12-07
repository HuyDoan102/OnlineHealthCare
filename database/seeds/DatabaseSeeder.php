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
        $this->call(UsersTableSeeder::class);
        /*$user = new User;
        $user->name = "Huy Doan";
        $user->email = "huydoan@gmail.com";
        $user->gender = 1;
        $user->avatar = "";
        $user->date_of_birth = "1996-06-17";
        $user->phone = "01284088689";
        $user->address = "Da Nang";
        $user->role_id = "3";
        $user->password = bcrypt("132123");
        $user->remember_token = str_random(10);
        $user->save();*/
    }
}

/*class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10 ; $i++) {
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->gender = $faker->boolean();
            $user->avatar = $faker->image;
            $user->date_of_birth = $faker->datetime();
            $user->phone = $faker->phoneNumber;
            $user->address = $faker->address;
            $user->role_id = 3;
            $user->password = bcrypt("132123");
            $user->remember_token = str_random(72);
            $user->save();
        }
    }
}*/

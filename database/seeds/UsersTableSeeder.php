<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        **/
        //factory(User::class, 12)->create();


        for ($i=0; $i < 3; $i++) {
	    	DB::table('users')->insert([
	            'name' => str_random(8),
	            'email' => str_random(12).'@mail.com',
	            'password' => bcrypt('123456')
	        ]);
    	}
    }
}

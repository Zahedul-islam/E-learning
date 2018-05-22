<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name'=>'Admin',
    		'email'=>'admin@gmail.com',
    		'password'=>Hash::make('123456'),
    		'address'=>'Dhaka',
    		'mobile'=>"0123456789",
    		'role'=>'admin'
    	]);

    	User::create([
    		'name'=>'Teacher',
    		'email'=>'teacher@gmail.com',
    		'password'=>Hash::make('123456'),
    		'address'=>'Dhaka',
    		'mobile'=>'0123456789',
    		'role'=>'teacher'
    	]);

        User::create([
        	'name'=>'Student', 
        	'email'=>'student@gmail.com', 
        	'password'=>Hash::make('123456'),
        	'address'=>'Dhaka',
        	'mobile'=>'0123456789',
        	'role'=>'student'
        ]);
    }
}

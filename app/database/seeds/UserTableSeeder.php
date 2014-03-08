<?php 

class UserTableSeeder extends Seeder {
public function run()
{

	$hashed = Hash::make('alohomora');
DB::table('users')->insert(
array('username'=>'cilsilver','email' =>
'cilsilver@gmail.com','password'=>$hashed),

array('username'=>'oludare','email' =>
'oludare.odunfa@softboxtech.com','password'=>$hashed)
);
}




}
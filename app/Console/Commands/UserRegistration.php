<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class UserRegistration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create many user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = [
            [
                'name' => 'Shawkat Ali',
            'email' => 'shawkat@gmail.com',
            'age' => '24',
            'mobile_number' => '01749240901',
            'gender' => 1,
            'profile_photo' => '1.jpg',
            'institute' => '[1]',
            'department' => 'CSE',
            'batch' => '5th',
            'passing_year' => '1956',
            'designation' => 'Programmer',
            'country_id' => 101,
            'city_id' => 1,
            'present_address' => 'Dhaka',
            'permanent_address' => 'Dhaka',
            'chandraghona_living_area' => 'Chandraghona',
            'password' => 12345678,
            ],
            [
            'name' => 'Taiser',
            'email' => 'taiser@gmail.com',
            'age' => '24',
            'mobile_number' => '01749240949',
            'gender' => 1,
            'profile_photo' => '2.jpg',
            'institute' => '[1]',
            'department' => 'CSE',
            'batch' => '5th',
            'passing_year' => '1955',
            'designation' => 'Programmer',
            'country_id' => 101,
            'city_id' => 1,
            'present_address' => 'Dhaka',
            'permanent_address' => 'Dhaka',
            'chandraghona_living_area' => 'Chandraghona',
            'password' => 12345678,
            ],
            [
            'name' => 'Sagor',
            'email' => 'sagor@gmail.com',
            'age' => '24',
            'mobile_number' => '01749240987',
            'gender' => 1,
            'profile_photo' => '3.jpg',
            'institute' => '[1]',
            'department' => 'CSE',
            'batch' => '5th',
            'passing_year' => '1955',
            'designation' => 'Programmer',
            'country_id' => 101,
            'city_id' => 1,
            'present_address' => 'Dhaka',
            'permanent_address' => 'Dhaka',
            'chandraghona_living_area' => 'Chandraghona',
            'password' => 12345678,
            ], 
            [
                'name' => 'Nazmul',
                'email' => 'nazmul@gmail.com',
                'age' => '24',
                'mobile_number' => '01749240967',
                'gender' => 1,
                'profile_photo' => '4.jpg',
                'institute' => '[1]',
                'department' => 'CSE',
                'batch' => '5th',
                'passing_year' => '1953',
                'designation' => 'Programmer',
                'country_id' => 101,
                'city_id' => 1,
                'present_address' => 'Dhaka',
                'permanent_address' => 'Dhaka',
                'chandraghona_living_area' => 'Chandraghona',
                'password' => 12345678,
            ],
            [
                'name' => 'Squib',
                'email' => 'saquib@gmail.com',
                'age' => '24',
                'mobile_number' => '01749240944',
                'gender' => 1,
                'profile_photo' => '5.jpg',
                'institute' => '[1]',
                'department' => 'CSE',
                'batch' => '5th',
                'passing_year' => '1952',
                'designation' => 'Programmer',
                'country_id' => 101,
                'city_id' => 1,
                'present_address' => 'Dhaka',
                'permanent_address' => 'Dhaka',
                'chandraghona_living_area' => 'Chandraghona',
                'password' => 12345678,
            ],
            [
                'name' => 'Abdul Aziz',
                'email' => 'aziz@gmail.com',
                'age' => '24',
                'mobile_number' => '01749240934',
                'gender' => 1,
                'profile_photo' => '6.jpg',
                'institute' => '[1]',
                'department' => 'CSE',
                'batch' => '5th',
                'passing_year' => '1951',
                'designation' => 'Programmer',
                'country_id' => 101,
                'city_id' => 1,
                'present_address' => 'Dhaka',
                'permanent_address' => 'Dhaka',
                'chandraghona_living_area' => 'Chandraghona',
                'password' => 12345678,
            ],
            [
                'name' => 'Mehedy',
                'email' => 'mehedy@gmail.com',
                'age' => '24',
                'mobile_number' => '01749240943',
                'gender' => 1,
                'profile_photo' => '7.jpg',
                'institute' => '[1]',
                'department' => 'CSE',
                'batch' => '5th',
                'passing_year' => '1951',
                'designation' => 'Programmer',
                'country_id' => 101,
                'city_id' => 1,
                'present_address' => 'Dhaka',
                'permanent_address' => 'Dhaka',
                'chandraghona_living_area' => 'Chandraghona',
                'password' => 12345678,
            ],
        ];

        foreach($users as $user){
            $model = new User;

            $model->name = $user['name'];
            $model->email = $user['email'];
            $model->age = $user['age'];
            $model->mobile_number = $user['mobile_number'];
            $model->gender = $user['gender'];
            $model->profile_photo = $user['profile_photo'];
            $model->institute = $user['institute'];
            $model->department = $user['department'];
            $model->batch = $user['batch'];
            $model->passing_year = $user['passing_year'];
            $model->designation = $user['designation'];
            $model->country_id = $user['country_id'];
            $model->city_id = $user['city_id'];
            $model->present_address = $user['present_address'];
            $model->permanent_address = $user['permanent_address'];
            $model->chandraghona_living_area = $user['chandraghona_living_area'];
            $model->password = $user['password'];
            $model->save();

        }
        $this->info('Users has been created');
    }
}

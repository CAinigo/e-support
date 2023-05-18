<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'lname'=>'Admin',
                'fname'=>'Admin',
                'mname'=>'Admin',
                'sname'=>'Admin',
                'bday'=>'2023-04-14',
                'c_status'=>'single',
                'gender'=>'male',
                'zone'=>'1',
                'e_status'=>'employed',
                'contact' => '09123456789',
                'email'=>'admin@sample.com',
                'role'=> 0,
                'username'=>'admin',
                'password'=> bcrypt('123456'),
            ],
            [
                'lname'=>'Sub-Admin',
                'fname'=>'Sub-Admin',
                'mname'=>'Sub-Admin',
                'sname'=>'Sub-Admin',
                'bday'=>'2023-04-14',
                'c_status'=>'single',
                'gender'=>'male',
                'zone'=>'1',
                'e_status'=>'employed',
                'contact' => '09123456781',
                'email'=>'subadmin@sample.com',
                'role'=> 1,
                'username'=>'subadmin',
                'password'=> bcrypt('123456'),
            ],
            [
                'lname'=>'BHW',
                'fname'=>'BHW',
                'mname'=>'BHW',
                'sname'=>'BHW',
                'bday'=>'2023-04-14',
                'c_status'=>'single',
                'gender'=>'male',
                'zone'=>'1',
                'e_status'=>'employed',
                'contact' => '09123456783',
                'email'=>'bhw@sample.com',
                'role'=> 2,
                'username'=>'bhw',
                'password'=> bcrypt('123456'),
            ],
            [
                'lname'=>'Resident',
                'fname'=>'Resident',
                'mname'=>'Resident',
                'sname'=>'Resident',
                'bday'=>'2023-04-14',
                'c_status'=>'single',
                'gender'=>'male',
                'zone'=>'1',
                'e_status'=>'employed',
                'contact' => '09123456782',
                'email'=>'resident@sample.com',
                'role'=> 3,
                'username'=>'resident',
                'password'=> bcrypt('123456'),
            ],
            [
                'lname'=>'Company',
                'fname'=>'Company',
                'mname'=>'Company',
                'sname'=>'Company',
                'bday'=>'2023-04-14',
                'c_status'=>'single',
                'gender'=>'male',
                'zone'=>'1',
                'e_status'=>'employed',
                'contact' => '09123456784',
                'email'=>'company@sample.com',
                'role'=> 4,
                'username'=>'company',
                'password'=> bcrypt('123456'),
            ],
            [
                'lname'=>'For-Approval',
                'fname'=>'For-Approval',
                'mname'=>'For-Approval',
                'sname'=>'For-Approval',
                'bday'=>'2023-04-14',
                'c_status'=>'single',
                'gender'=>'male',
                'zone'=>'1',
                'e_status'=>'employed',
                'contact' => '09123456785',
                'email'=>'approval@sample.com',
                'role'=> 5,
                'username'=>'approval',
                'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

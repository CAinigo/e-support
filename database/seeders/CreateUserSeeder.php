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
                'email'=>'admin@sample.com',
                'role'=> 0,
                'username'=>'admin',
                'password'=> bcrypt('123456'),
            ],
            [
                'email'=>'subadmin@sample.com',
                'role'=> 1,
                'username'=>'subadmin',
                'password'=> bcrypt('123456'),
            ],
            [
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
                'gender'=>'male',
                'zone'=>'1',
                'family_head' => 'Rodolpo',
                'e_status'=>'employed',
                'contact' => '09123456782',
                'email'=>'resident@sample.com',
                'role'=> 3,
                'username'=>'resident',
                'password'=> bcrypt('123456'),
            ],
            [
                'biz_lname'=>'Company',
                'biz_fname'=>'Company',
                'biz_mname'=>'Company',
                'biz_sname'=>'Company',
                'biz_name' => 'Gatas ni Mommy',
                'biz_address' => '1',
                'biz_nature' => 'Store',
                'biz_contact' => '09123456784',
                'biz_email'=>'company@sample.com',
                'role'=> 4,
                'username'=>'company',
                'password'=> bcrypt('123456'),
            ],
            [
                'lname'=>'resident-Approval',
                'fname'=>'resident-Approval',
                'mname'=>'resident-Approval',
                'sname'=>'resident-Approval',
                'bday'=>'2023-04-14',
                'gender'=>'male',
                'zone'=>'1',
                'family_head' => 'Eduardo',
                'e_status'=>'employed',
                'contact' => '09123456785',
                'email'=>'residentApproval@sample.com',
                'role'=> 5,
                'username'=>'residentApproval',
                'password'=> bcrypt('123456'),
            ],
            [
                'biz_lname'=>'company-Approval',
                'biz_fname'=>'company-Approval',
                'biz_mname'=>'company-Approval',
                'biz_sname'=>'company-Approval',
                'biz_address'=>'1',
                'biz_name' => 'Gatas ni Daddy',
                'biz_nature' => 'Store',
                'biz_contact' => '09123398746',
                'biz_email'=>'companyApproval@sample.com',
                'role'=> 6,
                'username'=>'companyApproval',
                'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

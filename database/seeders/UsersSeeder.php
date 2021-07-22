<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'AdminReza',
            'role'=> 'admin',
            'email'=> 'adminreza@admin.com',
            'password'=> bcrypt('adminreza123')
        ]);
        $admin->assignRole('admin');

        $customer = User::create([
            'name'=>'Reza',
            'role'=> 'customer',
            'email'=> 'syahreza385@gmail.com',
            'password'=> bcrypt('reza1234567')
        ]);
        $customer->assignRole('customer');

        $supplier = User::create([
            'name'=>'RezaQurban',
            'role'=> 'supplier',
            'email'=> 'qurbanreza@supplier.com',
            'password'=> bcrypt('supplierreza123')
        ]);
        $supplier->assignRole('supplier');


    }
}

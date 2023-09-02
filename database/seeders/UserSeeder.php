<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =User::create([
            'name'=>'mo',
            'email'=>'admin@admin.com',
            'password'=>'admin123'

           ]);
        //    dd($user);
           $user->addRole('super_admin');
           DB::table('categories')->insert([
            'id'=>1,
            'name'=>'cat1'

            // 'votes' => 0
        ]);
        DB::table('categories')->insert([
            'id'=>2,
            'name'=>'cat2'

            // 'votes' => 0
        ]);
        //`name`, `phone`, `address`
        DB::table('clients')->insert([
            'name'=>"c1",
            'phone'=>232,
            'address'=>"sgfdg"
            // 'votes' => 0
        ]);
        DB::table('clients')->insert([
            'name'=>"c2",
            'phone'=>123,
            'address'=>"sgfdg"
            // 'votes' => 0
        ]);
        ;
// `id`, `name`, `category_id`, `image`, `sale_price`, `stock`, `created_at`, `updated_at`
           DB::table('products')->insert([
            'name' => 'prod1',
            'category_id' => 1,
            'sale_price' => 1232,
            'stock'=>123,

            // 'votes' => 0
        ]);
        DB::table('products')->insert([
            'name' => 'prod2',
            'category_id' => 2,
            'sale_price' => 1232,
            'stock'=>123,

            // 'votes' => 0
        ]);



    }
}

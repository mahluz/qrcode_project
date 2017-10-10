<?php

use Illuminate\Database\Seeder;
use App\People;
use App\Bill;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Bill::create([
        	"start_at"=>"07:00",
        	"end_at"=>"07:30",
        	"bill"=>"10000"
        ]);
        Bill::create([
        	"start_at"=>"07:30",
        	"end_at"=>"08:00",
        	"bill"=>"20000"
        ]);
        Bill::create([
        	"start_at"=>"08:00",
        	"end_at"=>"10:00",
        	"bill"=>"50000"
        ]);
        Absent::create([
        	"name"=>"zulham",
        	"qrcode"=>"Zulham Azwar Achmad"
        ]);	
    }
}

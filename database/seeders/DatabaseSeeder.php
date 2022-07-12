<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            $this->call(RolesAndPermissionSeeder::class);
            $this->call(AdminSeeder::class);
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            $this->command->error('Error while seeding and trace is '. $e->getMessage());
        }
    }
}

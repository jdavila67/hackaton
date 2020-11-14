<?php

namespace Database\Seeders;

use App\Models\UserOrganization;
use Illuminate\Database\Seeder;

class UserOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserOrganization::factory()->count(10)->create();
    }
}

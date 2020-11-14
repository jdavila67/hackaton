<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->times(3)->create();
        User::factory()->times(10)->create();

        Organization::factory()->count(10)->hasFiles(2)->hasOrganizationMembers(5)->hasOrganizationTags(5)->hasContacts(2)->hasEvents(5)->hasAddresses(2)->create();

    }
}

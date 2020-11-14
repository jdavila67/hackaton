<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::factory()->count(50)->hasFiles(2)->hasOrganizationMembers(5)->hasOrganizationTags(5)->hasContacts(2)->hasEvents(5)->hasAddresses(2)->create();
    }
}

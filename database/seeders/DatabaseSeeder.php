<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Post;
use App\Models\PostComments;
use App\Models\Role;
use App\Models\User;
use App\Models\UserOrganization;
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
        Organization::factory()->count(10)->hasvolunteers(4)->hasPosts(2)->hasFiles(2)->hasOrganizationMembers(5)->hasOrganizationTags(5)->hasContacts(2)->hasEvents(5)->hasAddresses(1)->create();
        //User::factory()->count(10)->create();
        User::factory()->count(10)->create();
        UserOrganization::factory()->count(15)->create();
        PostComments::factory()->count(15)->create();
    }
}

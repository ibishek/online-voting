<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => 'admin']);

        $allPermissions = [
            'create_election_center',
            'edit_election_center',
            'delete_election_center',
            'create_staff',
            'edit_staff',
            'delete_staff',
            'show_staff',
            'create_political_parties',
            'edit_political_parties',
            'delete_political_parties',
            'assign_symbol',
            'assign_symbol_to_independent',
            'edit_symbol',
            'delete_symbol',
            'create_candidacy_post',
            'edit_candidacy_post',
            'delete_candidacy_post',
            'create_candidates',
            'create_independent_candidate',
            'edit_candidates',
            'delete_candidates',
            'create_voters',
            'edit_voters',
            'delete_voters',
            'start_voting',
            'pause_voting',
            'resume_voting',
            'terminate_voting',
            "stop_voting",
            'show_results'
        ];

        array_walk($allPermissions, fn($permission) => Permission::create(['name' => $permission]));

        $regionalCommissionerPermissions = [
            'edit_election_center',
            'create_staff',
            'edit_staff',
            'delete_staff',
            'show_staff',
            'assign_symbol_to_independent',
            'create_candidates',
            'create_independent_candidate',
            'edit_candidates',
            'delete_candidates',
            'create_voters',
            'edit_voters',
            'delete_voters',
            'show_results'
        ];

        $reginalCommissioner = Role::create(['name' => 'regional_commissioner']);
        array_walk($regionalCommissionerPermissions, fn($permission) => $reginalCommissioner->givePermissionTo($permission));

        $centerCommissionerPermissions = [
            'create_voters',
            'edit_voters',
            'delete_voters',
            'start_voting',
            'pause_voting',
            'resume_voting',
            'terminate_voting',
            "stop_voting",
            'show_results'
        ];
        $centerCommissioner = Role::create(['name' => 'center_commissioner']);
        array_walk($centerCommissionerPermissions, fn($permission) => $centerCommissioner->givePermissionTo($permission));

        $staffPermissions = [
            'create_voters',
            'edit_voters',
        ];
        $staff = Role::create(['name' => 'staff']);
        array_walk($staffPermissions, fn($permission) => $staff->givePermissionTo($permission));
    }
}

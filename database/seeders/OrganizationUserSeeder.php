<?php

namespace Database\Seeders;

use App\Models\OrganizationUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getUsers() as $user) {
            OrganizationUser::create($user);
        }
    }

    private function getUsers(): array
    {
        return [
            [
                'organization_tag' => 1,
                'email' => 'sudo@donatenow.local',
                'password' => '$2y$10$6JtH5RBmABD7UdCYEkHDdeBXLTh6IxEz/9G/c9yEDCyX5onnwrnbe',
                'first_name' => 'Super',
                'last_name' => 'User',
                'role' => 'super',
                'status' => 1,
                'remember_token' => 'u6plmvchHpNQXiqPdJwe8p8V78XWZZTLVSkKBZRnvTMknmen4pLhSYMK9egW'
            ], [
                'organization_tag' => 1,
                'email' => 'shahzad.khan@mervice.ca',
                'password' => '$2y$10$NpZuj8C2H0hIDGn/HCmX0O/ZE43ULoAq36J.VzIP2yGu5JuAzT8Zm',
                'first_name' => 'Shahzad',
                'last_name' => 'Khan',
                'role' => 'super',
                'status' => 1,
                'remember_token' => '4FF5VXpwhnFSx4S55DNYaCeNhwJXPY3ammGsIpDtIQWF33LclKq26gHevTw8'
            ]
        ];
    }
}

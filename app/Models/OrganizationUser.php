<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationUser extends Model
{
    protected $table = 'organization_user';

    use HasFactory;

    protected $fillable = [
        'organization_tag',
        'email',
        'password',
        'first_name',
        'last_name',
        'role',
        'status',
        'remember_token',
    ];
}

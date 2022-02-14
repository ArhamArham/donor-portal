<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\OrganizationUser;
use App\Http\Requests\StoreOrganizationUserRequest;
use App\Http\Requests\UpdateOrganizationUserRequest;

class OrganizationUserController extends Controller
{
    public function login(LoginRequest $request)
    {
        return makeJsonResponse('Login Successful', [
            'user' => $user,
            'token' => $token
        ]);
    }
}

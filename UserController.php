<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Requests\CreateUserRequest; // Importing CreateUserRequest for validation
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Define a method to create a new user
    public function create(CreateUserRequest $request)
    {
        // Validating user input
        $validatedData = $request->validated();

        // Creating a new user
        $user = User::create($validatedData);

        // Return response indicating successful creation
        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Models\User;

class UserStoreController extends Controller
{
    public function __invoke(UserStoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate(['email' => $data['email']], $data);

        return redirect()->route('user.index');
    }
}

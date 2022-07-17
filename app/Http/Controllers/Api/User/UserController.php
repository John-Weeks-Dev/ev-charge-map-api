<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Get user.
     *
     * @return Json
     */
    public function index()
    {

        try {
            return response()->json(auth()->user(), 200);
        } catch (\Exception $e) {
            logger('Message logged from UserController.index', [$e->getMessage()]);
            return response()->json([ 'error' => 'Something went wrong getting the user details' ], $e->getCode());
        }
    }

    /**
     * Update user.
     *
     * @return Json
     */
    public function update(UserUpdateRequest $request)
    {
        try {
            $user = User::findOrFail(auth()->user()->id);

            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');

            $user->save();

            return response()->json([ 'message' => 'User details updated!' ], 200);
        } catch (\Exception $e) {
            logger('Message logged from UserController.update', [$e->getMessage()]);
            return response()->json([ 'error' => 'Something went wrong updating user ' . $user->id ], $e->getCode());
        }
    }
}

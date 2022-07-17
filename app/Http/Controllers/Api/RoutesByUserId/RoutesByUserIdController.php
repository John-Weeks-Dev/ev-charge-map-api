<?php

namespace App\Http\Controllers\Api\RoutesByUserId;

use App\Http\Controllers\Controller;
use App\Models\Route;

class RoutesByUserIdController extends Controller
{
    /**
     * Show routes by user id.
     *
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return response()->json([
                'routesByUserId' => Route::where('user_id', $id)->orderBy('created_at', 'desc')->get()
            ], 200);
        } catch (\Exception $e) {
            logger('Message logged from RoutesByUserIdController.show', [$e->getMessage()]);
            return response()->json([ 'error' => 'Something went wrong getting routes by user id' ], $e->getCode());
        }

    }
}

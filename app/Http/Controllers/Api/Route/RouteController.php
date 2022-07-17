<?php

namespace App\Http\Controllers\Api\Route;

use App\Http\Controllers\Controller;
use App\Http\Requests\Route\RouteStoreRequest;
use App\Models\Route;

class RouteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Route\RouteStoreRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(RouteStoreRequest $request)
    {
        try {
            $route = new Route;

            $route->user_id = $request->get('user_id');
            $route->name = $request->get('name');
            $route->from = $request->get('from');
            $route->to = $request->get('to');
            $route->range = $request->get('range');

            $route->save();

            return response()->json([
                'message' => 'The route was added successfully',
                'route' => $route
            ], 200);

        } catch (\Exception $e) {
            logger('Something went wrong with addRoute');
            return response()->json(['error' => 'Something went wrong saving the route'], $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $route = Route::findOrFail($id);
            $route->delete();

            return response()->json(['success' => 'Route deleted successfully'], 200);

        } catch (\Exception $e) {
            logger('Something went wrong with getRouteByUserId');
            return response()->json(['error' => 'Something went wrong deleting the saved route'],$e->getCode());
        }
    }
}

<?php

namespace App\Exceptions\Route;

use Exception;

class AddRouteException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
            'error' => 'Something went wrong when adding a new route'
        ], 400);
    }
}

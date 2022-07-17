<?php

namespace App\Http\Controllers\Api\Google;

use Illuminate\Http\Request;
use SKAgarwal\GoogleApi\PlacesApi;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class GooglePlacesController extends Controller
{
    /**
     * Find all places close to input text
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $googlePlaces = new PlacesApi(env('GOOGLE_MAPS_API_KEY'));
            $result = $googlePlaces->placeAutocomplete($request->get('input'), [
                'components' => 'country:uk'
            ]);
        } catch (\SKAgarwal\GoogleApi\Exceptions\InvalidRequestException $e) {
            logger('Something went wrong with GooglePlacesController.index');
            return response()->json(['error' => 'Something went wrong getting Google Places Data'],$e->getCode());

            return response()->json(['error' => $e->getMessage()], 400);
        }

        return response()->json(['places' => $result], 200);
    }
}

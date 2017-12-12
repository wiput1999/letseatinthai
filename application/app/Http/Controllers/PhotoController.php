<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use App\Foods;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
//    public function getTestFile($filename) {
//
//        $exists = Storage::exists($filename);
//
//        if (!$exists) {
//            return "File not found!";
//        } else {
//            $metadata =  Storage::getMetaData($filename);
//            session(['key' => 'value2']);
//
//            return response(Storage::get($filename), 200, ['Content-Type' => $metadata['mimetype']]);
//        }


//        Metadata
//        return Storage::disk('gcs')->getMetaData('test.png');
//        Get file raw
//        return Storage::disk('gcs')->get('test.png');
//        Get and return
//        return response(Storage::disk('gcs')->get('test.png'), 200, ['Content-Type' => 'image/png']);
//    }

    public function getRestaurantPhoto($id) {
        $restaurant = Restaurants::find($id);

        if ($restaurant['available'] == 0 && !Auth::check()) {
            return response("Access Denied!", 401);
        }
        $exists = Storage::exists("restaurants/".$restaurant['photo']);

        if (!$exists) {
            return response("File not found!", 404);
        } else {
            $metadata =  Storage::getMetaData("restaurants/".$restaurant['photo']);

            return response(Storage::get("restaurants/".$restaurant['photo']), 200, ['Content-Type' => $metadata['mimetype']]);
        }

    }

    public function getFoodPhoto($id) {
        $food = Foods::find($id);

        if ($food['available'] == 0 && !Auth::check()) {
            return response("Access Denied!", 401);
        }
        $exists = Storage::exists("foods/".$food['photo']);

        if (!$exists) {
            return response("File not found!", 404);
        } else {
            $metadata =  Storage::getMetaData("foods/".$food['photo']);

            return response(Storage::get("foods/".$food['photo']), 200, ['Content-Type' => $metadata['mimetype']]);
        }

    }
}

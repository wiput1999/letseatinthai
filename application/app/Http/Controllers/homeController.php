<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getAbout() {
        return view('about-us');
    }

    public function getLogin() {
        return view('login');
    }

    public function getDashboard() {
        return view('dashboard');
    }

    public function getTestFile($filename) {

        $exists = Storage::exists($filename);

        if (!$exists) {
            return "File not found!";
        } else {
            $metadata =  Storage::getMetaData($filename);
            session(['key' => 'value2']);

            return response(Storage::get($filename), 200, ['Content-Type' => $metadata['mimetype']]);
        }


//        Metadata
//        return Storage::disk('gcs')->getMetaData('test.png');
//        Get file raw
//        return Storage::disk('gcs')->get('test.png');
//        Get and return
//        return response(Storage::disk('gcs')->get('test.png'), 200, ['Content-Type' => 'image/png']);
    }

    public function getTestSession(Request $request) {
        $data = $request->session()->all();
        return $data;
    }
}


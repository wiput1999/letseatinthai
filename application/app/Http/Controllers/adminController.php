<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Restaurants;
use App\Categories;
use App\Collections;
use App\Foods;
use App\User;

class adminController extends Controller
{
    public function getDashboard() {
        $restaurants = Restaurants::all();

        return view('admin.dashboard', ['restaurants' => $restaurants]);
    }

    public function getNewRestaurant() {
        $categories = Categories::all();

        return view('admin.restaurant_new', ['categories' => $categories]);
    }

    public function doStoreNewRestaurant(Request $request) {
        $inputs = $request->all();

        $rules = [
            'name_th'           => 'required',
            'name_en'           => 'required',
            'description_th'    => 'required',
            'description_en'    => 'required',
            'available'         => 'required|boolean',
            'photo'             => 'required|image|max:11240000',
            'location_lat'      => 'required|numeric',
            'location_lng'      => 'required|numeric',
            'email'             => 'required|email',
            'password'          => 'required|min:8',
            'password_confirm'  => 'required|min:8|same:password',
            'categories'        => 'required|exists:categories,id'
        ];

        $messages = [
            'name_th.required'  => 'Please enter name (TH)',
            'name_en.required'  => 'Please enter name (EN)',
            'description_th.required'  => 'Please enter description (EN)',
            'description_en.required'  => 'Please enter description (EN)',
            'available.required'  => 'Please choose available status',
            'available.boolean'  => 'Status must be boolean',
            'photo.required'  => 'Please choose photo',
            'photo.max'  => 'Photo size limit at (10 MB)',
            'location_lat.required'  => 'Please enter location (Latitude)',
            'location_lat.numeric'  => 'Latitude must be number',
            'location_lng.required'  => 'Please enter location (Longitude)',
            'location_lng.numeric'  => 'Longitude must be number',
            'email.required'        => 'Please enter email',
            'email.email'           => 'E-Mail must be vaild email'
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('admin.restaurant.new'))
                ->withErrors($validator)
                ->withInput();
        }

        $restaurant = new Restaurants();

        $restaurant['name_th'] = $inputs['name_th'];
        $restaurant['name_en'] = $inputs['name_en'];
        $restaurant['description_th'] = $inputs['description_th'];
        $restaurant['description_en'] = $inputs['description_en'];
        $restaurant['location_lat'] = $inputs['location_lat'];
        $restaurant['location_lng'] = $inputs['location_lng'];
        $restaurant['categories'] = $inputs['categories'];
        $restaurant['available'] = $inputs['available'];

        $file_ext = $inputs['photo']->getClientOriginalExtension();

        $filename = sha1(str_random(20).$inputs['name_en'].Carbon::now()).".".$file_ext;

        $disk = Storage::disk('gcs');

        $disk->put("restaurants/".$filename, File::get($inputs['photo']));

        $restaurant['photo'] = $filename;

        $restaurant->save();

        $user = new User();

        $user['name'] = $inputs['name_en'];
        $user['email'] = $inputs['email'];
        $user['password'] = Hash::make(Input::get('password'));
        $user['restaurants'] = $restaurant['id'];

        $user->save();


        return redirect(route('admin.dashboard'))->with('success', 'Restaurant added successfully!');
    }

    public function getCategoriesList() {
        $categories = Categories::all();

        return view('admin.categories_list', ['categories' => $categories]);
    }

    public function getNewCategories() {
        return view('admin.categories_new');
    }

    public function doStoreCategories(Request $request) {
        $inputs = $request->all();

        $rules = [
            'name_th'           => 'required',
            'name_en'           => 'required',
        ];

        $messages = [
            'name_th.required'  => 'Please enter name (TH)',
            'name_en.required'  => 'Please enter name (EN)',
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('admin.categories.new'))
                ->withErrors($validator)
                ->withInput();
        }

        $category = new Categories();

        $category->fill($inputs);

        $category->save();

        return redirect(route('admin.categories'))->with('success', 'Add category successfully!');
    }

    public function getCollectionsList() {
        $collections = Collections::all();

        return view('admin.collections_list', ['collections' => $collections]);
    }

    public function getNewCollections() {
        return view('admin.collections_new');
    }

    public function doStoreCollections(Request $request) {
        $inputs = $request->all();

        $rules = [
            'name_th'           => 'required',
            'name_en'           => 'required',
            'description_th'    => 'required',
            'description_en'    => 'required',
        ];

        $messages = [
            'name_th.required'  => 'Please enter name (TH)',
            'name_en.required'  => 'Please enter name (EN)',
            'description_th.required'  => 'Please enter description (EN)',
            'description_en.required'  => 'Please enter description (EN)',
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('admin.collection.new'))
                ->withErrors($validator)
                ->withInput();
        }

        $collection = new Collections();

        $collection->fill($inputs);

        $collection->save();

        return redirect(route('admin.collection'))->with('success', 'Add collection successfully!');
    }
}

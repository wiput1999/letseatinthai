<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Foods;
use App\Categories;

class MenuController extends Controller
{
    public function getNewMenu() {
        $categories = Categories::all();

        return view('backend.menu_new', ['categories' => $categories]);
    }

    public function doNewMenu(Request $request) {
        $inputs = $request->all();

        $rules = [
            'name_th'           => 'required',
            'name_en'           => 'required',
            'description_th'    => 'required',
            'description_en'    => 'required',
            'available'         => 'required|boolean',
            'photo'             => 'required|image|max:11240000',
            'price'             => 'required|numeric'
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
            'price.required'  => 'Please enter price',
            'price.numeric'  => 'Price must be number',
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('portal.menu.new'))
                ->withErrors($validator)
                ->withInput();
        }

        $food = new Foods();

        $food->fill($inputs);

        $file_ext = $inputs['photo']->getClientOriginalExtension();

        $filename = sha1(str_random(20).$inputs['name_en'].Carbon::now()).".".$file_ext;

        $disk = Storage::disk('gcs');

        $disk->put("foods/".$filename, File::get($inputs['photo']));

        $food['photo'] = $filename;

        $food['restaurant'] = Auth::user()->restaurants;

        $food->save();

        return redirect(route('portal.dashboard'))->with('success', 'Menu added successfully!');
    }
}

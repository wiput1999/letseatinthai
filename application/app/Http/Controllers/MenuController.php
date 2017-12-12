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
            'price'             => 'required|numeric',
            'categories'        => 'required|exists:categories,id',
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

    public function getDetail($id) {
        $food = Foods::find($id);

        if ($food['restaurant'] != Auth::user()->restaurants) {
            return response("Unauthorized", 403);
        }

        return view('backend.menu_detail', ['food' => $food]);
    }

    public function doDeleteMenu($id) {
        $food = Foods::find($id);

        if ($food['restaurant'] != Auth::user()->restaurants) {
            return response("Unauthorized", 403);
        }

        Foods::find($id)->delete();

        $disk = Storage::disk('gcs');

        $disk->delete('foods/'.$food['photo']);

        return redirect(route('portal.dashboard'))->with('success', 'Menu deleted!');
    }

    public function getEditMenu($id)
    {

        $food = Foods::find($id);

        $categories = Categories::all();

        if ($food['restaurant'] != Auth::user()->restaurants) {
            return response("Unauthorized", 403);
        }

        return view('backend.menu_edit', ['food' => $food, 'categories' => $categories]);

    }

    public function doStoreEditMenu(Request $request, $id) {

        $inputs = $request->all();

        $food = Foods::find($id);

        if ($food['restaurant'] != Auth::user()->restaurants) {
            return response("Unauthorized", 403);
        }

        $rules = [
            'name_th'           => 'required',
            'name_en'           => 'required',
            'description_th'    => 'required',
            'description_en'    => 'required',
            'available'         => 'required|boolean',
            'price'             => 'required|numeric',
            'categories'        => 'required|exists:categories,id',
        ];

        $messages = [
            'name_th.required'  => 'Please enter name (TH)',
            'name_en.required'  => 'Please enter name (EN)',
            'description_th.required'  => 'Please enter description (EN)',
            'description_en.required'  => 'Please enter description (EN)',
            'available.required'  => 'Please choose available status',
            'available.boolean'  => 'Status must be boolean',
            'price.numeric'  => 'Price must be number',
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('portal.menu.edit', $id))
                ->withErrors($validator)
                ->withInput();
        }

        $food['name_th'] = $inputs['name_th'];
        $food['name_en'] = $inputs['name_en'];
        $food['description_th'] = $inputs['description_th'];
        $food['description_en'] = $inputs['description_en'];
        $food['available'] = $inputs['available'];
        $food['price'] = $inputs['price'];
        $food['categories'] = $inputs['categories'];

        $food->save();

        return redirect(route('portal.dashboard'))->with('success', 'Menu updated!');
    }

    public function getEditPhoto($id) {

        $food = Foods::find($id);

        $categories = Categories::all();

        if ($food['restaurant'] != Auth::user()->restaurants) {
            return response("Unauthorized", 403);
        }

        return view('backend.menu_photo', ['food' => $food, 'categories' => $categories]);
    }

    public function doStoreEditPhoto(Request $request, $id) {

        $food = Foods::find($id);

        $inputs = $request->all();

        $rules = [
            'photo'             => 'required|image|max:11240000',
        ];

        $messages = [
            'photo.required'  => 'Please choose photo',
            'photo.max'  => 'Photo size limit at (10 MB)',
        ];

        $validator = Validator::make($inputs, $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('portal.menu.photo'))
                ->withErrors($validator)
                ->withInput();
        }


        $file_ext = $inputs['photo']->getClientOriginalExtension();

        $filename = sha1(str_random(20).$food['name_en'].Carbon::now()).".".$file_ext;

        $disk = Storage::disk('gcs');

        $disk->put("foods/".$filename, File::get($inputs['photo']));

        $disk->delete("foods/".$food['photo']);

        $food['photo'] = $filename;

        $food->save();

        return redirect(route('portal.dashboard'))->with('success', 'Menu photo update successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Freeby;
use Auth;
use Storage;
use Intervention\Image\Facades\Image;

class FreebieController extends Controller
{
    //

    public function index() {

    }

    public function post(Request $req) {
        $categories = Category::orderBy('order')->get();

        return view('post', compact('categories'));
    }

    public function create(Request $req) {

        $req->validate([
            'image' => 'required|mimes:png,jpg,jpeg,bmp'
        ]);

        $newItem = new Freeby();

        $newItem->name = $req->name;
        $newItem->category_id = $req->category;
        $newItem->user_id = Auth::user()->id;
        $newItem->link = $req->link;
        $newItem->content = $req->content;
        $newItem->is_new = true;

        if ($req->file()) {
            $fileName = Storage::disk('public_uploads')->put('', $req->image);
            if (!$fileName)
                return back()->with('fail', 'File could not upload.')->with('file', $fileName);;
            
            $img = Image::make(public_path().'/uploads/'.$fileName);
            $img->resize(650, 400);
            
            $img->insert(public_path().'/uploads/thumb_1_'.$fileName);
            $img->save(public_path().'/uploads/thumb_'.$fileName);
            /// another file upload in public folder directly
            /*
            $fileName = time().'.'.$req->image->getClientOriginalExtension();
            $filePath = $req->image->move(public_path('/uploads'), $fileName);
            */
            $newItem->thumb = 'thumb_'.$fileName;
            $newItem->image = $fileName;
            $newItem->save();
        }

        return redirect()->route('home');
    }
}

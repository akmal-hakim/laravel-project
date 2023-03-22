<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Auth Declaration
use Illuminate\Support\Facades\Auth;

//Model Declaration
use Illuminate\Database\Eloquent\Model;
use App\Models\content;

class CreateContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $username = Auth::user()->user_name;
        $data['username'] = $username;

        $data['title'] = 'Admin:CreateContent';
        $view_name = getTheme() . '::admin.createContent';
        return view($view_name, $data);
    }

    public function store(Request $request)
    {
        #try {
            $rules = [
                'title'      => 'bail|required|min:10|max:1000',
                'content1'      => 'bail|required|min:100',
                'content2'      => 'bail|required|min:100',
               ];
               $this->validate($request, $rules);
                           
               $record = new content();
               $record->title = $request->title;
               $record->content1 = $request->content1;
               $record->content2 = $request->content2;
               $record->categories = $request->categories;

               /*
               $record->src_pic1 = $image1;
               $request->file('src_pic1')->store('public/imageUpload');
               $record->src_pic2 = $image2;
               $request->file('src_pic2')->store('public/imageUpload');
               */

               $image1 = $request->file('src_pic1');
               $imagename1 = $image1->getClientOriginalName();
               $image2 = $request->file('src_pic2');
               $imagename2 = $image2->getClientOriginalName();

               $record->src_pic1 = $imagename1;
               $record->src_pic2 = $imagename2;

               //Method 1 in uploading image
               $Path = public_path('/imageUpload');
               $image1->move($Path, $imagename1); 
               //Method 2 in uploading image
               $image2->move(public_path('/imageUpload'), $imagename2);

               $record->save();
               return redirect('/');
        /*}catch (Exception $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                return Redirect::back()->withErrors(['msg' => 'IC already registered!']);
            }
        }*/
    }

    public function list()
    {
        $record = content::all();
        $username = Auth::user()->user_name;

        $data['username'] = $username;
        $data['record'] = $record;
        $data['title'] = 'Admin:List of Content';
        $view_name = getTheme() . '::admin.listContent';
        return view($view_name, $data);
        //return view('content',compact(['record']));
    }

}

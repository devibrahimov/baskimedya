<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\HelperController as Helper;
use Illuminate\Http\Request;
use App\References;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = References::all();
        return view('admin.pages.references.references',compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('references.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'mimes:jpg,jpeg,png',
            'name'=>'required'
        ]);

        $references = new References([
           'image'=>$request->file('image'),
            'name'=>$request->get('name')
        ]);

        $file =  request()->file('image');
       if($file->isValid()) {
            $filename = $file->getClientOriginalName();
            $extention = $file->getClientOriginalExtension();
            $newfilename = random_int(1, 2000) . time() . '.' . $extention;
            $helper = new Helper();
            $helper->imageupload($file, $newfilename, 'references');
            $img = References::create([
                'name' => $references->name,
               'image'=>$newfilename
            ]);
            return redirect('yonetim/references')->with('success','Basariyla Eklendi!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

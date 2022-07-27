<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glasnik;

class GlasnikController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('glasnici.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'documents' => 'required',
        ]);

        //Handle File Upload
        if($request->hasFile('documents')){
            $fileNameWithExt = $request->file('documents')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('documents')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('documents')->storeAs('public/glasnici', $fileNameToStore);
        }

        if($request->hasfile('documents'))
        {
           foreach($request->file('documents') as $file)
           {
               $name = $file->getClientOriginalName();
               $file->move(storage_path('app') .'/public/glasnici', $name);  
               $data[] = $name; 
           }
       
        }


        //Create Post
        $glasnik = new Glasnik;
        $glasnik->title = $request->input('title');
        $glasnik->documents = $fileNameToStore;
        $glasnik->user_id = auth()->user()->id;
        $glasnik->save();

        return redirect('/opcinskovijece')->with('success', 'Službenik glasnik Općine Kupres je postavljen');
        
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
        $glasnik = Glasnik::find($id);
        return view('glasnici.edit')->with('glasnik', $glasnik);
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
        $this->validate($request, [
            'title' => 'required',
            'documents' => 'required',
        ]);

        //Handle File Upload
        if($request->hasFile('documents')){
            $fileNameWithExt = $request->file('documents')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('documents')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('documents')->storeAs('public/glasnici', $fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $glasnik = Glasnik::find($id);
        $glasnik->title = $request->input('title');
        $glasnik->documents = $fileNameToStore;
        $glasnik->save();

        return redirect('/opcinskovijece')->with('success', 'Službenik glasnik Općine Kupres je uređen!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $glasnik = Glasnik::find($id);
        // Provjera pravog korisnika
        if(auth()->user()->id !==$glasnik->user_id){
            return redirect('/opcinskovijece')->with('error', 'Neautorizirana stranica!');
        }

        if($glasnik->documents != 'noimage.jpg'){
            //Delete image
           \Storage::delete('public/documents/'.$glasnik->documents);
        }

        $glasnik->delete();
        return redirect('/opcinskovijece')->with('success', 'Službeni glasnik Općine Kupres je izbrisan!');

    }
}


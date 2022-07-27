<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obavijest;

class ObavijestController extends Controller
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
        return view('obavijesti.create');
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
            'caption' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

       //Handle File Upload
       if($request->hasFile('cover_image')){
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //Upload Image
        $path = $request->file('cover_image')->storeAs(storage_path('app') .'/public/files', $fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        if($request->hasfile('documents'))
        {
           foreach($request->file('documents') as $file)
           {
               $name = $file->getClientOriginalName();
               $file->move(storage_path('app') .'/public/files', $name);  
               $data[] = $name; 
           }
       
        }

        //Create Post
        $obavijest = new Obavijest;
        $obavijest->title = $request->input('title');
        $obavijest->caption = $request->input('caption');
        $obavijest->body = $request->input('body');
        $obavijest->documents=json_encode($data);
        $documents = json_encode($obavijest->documents);
        $obavijest->user_id = auth()->user()->id;
        $obavijest->cover_image = $fileNameToStore;
        $obavijest->save();

        return redirect('/#novosti')->with('success', 'Obavijest je kreirana');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obavijest = Obavijest::find($id);
        return view('obavijesti.show')->with('obavijest', $obavijest)
        ->with('obavijesti', Obavijest::orderBy('created_at','desc')->paginate(4));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obavijest = Obavijest::find($id);

        //Provjera pravog korisnika
        if(auth()->user()->id !==$obavijest->user_id){
            return redirect('/#novosti')->with('error', 'Neautorizirana stranica!');
        }
        return view('obavijesti.edit')->with('obavijest', $obavijest);
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
            'caption' => 'required',
            'body' => 'required',
        ]);

         //Handle File Upload
       if($request->hasFile('cover_image')){
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //Get just ext
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //Upload Image
        $path = $request->file('cover_image')->storeAs(storage_path('app') .'/public/files', $fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        if($request->hasfile('documents'))
        {
           foreach($request->file('documents') as $file)
           {
               $name = $file->getClientOriginalName();
               $file->move(storage_path('app') .'/public/files', $name);  
               $data[] = $name; 
           }
       
        }
        else {
            $data[] = null;
        }


        //Create Post
        $obavijest = Obavijest::find($id);
        $obavijest->title = $request->input('title');
        $obavijest->caption = $request->input('caption');
        $obavijest->body = $request->input('body');
        $obavijest->documents=json_encode($data);
        $documents = json_encode($obavijest->documents);
        if($request->hasFile('cover_image')){
            $obavijest->cover_image = $fileNameToStore;
        }
        $obavijest->save();

        return redirect('/#novosti')->with('success', 'Novost je uređena!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obavijest = Obavijest::find($id);
        // Provjera pravog korisnika
        if(auth()->user()->id !==$obavijest->user_id){
            return redirect('/#novosti')->with('error', 'Neautorizirana stranica!');
        }

       /* if($obavijest->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_image/'.$obavijest->cover_image);
        }*/

        $obavijest->delete();
        return redirect('/#novosti')->with('success', 'Obavijest je izbrisana!');
    }
}

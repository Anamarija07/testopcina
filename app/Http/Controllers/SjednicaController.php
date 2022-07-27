<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sjednica;

class SjednicaController extends Controller
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
        return view('sjednice.create'); 
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
            'odluke[]' => 'mimes:doc,pdf,docx,zip',
        ]);
        
        if($request->hasfile('odluke'))
        {
           foreach($request->file('odluke') as $file)
           {
               $name = $file->getClientOriginalName();
               $file->move(storage_path('app') .'/public/files', $name);  
               $data[] = $name; 
               
           }
        }


        $sjednica= new Sjednica();
        $sjednica->title = $request->input('title');
        $sjednica->odluke=json_encode($data);
        $odluke = json_encode($sjednica->odluke);  
        $sjednica->user_id = auth()->user()->id;
        $sjednica->save();


       return redirect('/opcinskovijece')->with('success', 'Sjednica je kreirana!');
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
        $sjednica = Sjednica::find($id);
        return view('sjednice.edit')->with('sjednica', $sjednica);
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
            'odluke' => 'required',
        ]);

        $data = [];
        if($request->hasfile('odluke'))
        {
           foreach($request->file('odluke') as $file)
           {
            $name = $file->getClientOriginalName();
            $file->move(storage_path('app') .'/public/files', $name);  
            $data[] = $name; 
               
           }
        }


        //Edit Sjednica
        $sjednica = Sjednica::find($id);
        $sjednica->title = $request->input('title');
        $sjednica->odluke=json_encode($data);
        $odluke = json_encode($sjednica->odluke);  
        $sjednica->save();

        return redirect('/opcinskovijece')->with('success', 'Sjednica je uređena!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sjednica = Sjednica::find($id);
        // Provjera pravog korisnika
        if(auth()->user()->id !==$sjednica->user_id){
            return redirect('/opcinskovijece')->with('error', 'Neautorizirana stranica!');
        }
        
        $sjednica->delete();
        return redirect('/opcinskovijece')->with('success', 'Sjednica Općine Kupres je izbrisana!');
    }
}

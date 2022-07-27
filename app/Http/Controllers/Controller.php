<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use App\Models\Sjednica;
use App\Models\Glasnik;
use App\Models\Obavijest;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return View('pages.index')
        ->with('posts', Post::orderBy('created_at','desc')->paginate(6))
        ->with('obavijesti', Obavijest::orderBy('created_at','desc')->paginate(7));
    }

    public function sluzba1(){
        return view('pages.sluzba1');
    }

    public function sluzba2(){
        return view('pages.sluzba2');
    }

    public function sluzba3(){
        return view('pages.sluzba3');
    }

    public function vijece(){
        return View('pages.vijece')
        ->with('sjednice', Sjednica::orderBy('created_at','desc')->paginate(200))
        ->with('glasnici', Glasnik::orderBy('created_at','desc')->paginate(200));
    }

    public function nacelnik(){
        return view('pages.nacelnik');
    }

    public function poduzeca(){
        return view('pages.poduzeca');
    }

    public function okupresu(){
        return view('pages.okupresu');
    }
}

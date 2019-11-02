<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{

  public function index() {
    $teszt = "Tesztelünk";
    return view('gallery/index', compact('teszt'));
  }    

  public function create() {
    return view('gallery/create');
  }

  public function store(Request $request) {

  }

  public function show($id) {
    die($id);
  }


}

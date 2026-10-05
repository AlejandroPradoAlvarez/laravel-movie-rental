<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class CatalogController extends Controller {
	public function getIndex() {
		$peliculas = Movies::all();
		return view('catalog.index', array('pelicula' => $peliculas));
	}
	
	public function getShow($id) {
		$peliculas = Movies::findOrFail($id);
		return view('catalog.show', array('id' => $id, 'pelicula' => $peliculas));
	}
	
	public function getCreate() {
		return view('catalog.create');
	}
	
	public function getEdit($id) {
		$peliculas = Movies::findOrFail($id);
		return view('catalog.edit', array('id' => $id, 'pelicula' => $peliculas));
	}
	
	public function postCreate(Request $request) {
		$p = new Movies;
		$p->title = $request->input('title');
		$p->year = $request->input('year');
		$p->director = $request->input('director');
		$p->poster = $request->input('poster');
		$p->synopsis = $request->input('synopsis');
		$p->save();
    	
		$peliculas = Movies::all();
		return view('catalog.index', array('pelicula' => $peliculas));
	}
	
	public function putEdit(Request $request, $id) {
		$p = Movies::findOrFail($id);
		$p->title = $request->input('title');
		$p->year = $request->input('year');
		$p->director = $request->input('director');
		$p->poster = $request->input('poster');
		$p->synopsis = $request->input('synopsis');
		$p->save();
		
		return view('catalog.show', array('id' => $id, 'pelicula' => $p));
	}
	
	public function putRented(Request $request, $id) {
		$p = Movies::findOrFail($id);
		if($p->rented)
			$p->rented = false;
		else
			$p->rented = true;
		$p->save();
	
		return view('catalog.show', array('id' => $id, 'pelicula' => $p));
	}
}

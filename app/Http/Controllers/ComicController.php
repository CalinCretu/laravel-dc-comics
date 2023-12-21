<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{
  public function index()
  {
    $comics = Comic::all();

    return view('comics.index', compact('comics'));
  }

  public function show(Comic $comic)
  {
    // $comic = Comic::findOrFail($id);

    return view('comics.show', compact('comic'));
  }

  public function create()
  {
    return view('comics.create');
  }

  public function store(Request $request)
  {
    $data = $request->all();

    $newComic = Comic::create($data);

    return redirect()->route('comics.show', $newComic);
  }

  // public function edit(Comic $comic)
  // {
  //   // return view('comics.edit')
  // }
}

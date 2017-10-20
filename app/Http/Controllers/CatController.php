<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;
use Furbook\Cat;
use Furbook\Breed;
use Illuminate\Support\Facades\Input;
use Auth;
use Furbook\Http\Requests\CreateCatRequest;
use Twilio;


class CatController extends Controller
{
    public function testSMS()
    {
      Twilio::message('+84905698207', 'You Have Just Make Booking Hotel Code: 090947');
    }

    public function getCats()
    {
      $cats = Cat::all();
      return view('cats.index', compact('cats'));
    }

    public function view($name)
    {
      $breed = Breed::with('cats')
        ->where('name', $name)
        ->first();
      $cats = $breed->cats;
      return view('cats.index', compact(['cats', 'breed']));
    }

    public function about()
    {
      return view('about');
    }

    public function create()
    {
      // $breeds = Breed::all()->pluck('name', 'id');

      return view('cats.create', compact('breeds'));
    }

    public function save(CreateCatRequest $request)
    {
      $data = $request->all();

      if (Auth::check()) {
          $data['user_id'] = Auth::id();
      }

      $cat = Cat::create($data);
      return redirect('/cats/' . $cat->id)->withSuccess('Cat has been created');
    }

    public function edit(Cat $cat)
    {
      // $breeds = Breed::all()->pluck('name', 'id');
      return view('cats.edit', compact(['cat', 'breeds']));
    }

    public function update(Cat $cat)
    {
      $data = Input::all();
      $cat->update($data);
      return redirect('/cats/' . $cat->id)->withSuccess('Cat has been updated');
    }

    public function show(Cat $cat)
    {
      return view('cats.show', compact('cat'));
    }

    public function delete(Cat $cat)
    {
      $cat->delete();
      return redirect('/cats')->withSuccess('Cat has been delete');
    }
}

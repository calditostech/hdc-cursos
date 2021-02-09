<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventCtrl extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $eventos = Event::where([
                ['titulo', 'like', '%'.$search.'%']
            ])->get();

        } else {
          $eventos = Event::all();
        }

        return view('welcome', ['eventos' => $eventos, 'search' => $search]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request) {

        $evento = new Event;

        $evento->titulo = $request->titulo;
        $evento->date = $request->date;
        $evento->cidade = $request->cidade;
        $evento->private = $request->private;
        $evento->descricao = $request->descricao;
        $evento->image = $request->image;
        $evento->items = $request->items;

        //img upload
         if($request->hasfile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")).".".$extension;

            $request->image->move(public_path('img/eventos'), $imageName);

            $evento->image = $imageName;
         }

        $evento->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){

        $evento = Event::findOrFail($id);

        return view('events.show', ['eventos' => $evento]);
    }
}

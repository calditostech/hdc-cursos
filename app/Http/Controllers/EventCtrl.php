<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

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

         $user = auth()->user();
         $evento->user_id = $user_id;

        $evento->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){

        $evento = Event::findOrFail($id);

        $eventOwner = User::where('id', $evento->user_id)->first()->toArray();

        return view('events.show', ['eventos' => $evento, 'eventOwner' => $eventOwner]);
    }

    public function dashboard() {

        $user = auth()->user();

        $eventos = $user->eventos;

        return view('events.dashboard', ['eventos' => $eventos]);
    }

    public function destroy($id){

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg','Evento excluido com sucesso!');
    }
}

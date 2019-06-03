<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Todo;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class TodoController extends Controller
{
    public function index(){
        return response()->json(['todos'=> Todo::all()]);
    }
    public function delete(Todo $todo){
        $todo->delete();
        return response()->json($todo);
    }
    public function update(Request $request, Todo $todo){
        $todo->update($request->all()['todo']);
        return response()->json(['todo'=>$todo], 200);
    }
    public function store(Request $request){
        $todo = Todo::create($request->all()['todo']);
        return response()->json(['todo'=>$todo], 201);
    }
}

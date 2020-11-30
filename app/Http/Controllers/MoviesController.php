<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MoviesController extends Controller
{
    public function index(){
        return response()->json(Movie::get(),200);
    }

    public function show($id){

        $movie = Movie::find($id);
        if(is_null($movie)){
            return response()->json(null,404);
        }
        return response()->json(Movie::findOrFail($id),200);
    }

    public function store(Request $request){
        $rules = [
            'year' => 'required|max:4',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $movie = Movie::create($request->all());
        return response()->json($movie,201);
    }
    public function update(Request $request, Movie $movie){
        $movie->update($request->all());
        return response()->json($movie,200);

    }
    public function delete(Request $request, Movie $movie){
        try {
            $movie->delete();
        } catch (\Exception $e) {
        }
        return response()->json('NULL',204);
    }


}

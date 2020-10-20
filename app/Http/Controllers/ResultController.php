<?php

namespace App\Http\Controllers;


use App\Http\Requests\Request\ResultRequest;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    public function index()
    {
        $results= Result::latest()->paginate(6);
        return view('results.index', compact('results') );
    }

    public function create()
    {
        return view('results.create', [
            'result' => new Result
        ]);
    }

    public function store(ResultRequest $request)
    {
        Result::create($request->validated() );
        return redirect()->route('dashboard')->with('success', 'El resultado ha sido agregado satisfactoriamente a la base de datos del sistema');
    }

    public function show(Result $result)
    {
        //
    }

  
    public function edit(Result $result)
    {
        //
    }

   
    public function update(Request $request, $id) {
        $request->validate([
            'result'=>'required',
        ]);
  
        $teacher = Result::find($id);
        $teacher->result = $request->get('result');
        $teacher->save();
  
        return redirect()->route('dashboard')->with('primary', 'El resultado fue actaulizado en la base de datos correctamente.');

    }

    public function destroy(Result $result)
    {
        //
    }
}

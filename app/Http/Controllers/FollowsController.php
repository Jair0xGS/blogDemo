<?php

namespace App\Http\Controllers;
use App\Follow;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'seguidor'=>'required',
            'seguido'=>'required',
        ]);
        //manejar  subida de archivos
        
        // almacenar articulo
        $follow =  new Follow;
        $follow->seguidor = $request->input('seguidor');
        $follow->seguido = $request->input('seguido');
        $follow->save();
        return back();
    }
    public function delete(Request $request)
    {
        
        $follow = Follow::where([
            ['seguidor',$request->input('seguidor')],
            ['seguido',$request->input('seguido')]]);
        
        $follow->delete();

        return back();
    }

}

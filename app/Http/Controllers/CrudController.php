<?php

namespace App\Http\Controllers;

use App\Models\PersonData;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function create(Request $req)
    {
        $res = PersonData::create($req->all());
        return response()->json($res, 201);
    }

    public function all()
    {
        return response() -> json(PersonData::all(), 200);
    }

    public function index($id)
    {
        $res = PersonData::find($id);

        if($res){
            return response() -> json($res, 200);
        }
        return response() -> json(['error' => 'Person not found'], 204);
    }

    public function edit(Request $req, $id)
    {
        $person = PersonData::find($id);
        
        if (!$person) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        try{
            PersonData::where("id", $id)->update($req->all());
            return response() -> json(['msg' => 'Person updated!'], 200);
        }
        catch(Exception $ex){
            return response()-> json(['error' => 'Failed to update Person'], 304);
        }
    }

    public function remove($id)
    {
        $person = PersonData::find($id);

        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        try{
            PersonData::where("id", $id)->delete();
            return response()->json(['msg' => 'Person deleted'], 204);
        }
        catch(Exception $ex){
            return response()->json(['error' => 'Failed to delete Person'], 304);
        }
    }
}

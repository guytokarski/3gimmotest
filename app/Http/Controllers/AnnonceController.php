<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all annonces using Eloquent model
        $annonces = Annonce::all();
        return \View::make('annonce.index')
            ->with('annonces', $annonces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/annonce/create.blade.php)
        return \View::make('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entity = new Annonce();
        
        // array of validation rules
        $rules = [
            "ref_annonce" => ["required", "string", "max:20"],
            "prix_annonce" => ["numeric"],
            "surface_habitable" => ["numeric"],
            "nombre_de_piece" => ["integer"],
        ];

        $params = $request->all();
        unset($params['_token']);
        $validator = \Validator::make($params, $rules);

        if ($validator->fails()) {
            return \Redirect::to('annonce/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // store
        $entity->forceFill($validator->valid());
        $entity->timestamps = false;
        
        $entity->save();

        // redirect
        \Session::flash('message', 'Successfully created annonce!');
        return \Redirect::to('annonce');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        // get the annonce
        $entity = Annonce::find($id);

        // show the view and pass the annonce to it
        return \View::make('annonce.show')
            ->with('annonce', $entity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        
        // get the annonce
        $entity = Annonce::find($id);

        $data = [
            'entity' => $entity
        ];

        // show the edit form and pass the annonce
        return \View::make('annonce.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $entityId)
    {
        $entity = Annonce::find($entityId);

        // array of validation rules
        $rules = [
            "ref_annonce" => ["required", "string", "max:20"],
            "prix_annonce" => ["numeric"],
            "surface_habitable" => ["numeric"],
            "nombre_de_piece" => ["integer"],
        ];

        $validatedData = $request->validate($rules);
        
        // process the login
        if ($validatedData) {
            // store
            $entity->forceFill($validatedData);
            $entity->timestamps = false;
            
            $entity->save();

            // redirect
            \Session::flash('message', 'Successfully updated annonce!');
            return \Redirect::to('annonce');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        // delete
        $entity = Annonce::find($id);

        $entity->delete();

        // redirect
        \Session::flash('message', 'Successfully deleted the annonce!');
        return \Redirect::to('annonce');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    protected $model;
    public function __construct(Services $services){
        $this->model = $services;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response($this->model->all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->model->create($request->all());
            return response('Succesfully Created');
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = $this->model->find($id);
        if(!$service){
            return response('Service not found!');
        }
        return response ($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = $this->model->find($id);
        if(!$service){
            return response('Service not found!');
        }

        try {
            $data = $request->all();
            $service->fill($data)->save();
            return response('Service Updated!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = $this->model->find($id);
        if(!$service){
            return response('Service not found!');
        }

        try {
            $service->delete();
            return response('Service Deleted!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

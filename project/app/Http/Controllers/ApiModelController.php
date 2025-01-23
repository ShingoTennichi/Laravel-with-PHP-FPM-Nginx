<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreapiModelRequest;
// use App\Http\Requests\UpdateapiModelRequest;
use App\Models\apiModel;
use Illuminate\Http\Request;

class ApiModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return apiModel::all();
        // return 'ping ok';
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreapiModelRequest $request)
    // {
    //     //
    // }
    public function store(Request $request)
    {
        $fields = $request->validate([
            'api_version' => 'required',
            'api_model_name' => 'required',
        ]);

        $apiModel = apiModel::create($fields);

        return $apiModel;
    }

    /**
     * Display the specified resource.
     */
    public function show(apiModel $apiModel)
    {
        return $apiModel;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, apiModel $apiModel)
    {
        $fields = $request->validate([
            'api_version' => 'required',
            'api_model_name' => 'required',
        ]);

        $apiModel->update($fields);

        return $apiModel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(apiModel $apiModel)
    {
      $apiModel->delete();

      return ['message' => 'deleted'];
    }
}

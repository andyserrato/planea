<?php

use Acme\Transformers\TarifaTransformer;

class TarifasController extends ApiController {

    protected $tarifaTransformer;

    function __construct(TarifaTransformer $tarifaTransformer)
    {
        $this->tarifaTransformer = $tarifaTransformer;
        $this->beforeFilter('auth.basic', ['on' => 'post']);

    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // 1. All is bad
        // 2. No way to attach meta data
        // 3. Linking db structure to the API output
        // 4. No way to signal headers/response codes
		$tarifas = Tarifa::all();
        return $this->respond(
            $this->tarifaTransformer->transformCollection($tarifas->all())
        );
        //return Tarifa::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(!Input::get('tarifa') or !Input::get('precio') or !Input::get('descripcion'))
        {
            // return some kind of response
            // 422 error code
            // provide a message
            return $this->setStatusCode(422)->respondWithError('Parameter failed validation for tarifa');
        }

        Tarifa::create(Input::all());
        return $this->respond([
            'status'    => 'success',
            'message'
        ]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tarifa = Tarifa::find($id);

        if(!$tarifa) {
            return $this->respondNotFound("Tarifa no existe");
         //   return $this->respondWithError(404, "La tarifa no existe");
            /*return Response::json([
                'error' =>  [
                    'message' => 'La tarifa no existe'
                ]
            ],404);
        }
*/
        }
        return $this->respond(
             $this->tarifaTransformer->transform($tarifa)
        );
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

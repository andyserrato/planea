<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 26/02/2015
 * Time: 13:00
 */


use Illuminate\Support\Facades\Response;

class ApiController extends \BaseController {

    protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(404)->respondWithError($message);

    }

    public function respondInternalError($message = 'Innternal Error')
    {
        return $this->setStatusCode(501)->respondWithError($message);

    }

    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message)
    {
        return $this->respond([
            'error' =>[
                'message'       => $message,
                'status_code'   =>  $this->getStatusCode()
            ]
        ]);
    }

}
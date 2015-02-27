<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 26/02/2015
 * Time: 12:30
 */

namespace Acme\Transformers;

class TarifaTransformer extends Transformer{

    public function transform($item)
    {
        return [
            'id' => $item['id'],
            'tarifa' => $item['tarifa'],
            'precio' => $item['precio'],
            'descripcion' => $item['descripcion']
        ];
    }
}
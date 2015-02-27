<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 26/02/2015
 * Time: 12:27
 */

namespace Acme\Transformers;


abstract class Transformer{


    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }
    public abstract function transform($item);

}

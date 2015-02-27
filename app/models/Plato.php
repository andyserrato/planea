<?php

class Plato extends \Eloquent {
	protected $table = 'platos';
    protected $fillable = ['descripcion'];

    public function menu()
    {
        return $this->belongsToMany('Menu');
    }
}
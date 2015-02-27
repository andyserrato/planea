<?php

class Tarifa extends Eloquent {
    protected $table = 'tarifas';
	protected $fillable = ['tarifa', 'precio', 'descripcion'];

    public function menu()
    {
        return $this->hasMany('Menu');
    }

}
<?php

class Menu extends \Eloquent {

    protected $table = 'menus';
	protected $fillable = ['foto', 'primer_plato', 'segundo_plato', 'postres'];

    public function local()
    {
        return $this->belongsTo('Local');
    }

    public function tarifa()
    {
        return $this->belongsTo('Tarifa');
    }
}

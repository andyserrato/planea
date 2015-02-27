<?php



class Local extends \Eloquent {

    protected $table = 'locales';
    protected $fillable = ['tipo_local', 'nombre', 'telefono', 'coordenada', 'direccion', 'descripcion'];


    public function user()
    {
        return $this->belongsTo('User');
    }

    public function menu()
    {
        return $this->hasMany('Menu');
    }

}

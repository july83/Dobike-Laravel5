<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model {
    
    protected $table = "productos";
    
    protected $guarded = [];
    
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'precio_oferta',
        'rebajas',
        'imagen',
        'categoria_id'
        ];

    //Defino la relacion inversa de la clase Producto
        public function categoria()
    {
            return $this->belongsTo('App\Categoria');
    }
    
     public function scopeName($query, $nombre) {
        if(trim($nombre) != "") {
            $query->where(\DB::raw('nombre', $nombre), "LIkE", "%$nombre%");
        }
    }
    
}

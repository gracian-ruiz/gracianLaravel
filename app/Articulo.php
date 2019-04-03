<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
class Articulo extends Model
{


	public function cliente(){

		return $this->belongsTo("App\Cliente");
	}

	//protected $dates = ['deleted_at'];
	//protected $table="articulos";
	
    protected $fillable=[
    	"nombre_articulo",
    	"precio",
    	"pais_origen",
    	"observaciones",
    	"seccion"

    ];
}

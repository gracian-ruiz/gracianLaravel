<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



namespace App\Http\Controllers;



class HolaController extends Controller {




public function hola($nombre){

return "hola {$nombre}";
}
	


}


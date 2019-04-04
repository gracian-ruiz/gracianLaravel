<?php


use App\Articulo;
use App\Cliente;
use App\Perfil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // return view('welcome',['nombre' => 'pepe']);
    return view('welcome')->with('nombre',null);
    // return view('welcome')->withNombre('pepe');
});

Route::resource('/productos','ProductosController');
Route::get('prueba2','ProductosController@prueba2');
Route::get('eliminar2','ProductosController@borrarVista');
Route::get('elim','ProductosController@borrarCont');
Route::get('probarinclude/{id}','ProductosController@probarinclude');





/*

Route::get('/inicio','ProductosController@index');
Route::get('/crear','ProductosController@create');
Route::get('/insertar','ProductosController@strore');
Route::get('/actualizar','ProductosController@update');
Route::get('/borrar','ProductosController@destroy');


Route::get('/hola/{nombre}',function($nombre){


	return "hola {$nombre}";

});



Route::get('/hola/{nombre}','HolaController@hola');
Route::get('/prueba','PostsController@index');
//Route::get('/prueba/{id}','PostsController@show');

Route::get('/insertar', function () {
  
DB::insert("INSERT INTO articulos(nombre_articulo,precio,pais_origen,observaciones,seccion)values(?,?,?,?,?)",['jarron',13.2,'japon','ceramica','ganga']);


});


Route::get('/leer', function () {
  
$resultado=DB::select("select * from articulos where nombre_articulo=?",['jarron']);

foreach($resultado as $articulo){

	return $articulo->nombre_articulo;

}


});

Route::get('/actualizar', function () {
  
DB::update("update articulos set seccion='decoracion' where id=?", [1]);


});

Route::get('/borrar', function () {
  
DB::update("delete from articulos where id=?", [1]);


});




Route:: get('/leer', function () {
  
$articulos=App\Articulo::all();

foreach($articulos as $articulo){

	echo $articulo->nombre_articulo . "<br>";

}


});
Route:: get('/leer2', function () {
  


//$articulo=App\Articulo::where("pais_origen","españa")->get();
$articulo=App\Articulo::where("pais_origen","españa")->take(1)->get();

	return $articulo;




});


Route:: get('/insertar', function () {
  

$articulos=new App\Articulo;

$articulos->nombre_articulo="pantalones";
$articulos->precio=60;
$articulos->pais_origen="japon";
$articulos->observaciones="lados a piedra";
$articulos->seccion="confeccion";


$articulos->save();




});

Route:: get('/actualizar', function () {
  

$articulos= App\Articulo::find(5);

$articulos->nombre_articulo="pantalones";
$articulos->precio=70;
$articulos->pais_origen="japon";
$articulos->observaciones="lados a piedra";
$articulos->seccion="confeccion";


$articulos->save();




});


Route:: get('/actualizar2', function () {
  

App\Articulo::where("seccion","papeleria")->update(["seccion"=>"prueba"]);




});


Route:: get('/borrar', function () {
  

$articulo=App\Articulo::find(5);


$articulo->delete();

//App\Articulo::where("seccion","ferreteria")->delete();


});

Route:: get('/inseratarvarios', function () {
  



App\Articulo::create([
	"nombre_articulo"=>"impresora",
	"precio"=>50,
	"pais_origen"=>"colombia",
	"observaciones"=>"todo ok",
	"seccion"=>"informatica"

]);


});


Route:: get('/cliente/{id}/articulo', function ($id) {
  


return Cliente::find($id)->articulo;


});



Route:: get('/articulo/{id}/cliente', function ($id) {
  


return Articulo::find($id)->cliente->nombre;


});


Route:: get('/articulos', function () {
  


$articulos=CLiente::find(2)->articulos;

foreach ($articulos as $articulo){

echo $articulo->nombre_articulo . "<br/>";
}

});

Route:: get('/cliente/{id}/perfil', function ($id) {
  



$cliente=Cliente::find($id);

foreach ($cliente->perfils as $perfil){

return $perfil->nombre;

}

});











<?php

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

//El enrutador maneja peticiones y nada más.... pero el proceso de datos, la lógica del negocio la maneja un controlado. Pero aquí se están poniendo para comenzar. El controlador es el que retorna la vista. También existe el middleware, que puede ir antes o después del controlador

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/perro', function(){
//     return 'archivo perro';
// });

// Route::get('/hola', function(){
//     //para pasar datos a la vista se puede hacer como parámetro de la url, como parámetro de la función o como parámetro del view, que es lo que vamos a hacer:

//     $miNombre = 'Mey';
//     $marcas = ['Ford', 'Chevrolet', 'Dodge', 'Torino'];

//     //tengo varias formas de enviar datos a la vista. La primera es como parámetro con forma de arreglo, la otra compact() y con with()
//     //['nombre_a_enviar', $valor]
//     //ese nombre_a_enviar es la variable con la que voy a trabajar en el archivo view, no se tiene que llamar igual a la variable que tengo de este lado
//     //=> DOUBLE ARROW
//     return view('saludo', [ 'nombre' => $miNombre,
//                             'numero' => 7,
//                             'marcas' => $marcas
//                             ]
//     );
// });

// Route::get('/formulario', function(){

//     return view('enviar');
// });

// Route::post('/mostrar', function(){
//     $nombre = $_POST['nombre'];   //se captura el dato del formulario

//     return view('vista', ['nombre' => $nombre]);   //si lo envío así directamente, me da un error 419 (porque no se hizo verificación csrf)
// });

// Route::get('/test2', function(){

//     return view('plantilla0');
// });

// Route::get('/test3', function(){

//     return view('test');
// });

// //layouts
// Route::get('/test4', function(){

//     return view('main');
// });

// //row sql
// Route::get('/select', function(){

//     $regiones = DB::select('SELECT regID, regNombre FROM regiones');

//     //para ver que hay en regiones:
//     //dd($regiones);
//     //es como var_dump de Laravel

//     return view('vistaRegiones', ['regiones' => $regiones]);
// });

// Route::get('/insert', function () {
//     DB::insert('INSERT INTO regiones (regNombre) VALUES ("Atlandida")');  //retorna filas afectadas

//     return redirect('/select')->with('mensaje', 'Región: '."Atlandida".' agregada con éxito!');
// });

// Route::get('/update', function () {
//     DB::update('UPDATE regiones SET regNombre = "Argenzuela" WHERE regID = 9');  //retorna filas afectadas

//     return redirect('/select')->with('mensaje', 'Región: '."Argenzuela".' modificada con éxito!');
// });

// // ###########  QUERY BUILDER  #############
// Route::get('/qbSelect', function () {
//     // $regiones = DB::table('regiones')->get();    //este método trae todo
//     // $regiones = DB::table('regiones')
//     //                                 ->where('regNombre','like', '%del%')
//     //                                 ->get();

//     // $regiones = DB::table('regiones')
//     //                                 ->where('regNombre','like', '%del%')
//     //                                 ->first();

//     // $regiones = DB::table('regiones')
//     //                                 ->where('regID',9)
//     //                                 ->get();

//     // $regiones = DB::table('regiones')
//     //                                 ->where('regID',9)
//     //                                 ->first();

//     $regiones = DB::table('regiones')
//                                     ->whereIn('regID',[2,4])
//                                     ->get();

//     dd($regiones);
// });

// // Rutas para adminRegiones
// Route::get('/adminRegiones', function() {
//     $regiones = DB::table('regiones')->get();

//     return view('adminRegiones', [ 'regiones'=> $regiones ]);
// });

// Route::get('/formAgregarRegion', function() {

//     return view('formAgregarRegion');
// });

// Route::post('/agregarRegion', function() {
//     $regNombre = $_POST['regNombre'];
//     DB::table('regiones')->insert(['regNombre' => $regNombre]);

//     return redirect('/adminRegiones')->with('mensaje', 'Se ha agregardo la región '.$regNombre.' correctamente');
// });

// Route::get('/formModificarRegion/{regID}', function($regID) {
//     $region = DB::table('regiones')
//                                     ->where('regID', $regID)
//                                     ->first();

//     return view('formModificarRegion', ['region' => $region]);
// });

// Route::post('/modificarRegion', function() {
//     $regID = $_POST['regID'];
//     $regNombre = $_POST['regNombre'];
//     DB::table('regiones')
//                         ->where('regID', $regID)
//                         ->update(['regNombre' => $regNombre]);

//     return redirect('adminRegiones')->with('mensaje', 'Se ha modificado la región '.$regNombre.' correctamente');
// });

//         //falta hacer la vista de confirmación


// Route::get('/formEliminarRegion/{regID}', function($regID){
//     $region = DB::table('regiones')
//                                     ->where('regID', $regID)
//                                     ->first()
//     ;
//     // dd($region);

//     return view ('formEliminarRegion', ['region' => $region]);
// });

// Route::post('eliminarRegion', function(){
//     $regID = $_POST['regID'];

//     $regNombre = DB::table('regiones')
//                                         ->where('regID', $regID)
//                                         ->value('regNombre')
//     ;

//     DB::table('regiones')
//                             ->where('regID', $regID)
//                             ->delete()
//     ;

//     return redirect('/adminRegiones')->with('mensaje', 'Se ha eleminado la región '.$regNombre.' correctamente');
// });

// // Rutas para adminDestinos
// Route::get('/adminDestinos', function(){

//     $destinos = DB::table('destinos')
//                                     ->join('regiones', 'destinos.regID', '=', 'regiones.regID')
//                                     ->select('destinos.*', 'regiones.regNombre')  //esta parte no era necesaria
//                                     ->get()
//     ;

//     // dd($destinos);

//     return view('adminDestinos', ['destinos' => $destinos]);
// });

// Route::get('/formAgregarDestino', function(){
//     $regiones2 = DB::table('regiones')->get();

//     return view('formAgregarDestino', [ 'regiones2'=> $regiones2 ]);
// });

// Route::post('/agregarDestino', function(){
//     $destNombre = $_POST['destNombre'];
//     $regID = $_POST['regID'];
//     $destPrecio = $_POST['destPrecio'];
//     $destAsientos = $_POST['destAsientos'];
//     $destDisponibles = $_POST['destDisponibles'];

//     DB::table('destinos')->insert([
//                                     'destNombre' => $destNombre,
//                                     'regID' => $regID,
//                                     'destPrecio' => $destPrecio,
//                                     'destAsientos' => $destAsientos,
//                                     'destDisponibles' => $destDisponibles
//                                     // 'destActivo' => 1
//     ]);

//     return redirect('/adminDestinos')->with('mensaje', 'Se ha agregardo el destino '.$destNombre.' correctamente');
// });

// Route::get('/formEliminarDestino/{destID}', function($destID){
//     $destino = DB::table('destinos')
//                         ->where('destID', $destID)
//                         ->first()
//     ;

//     return view('formEliminarDestino', ['destino' => $destino]);

// });

// //hacer esto por get es hacerlo "sucio"... tengo que hacerlo por post, de modo que el id no me lo puedo pasar por la url, sino con un input:hidden
// Route::post('/eliminarDestino', function(){
//     $destID = $_POST['destID'];

//     $destNombre = DB::table('destinos')
//                                         ->where('destID', $destID)
//                                         ->value('destNombre')
//     ;

//     DB::table('destinos')
//                             ->where('destID', $destID)
//                             ->delete()
//     ;

//     return redirect('/adminDestinos')->with('mensaje', 'Se ha eleminado el destino '.$destNombre.' correctamente');
// });

// Route::get('/formModificarDestino/{destID}', function($destID){
//     $destino = DB::table('destinos')
//                                     ->where('destID', $destID)
//                                     ->first()
//     ;

//     $regiones = DB::table('regiones')->get();

//     // dd($destino);

//     return view('formModificarDestino', [
//                                             'destino' => $destino,
//                                             'regiones' => $regiones
//     ]);
// });

// Route::post('/confirmarModificarDestino', function(){
//     $nuevoDestino = $_POST;
//     $regNombre = DB::table('regiones')
//                                         ->where('regID', $_POST['regID'])
//                                         ->value('regNombre')
//     ;

//     // dd($nuevoDestino);

//     return view ('confirmarModificarDestino', [
//                                         'nuevoDestino' => $nuevoDestino,
//                                         'regNombre' => $regNombre
//     ]);
// });

// Route::post('/modificarDestino', function(){

//     // dd($_POST);

//     DB::table('destinos')
//                         ->where('destID', $_POST['destID'])
//                         ->update([
//                             'destNombre' => $_POST['destNombre'],
//                             'destPrecio' => $_POST['destPrecio'],
//                             'regID' => $_POST['regID'],
//                             'destAsientos' => $_POST['destAsientos'],
//                             'destDisponibles' => $_POST['destDisponibles']
//                         ]
//     );

//     return redirect('adminDestinos')->with('mensaje', 'Se ha modificado el destino '.$_POST['destNombre'].' correctamente');
// });


// ##########################################################
// ##Elocuent
// ##########################################################

// use \App\Noticia;

// Route::get('/traerNoticias', function(){

//     $noticias = Noticia::find([1,4]);

//     dd($noticias);
// });

// Route::get('/nuevaNoticia', function(){
//     $noticia = new Noticia;
//     $noticia->titulo = 'Nueva Noticia';
//     $noticia->noticia = 'Texto de la Noticia';
//     $noticia->autor = 'Un nombre';
//     $noticia->imagen = 'nombre.jpg';

//     $noticia->save();
// });

// Route::get('/modificaNoticia', function(){
//     $noticiaModificada = Noticia::find(2);
//     $noticiaModificada->titulo = 'Nueva Noticia Modificada 2';
//     // $noticiaModificada->noticia = 'Texto de la Noticia Modificada';
//     // $noticiaModificada->autor = 'Un nombre Modificado';
//     $noticiaModificada->imagen = 'nombre530.jpg';

//     $noticiaModificada->save();
// });

// ##########################################################
// ##Proyeco -part 2
// ##########################################################

// use \App\Region;

// Route::get('/adminRegiones2', function(){
//     $regiones = Region::get();

//     return view('adminRegiones', ['regiones' => $regiones]);
// });


Route::get('/', function () {
    return view('welcome');
});

#####Regiones
Route::get('/adminRegiones', 'RegionesController@index');
Route::get('/formAgregarRegion', 'RegionesController@create');
Route::post('/agregarRegion', 'RegionesController@store');
Route::get('/formModificarRegion/{regID}', 'RegionesController@edit');
Route::post('/modificarRegion', 'RegionesController@update');
Route::get('/formEliminarRegion/{regID}', 'RegionesController@show');
Route::post('/eliminarRegion', 'RegionesController@destroy');  //yo

####destinos
Route::get('/adminDestinos', 'DestinosController@index');
Route::get('/formAgregarDestino', 'DestinosController@create');
Route::post('/agregarDestino', 'DestinosController@store');
Route::get('/formModificarDestino/{destID}', 'DestinosController@edit');
Route::post('/modificarDestino', 'DestinosController@update');
Route::get('/formEliminarDestino/{destID}', 'DestinosController@show');
Route::post('/eliminarDestino', 'DestinosController@destroy');


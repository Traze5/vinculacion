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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('storetipodesecho/{taller}', array('uses' => 'TallerController@storeTipoDesecho', 'as' => 'storeTipoDesecho'));

Route::delete('deletetipodesecho/{taller}/{id}', array('uses' => 'TallerController@destroyTipoDesecho', 'as' => 'destroyTipoDesecho'));

Route::post('storetiporiesgos/{taller}', array('uses' => 'TallerController@storeTipoRiesgos', 'as' => 'storeTipoRiesgos'));

Route::delete('deleteTipoRiesgos/{taller}/{id}', array('uses' => 'TallerController@destroyTipoRiesgos', 'as' => 'destroyTipoRiesgos'));

Route::post('storetipovegetal/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTipoVegetal', 'as' => 'storeTipoVegetal'));

Route::delete('deletetipovegetal/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyTipoVegetal', 'as' => 'destroyTipoVegetal'));

Route::post('storereligion/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeReligion', 'as' => 'storeReligion'));

Route::delete('deletereligion/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyReligion', 'as' => 'destroyReligion'));

Route::post('storetipofuentes/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTipoFuentes', 'as' => 'storeTipoFuentes'));

Route::delete('deletetipofuentes/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyTipoFuentes', 'as' => 'destroyTipoFuentes'));

Route::post('storeusotierra/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeUsoTierra', 'as' => 'storeUsoTierra'));

Route::delete('deleteusotierra/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyUsoTierra', 'as' => 'destroyUsotierra'));

Route::post('storelenguaje/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeLenguaje', 'as' => 'storeLenguaje'));

Route::delete('deletelenguaje/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyLenguaje', 'as' => 'destroyLenguaje'));

Route::post('storetradicion/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTradicion', 'as' => 'storeTradicion'));

Route::delete('deletetradicion/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyTradicion', 'as' => 'destroyTradicion'));

Route::post('storepeligros/{areainfluencia}', array('uses' => 'AreainfluenciaController@storePeligros', 'as' => 'storePeligros'));

Route::delete('deletepeligros/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyPeligros', 'as' => 'destroyPeligros'));

Route::post('storetopologia/{areainfluencia}', array('uses' => 'AreainfluenciaController@storeTopologia', 'as' => 'storeTopologia'));

Route::delete('deletetopologia/{areainfluencia}/{id}', array('uses' => 'AreainfluenciaController@destroyTopologia', 'as' => 'destroyTopologia'));

Route::post('storetipocultivos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoCultivos', 'as' => 'storeTipoCultivos'));

Route::delete('deleteTipoCultivos/{planriesgos}/{id}', array('uses' => 'PlanRiesgosController@destroyTipoCultivos', 'as' => 'destroyTipoCultivos'));

Route::post('storetipoalimentos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAlimentos', 'as' => 'storeTipoAlimentos'));

Route::delete('deletetipoalimentos/{planRiesgos}/{id}', array('uses' => 'PlanRiesgosController@destroyTipoAlimentos', 'as' => 'destroyTipoAlimentos'));

Route::post('storetipoalimentosconsumo/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAlimentosConsumo', 'as' => 'storeTipoAlimentosConsumo'));

Route::delete('deletetipoalimentosconsumo/{planRiesgos}/{id}', array('uses' => 'PlanRiesgosController@destroyTipoAlimentosConsumo', 'as' => 'destroyTipoAlimentosConsumo'));

Route::post('storetipoanimales/{planriesgos}', array('uses' => 'PlanDeGestionDeRiesgosController@storeTipoAnimales', 'as' => 'storeTipoAnimales'));

Route::delete('deletetipoanimales/{planRiesgos}/{id}', array('uses' => 'PlanDeGestionDeRiesgosController@destroyTipoAnimales', 'as' => 'destroyTipoAnimales'));

Route::post('storeAmenazas/{planriesgos}',array('uses'=>'PlanDeGestionDeRiesgosController@storeAmenazas', 'as'=>'storeAmenazas'));
Route::delete('deleteAmenazas/{planriesgos}/{id}',array('uses'=>'PlanDeGestionDeRiesgosController@destroyAmenazas', 'as'=> 'destroyAmenazas'));

Route::post('storeVulnerabilidades/{planriesgos}',array('uses'=>'PlanDeGestionDeRiesgosController@storeVulnerabilidades', 'as'=>'storeVulnerabilidades'));

Route::delete('deleteVulnerabilidades/{planriesgos}/{id}',array('uses'=>'PlanDeGestionDeRiesgosController@destroyVulnerabilidades', 'as'=> 'destroyVulnerabilidades'));

Route::post('storeAgriculturas/{planriesgos}',array('uses'=>'PlanDeGestionDeRiesgosController@storeAgriculturas', 'as'=>'storeAgriculturas'));

Route::delete('deleteAgriculturas/{planriesgos}/{id}',array('uses'=>'PlanDeGestionDeRiesgosController@destroyAgriculturas', 'as'=> 'destroyAgriculturas'));

Route::post('storetipoagricultura/{planriesgos}', array('uses' => 'PlanRiesgosController@storeTipoAgricultura', 'as' => 'storeTipoAgricultura'));

Route::delete('deletetipoagricultura/{planRiesgos}/{id}', array('uses' => 'PlanRiesgosController@destroyTipoAgricultura', 'as' => 'destroyTipoAgricultura'));

Route::post('storeorigeningresos/{planriesgos}', array('uses' => 'PlanDeGestionDeRiesgosController@storeOrigenIngresos', 'as' => 'storeOrigenIngresos'));

Route::delete('deleteorigeningresos/{planRiesgos}/{id}', array('uses' => 'PlanDeGestionDeRiesgosController@destroyOrigenIngresos', 'as' => 'destroyOrigenIngresos'));

Route::post('storegrupoalimentosproductos/{planriesgos}', array('uses' => 'PlanRiesgosController@storeGrupoAlimentosProductos', 'as' => 'storeGrupoAlimentosProductos'));

Route::delete('deletegrupoalimentosproductos/{planRiesgos}/{id}', array('uses' => 'PlanRiesgosController@destroyGrupoAlimentosProductos', 'as' => 'destroyGrupoAlimentosProductos'));

Route::resource('planRiesgosHasGAProductos', 'PlanRiesgos_Has_GrupoAlimentosProductosController');

Route::resource('asociacions', 'AsociacionController');

Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('planRiesgosHasTipoAgriculturas', 'PlanRiesgos_Has_TipoAgriculturaController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');

Route::resource('grupoAlimentosProductos', 'GrupoAlimentosProductosController');

Route::resource('lenguajes', 'LenguajeController');

Route::resource('manejoAmbientals', 'ManejoAmbientalController');

Route::resource('productos', 'ProductoController');
Route::resource('productos/pdf', 'ProductoController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');

Route::resource('planRiesgosHasTipoCultivos', 'PlanRiesgos_Has_TipoCultivosController');

Route::resource('tallerHasTipoDesechos', 'Taller_Has_TipoDesechoController');

Route::resource('tallerHasTipoRiesgos', 'Taller_Has_TipoRiesgosController');

Route::resource('religions', 'ReligionController');

Route::resource('tallers', 'TallerController');

Route::resource('unidadproduccions', 'unidadproduccionController');

Route::resource('tradicions', 'tradicionController');

Route::resource('topologias', 'topologiaController');

Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('paisajes', 'PaisajeController');

Route::resource('abastecimientoaguas', 'AbastecimientoaguaController');

// Route::resource('areainfluencias', 'AreainfluenciaController');

Route::resource('areainfluenciaHasLenguajes', 'Areainfluencia_has_lenguajeController');

Route::resource('areainfluenciaHasPeligros', 'Areainfluencia_has_peligrosController');

Route::resource('areainfluenciaHasReligions', 'Areainfluencia_has_religionController');

Route::resource('pdf', 'ManejoAmbientalController');
Route::resource('pdf', 'unidadproduccionController');
Route::resource('pdf', 'PropietarioController');
Route::resource('pdf', 'TipoAnimalesController');
Route::resource('pdf', 'OrigenIngresosController');
Route::resource('pdf', 'AgriculturaController');
Route::resource('pdf', 'PlanDeGestionDeRiesgosController');
Route::resource('pdf', 'TrabajadoresController');
Route::resource('pdf', 'TallerController');
Route::resource('pdf', 'DesechotController');
Route::resource('pdf', 'ProductoController');
Route::resource('pdf', 'AsociacionController');
Route::resource('pdf', 'DesechoController');
Route::resource('pdf', 'BiodigestorController');
Route::resource('pdf', 'AreaInfluenciaController');

// Route::resource('unidadProduccionHasPropietarios', 'UnidadProduccion_Has_PropietarioController');

Route::resource('areainfluenciaHasUsotierras', 'Areainfluencia_has_usotierraController');

Route::resource('tipoAsociacions', 'TipoAsociacionController');

Route::resource('areaInfluenciaHasTipoFuentes', 'AreaInfluenciaHasTipoFuentesController');

Route::resource('areaInfluenciaHasTipoVegetals', 'AreaInfluenciaHasTipoVegetalController');

Route::resource('areaInfluenciaHasTopologias', 'AreaInfluenciaHasTopologiaController');

Route::resource('areaInfluenciaHasTradicions', 'AreaInfluenciaHasTradicionController');

Route::resource('caracteristicasEtnicas', 'CaracteristicasEtnicasController');

Route::resource('categoriaProyectos', 'CategoriaProyectoController');

Route::resource('climas', 'ClimaController');

Route::resource('consolidacionAreaInfluencias', 'ConsolidacionAreaInfluenciaController');

Route::resource('ecosistemas', 'EcosistemaController');

Route::resource('tipoAgriculturas', 'TipoAgriculturaController');

Route::resource('tipoAlimentos', 'TipoAlimentosController');

Route::resource('tipoAlimentosConsumos', 'TipoAlimentosConsumoController');

Route::resource('tipoDesechos', 'TipoDesechoController');

Route::resource('tipoProductos', 'TipoProductoController');

Route::resource('tipoProyectos', 'TipoProyectoController');

Route::resource('tipoRiesgos', 'TipoRiesgosController');

Route::resource('tipoSuelos', 'TipoSueloController');

Route::resource('areainfluencias', 'AreainfluenciaController');

Route::resource('biodigestors', 'BiodigestorController');

Route::resource('desechos', 'DesechoController');

Route::resource('tipodesechos', 'TipodesechoController');

Route::resource('generos', 'GeneroController');

Route::resource('usoSuelos', 'UsoSueloController');

Route::resource('tipoDesechots', 'TipoDesechotController');

Route::resource('desechots', 'DesechotController');

Route::resource('tallers', 'TallerController');

Route::resource('condicionesDrenajes', 'CondicionesDrenajeController');

Route::resource('tipoVegetals', 'TipoVegetalController');

Route::resource('areaInfluencias', 'AreaInfluenciaController');

Route::resource('permeabilidadSuelos', 'PermeabilidadSueloController');

Route::resource('tipoAbonos', 'TipoAbonoController');

Route::resource('tipoControlPlagas', 'TipoControlPlagaController');







Route::resource('tipoCultivos', 'TipoCultivosController');

Route::resource('tipoAnimales', 'TipoAnimalesController');

Route::resource('precuarias', 'PrecuariaController');

Route::resource('destinos', 'DestinoController');

Route::resource('tipoProduccions', 'TipoProduccionController');

Route::resource('tipoUnidads', 'TipoUnidadController');

Route::resource('origenIngresos', 'OrigenIngresosController');

Route::resource('agriculturas', 'AgriculturaController');

Route::resource('amenazas', 'AmenazasController');

Route::resource('vulnerabilidades', 'VulnerabilidadesController');

Route::resource('planDeGestionDeRiesgos', 'PlanDeGestionDeRiesgosController');

Route::resource('propietarios', 'PropietarioController');

Route::resource('planRiesgosHasTipoAnimales', 'PlanDeGestionDeRiesgos_Has_TipoAnimalesController');




Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('origenIngresos', 'OrigenIngresosController');

Route::resource('agriculturas', 'AgriculturaController');

Route::resource('pais', 'PaisController');

Route::resource('trabajadores', 'TrabajadoresController');

Route::resource('tipousuarios', 'tipousuarioController');



Route::get('descargar-productos', 'ProductoController@pdf')->name('productos.pdf');

Route::get('productos-pdf',array(
    'as'=>'vistaHTMLPDF',
    'uses'=>'ProductoController@vistaHTMLPDF'
));
Route::get('unidadProduccion-pdf',array(
    'as'=>'vistaproduccionHTMLPDF',
    'uses'=>'unidadproduccionController@vistaproduccionHTMLPDF'
));
Route::get('tipoAnimales-pdf',array(
    'as'=>'tipoAnimalesHTMLPDF',
    'uses'=>'TipoAnimalesController@tipoAnimalesHTMLPDF'
));
Route::get('propietarios-pdf',array(
    'as'=>'propietariosHTMLPDF',
    'uses'=>'PropietarioController@propietariosHTMLPDF'
));
Route::get('areaInfluencias-pdf',array(
    'as'=>'areaInfluenciasHTMLPDF',
    'uses'=>'AreainfluenciaController@areaInfluenciasHTMLPDF'
));
Route::get('origenIngreso-pdf',array(
    'as'=>'origenIngresoHTMLPDF',
    'uses'=>'OrigenIngresosController@origenIngresoHTMLPDF'
));
Route::get('Agricultura-pdf',array(
    'as'=>'AgriculturaHTMLPDF',
    'uses'=>'AgriculturaController@AgriculturaHTMLPDF'
));
Route::get('planGestionRiesgos-pdf',array(
    'as'=>'planGestionRiesgosHTMLPDF',
    'uses'=>'PlanDeGestionDeRiesgosController@planGestionRiesgosHTMLPDF'
));
Route::get('trabajadores-pdf',array(
    'as'=>'trabajadoresHTMLPDF',
    'uses'=>'TrabajadoresController@trabajadoresHTMLPDF'
));
Route::get('taller-pdf',array(
    'as'=>'tallerHTMLPDF',
    'uses'=>'TallerController@tallerHTMLPDF'
));
Route::get('desechots-pdf',array(
    'as'=>'desechotsHTMLPDF',
    'uses'=>'DesechotController@desechotsHTMLPDF'
));
Route::get('desechos-pdf',array(
    'as'=>'desechosHTMLPDF',
    'uses'=>'DesechoController@desechosHTMLPDF'
));
Route::get('asociacion-pdf',array(
    'as'=>'asociacionHTMLPDF',
    'uses'=>'AsociacionController@asociacionHTMLPDF'
));
Route::get('manejoAmbiental-pdf',array(
    'as'=>'vistamanejoAmbientalHTMLPDF',
    'uses'=>'manejoAmbientalController@vistamanejoAmbientalHTMLPDF'
));
Route::get('biodigestor-pdf',array(
    'as'=>'biodigestorHTMLPDF',
    'uses'=>'biodigestorController@biodigestorHTMLPDF'
));




Route::resource('users', 'usersController');

Route::resource('tipousuarios', 'tipousuariosController');
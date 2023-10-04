<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SerieRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class SerieController extends Controller
{
    public function store(SerieRequest $request)
    {
        $config = Cache::get('database_config');

        Config::set('database.connections.dynamic', $config);

        DB::purge('dynamic');
        DB::setDefaultConnection('dynamic');
        
        try {
            $request->validated();

            $apt = $request->has('apt') ? true : false;

            Serie::create([
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'fecha_estreno' => $request->fecha_estreno,
                'estrellas' => $request->estrellas,
                'genero' => $request->genero,
                'precio_alquiler' => $request->precio_alquiler,
                'apt' => $apt
            ]);

            flash('La serie: ' . $request->titulo . ' se agrego con exito!')->success();
            return redirect()->route('dashboard');
        } catch (Exception $e) {
            flash('ERROR: ' . $e->getMessage())->error();
            return back();
        }
    }

    public function destroy(Request $request)
    {
        $config = Cache::get('database_config');

        Config::set('database.connections.dynamic', $config);

        DB::purge('dynamic');
        DB::setDefaultConnection('dynamic');

        try {
            $serie = Serie::find($request->id);

            $serie->delete();

            flash('La serie: ' . $serie->titulo . ' se elimino con exito!')->success();
            return redirect()->route('dashboard');
        } catch (Exception $e) {
            flash('ERROR: ' . $e->getMessage())->error();
            return back();
        }
    }

    public function update(Request $request)
    {
        $config = Cache::get('database_config');

        Config::set('database.connections.dynamic', $config);

        DB::purge('dynamic');
        DB::setDefaultConnection('dynamic');

        try {
            $serie = Serie::find($request->id);

            if ($serie->estado == 'AC') {
                $apt = $request->has('apt') ? true : false;

                $serie->titulo = $request->titulo;
                $serie->descripcion = $request->descripcion;
                $serie->fecha_estreno = $request->fecha_estreno;
                $serie->estrellas = $request->estrellas;
                $serie->genero = $request->genero;
                $serie->precio_alquiler = $request->precio_alquiler;
                $serie->apt = $apt;

                $serie->save();


                flash('La serie: ' . $serie->titulo . ' se actualizo con exito!')->success();
                return redirect()->route('dashboard');
            } else {
                flash('La serie: ' . $serie->titulo . ' no puede ser modificada!')->warning();
                return back();
            }
        } catch (Exception $e) {
            flash('ERROR: ' . $e->getMessage())->error();
            return back();
        }
    }

    public function anular(Request $request)
    {
        $config = Cache::get('database_config');

        Config::set('database.connections.dynamic', $config);

        DB::purge('dynamic');
        DB::setDefaultConnection('dynamic');

        try {
            $serie = Serie::find($request->id);
            
            if ($serie->estado == 'AC') {
                $serie->estado = 'AN';
                flash('La serie: ' . $serie->titulo . ' ah sido anulada!')->success();
                $serie->save();
            } else {
                $serie->estado = 'AC';
                flash('La serie: ' . $serie->titulo . ' ah sido activada!')->success();
                $serie->save();
            }

            return redirect()->route('dashboard');
        } catch (Exception $e) {
            flash('ERROR: ' . $e->getMessage())->error();
            return back();
        }
    }
}

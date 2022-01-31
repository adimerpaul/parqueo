<?php

namespace App\Http\Controllers;

use App\Models\Parqueo;
use App\Http\Requests\StoreParqueoRequest;
use App\Http\Requests\UpdateParqueoRequest;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

class ParqueoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Parqueo::where('estado','OCUPADO')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParqueoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParqueoRequest $request)
    {
        Parqueo::where('placa',$request->placa)->update(['conductor'=>strtoupper($request->conductor)]);
        $parqueo=new Parqueo();
        $parqueo->placa=strtoupper($request->placa);
        $parqueo->conductor=strtoupper($request->conductor);
        $parqueo->nivel=$request->nivel;
        $parqueo->carril=$request->carril;
        $parqueo->tipo=$request->tipo;
        $parqueo->operador=$request->user()->username;
        $parqueo->fechaingreso=date('Y-m-d');
        $parqueo->horaingreso=date('H:i:s');
        $parqueo->save();
        return $this->boleta($parqueo->id);
    }
    public function boleta($id){
        $parqueo=Parqueo::find($id);
        $cadena='<table style="width: 100%;font-size: 12px">
            <tr>
                <td style="width: 50%">
                   <table style="width: 100%;font-size: 12px" border="1">
                   <tr>
                   <td colspan="2" style=" text-align: center;font-weight: bold;font-size: 12px">
                        GOBIERNO AUTONOMO MUNICIPAL DE ORURO <br>
                        DIRECCION DE TRAFICO Y VIALIDAD <br>
                        ESTACIONAMIENTO MUNICIPAL <hr>
                    </td>
                   </tr>
                   <tr>
                   <td> <b>PLACA:</b> '.$parqueo->placa.'</td>
                   <td> <b>HR. INGRESO:</b> '.$parqueo->horaingreso.'</td>
                    </tr>
                    <tr>
                    <td colspan="2"><b>CONDUCTOR:</b> '.$parqueo->conductor.'</td>
                    </tr>
                    <tr>
                   <td> <b>FECHA:</b> '.$parqueo->fechaingreso.'</td>
                   <td> <b>SERVICIO:</b> '.$parqueo->tipo.'</td>
                    </tr>
                    <tr>
                   <td> <b>CARRIL:</b> '.$parqueo->carril.'</td>
                   <td> <b>NIVEL:</b> '.$parqueo->nivel.'</td>
                    </tr>
                   </table>
                </td>
                <td style="width: 50%"></td>
            </tr>
            </table>';
        return $cadena;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function show($placa)
    {
        return Parqueo::where('placa',$placa)->get();
//        return $placa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function edit($carril)
    {
        $parqueo= Parqueo::where('carril',$carril)->where('estado','OCUPADO')->first();
        $parqueo->fechasalida=date('Y-m-d');
        $parqueo->horasalida=date('H:i:s');
        $fecha1 = new DateTime($parqueo->fechaingreso.' '.$parqueo->horaingreso);//fecha inicial
        $fecha2 = new DateTime($parqueo->fechasalida.' '.$parqueo->horasalida);//fecha de cierre

        $intervalo = $fecha1->diff($fecha2);

        if ($parqueo->tipo=='HORAS'){
            $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            $bs=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
        }elseif ($parqueo->tipo=='JORNADA(07:00 A 23:00)'){
            $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            $bs=10;
//            if ($horas>16){
//                $bs=$bs+$horas-16;
//            }
            $fechalimite=new DateTime($parqueo->fechaingreso.' 23:00:00');
//            return  $parqueo->fechaingreso.' 23:00:00';
//            exit;
            if ($fecha2>$fechalimite){
                $intervalo = $fechalimite->diff($fecha2);
                $bs=$bs+$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            }
        }elseif ($parqueo->tipo=='MEDIA JORNADA(07:00 A 15:00)'){
            $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            $bs=5;
            $fechalimite=new DateTime($parqueo->fechaingreso.' 15:00:00');
            if ($fecha2>$fechalimite){
                $intervalo = $fechalimite->diff($fecha2);
                $bs=$bs+$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            }
        }elseif ($parqueo->tipo=='MEDIA JORNADA(15:00 A 23:00)'){
            $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            $bs=5;
            $fechalimite=new DateTime($parqueo->fechaingreso.' 23:00:00');
            if ($fecha2>$fechalimite){
                $intervalo = $fechalimite->diff($fecha2);
                $bs=$bs+$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            }
        }elseif ($parqueo->tipo=='NOCTURNO(23:00 A 07:00)'){
            $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            $bs=10;
            $fechalimite=new DateTime($parqueo->fechaingreso.' 07:00:00 + 1 days',);
            if ($fecha2>$fechalimite){
                $intervalo = $fechalimite->diff($fecha2);
                $bs=$bs+$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            }
        }elseif ($parqueo->tipo=='OFICIAL'){
            $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
            $bs=0;
//            $fechalimite=date($parqueo->fechaingreso.' 07:00:00 + 1 days',);
//            if ($fecha2>$fechalimite){
//                $intervalo = $fechalimite->diff($fecha2);
//                $bs=$bs+$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
//            }
        }

        $parqueo->horas=$horas;
        $parqueo->bs=$bs;
        $parqueo->estado='LIBRE';
        return $parqueo;
//        echo $parqueo->fechaingreso.' '.$parqueo->horaingreso.'---'.$parqueo->fechasalida.' '.$parqueo->horasalida.'-----------------';
//        return $intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h;
//        return $intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h;
//        return $intervalo->format('%Y años %m meses %d days %H horas %i minutos %s segundos');//00 años 0 meses 0 días 08 horas 0 minutos 0 segundos
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParqueoRequest  $request
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parqueo $parqueo)
    {
        $parqueo->placa=$request->placa;
        $parqueo->fechasalida=date('Y-m-d');
        $parqueo->horasalida=date('H:i:s');
        $fecha1 = new DateTime($parqueo->fechaingreso.' '.$parqueo->horaingreso);//fecha inicial
        $fecha2 = new DateTime($parqueo->fechasalida.' '.$parqueo->horasalida);//fecha de cierre
        $intervalo = $fecha1->diff($fecha2);
        $horas=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
//        $bs=$intervalo->y*365*24+$intervalo->m*30*24+$intervalo->d*24+$intervalo->h+1;
        $parqueo->horas=$horas;
        $parqueo->bs=$request->bs;
        $parqueo->estado='LIBRE';
        $parqueo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parqueo  $parqueo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parqueo $parqueo)
    {
        //
    }
    public function reporte(Request $request){
        if($request->username=='TODOS0')
        return Parqueo::whereDate('fechasalida','>=',$request->ini)
        ->whereDate('fechasalida','<=',$request->fin)
        ->where('estado','LIBRE')
        ->get();
        else
        return Parqueo::whereDate('fechasalida','>=',$request->ini)
            ->whereDate('fechasalida','<=',$request->fin)
            ->where('operador',$request->username)
            ->where('estado','LIBRE')
            ->get();
    }

    public function listuser(){
        return DB::SELECT('SELECT id,name,username from users where date(fechalimite)>=CURDATE()');
    }
}

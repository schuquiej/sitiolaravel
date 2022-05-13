<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterAuthRequest;
use App\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use DB;

class articulosController extends Controller
{
    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

 public function index(){
     return Course::paginate();
 }



    public function vistageneral(Request $request)
    {
        
        $users = DB::select('select * from publicaciones order by fec_cre desc', [1]);

        $que = "sin datos";
        $valor="0";
        $cadena = [];
        foreach ($users as $user) {
         
            $dato = [
                "d1" => $user->id,
                "d2" => $user->pub_nom,
                "d3" => $user->pub_des,
                "d4" => $user->pub_link,
                "d5" => $user->pub_tip,
                "d6" => $user->fec_cre,
            ];
            array_push($cadena, $dato);

        }
        $redis = [
            "d1" => $cadena,
            "d2" => $valor,
            
        ];
      
        
        return $redis;
      
        


    }

    public function insertar(Request $request)
    {
    
        $que = "";
        $valor="";
        $cadena  ="";
       
        $d1 =  $request->input('d1','encabezado');
        $d2 = $request->input('d2','descripcion');
        $d3 = $request->input('d3','link');
    
        error_log(print_r($_REQUEST, true));
        $que = "Registro creado";
        $valor="1";
    
        $data=array('pub_nom'=>$d1,"pub_des"=>$d2,"pub_link"=>$d3,"pub_tip"=>1);
        $query = DB::table('publicaciones')->insert($data);
   
        $cadena= $cadena.'{"d1": '.$query.' , "d2": '.$valor.' }'.',';
        $reg= ' res('.$cadena.')';
      
        return $query;


    }




}
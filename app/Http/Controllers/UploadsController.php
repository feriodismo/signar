<?php

namespace App\Http\Controllers;

use App\Upload;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UploadsController extends Controller
{

    public function __construct(){
        $this->middleware(
            'authorization',
            ['only'=>['index']]
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //titulo es la variable que se pasa al layout para el titulo de la pagina
        $titulo = 'sonidos';
        //retoma todos los archivos de el public storage
        $audioView = Storage::allFiles('public/audios');
        //se quita todo el string inecesario para obtener el nombre del archivo
        $audioView = str_replace('public', 'storage', $audioView);
        //retomamos los datos de la tabla upload para luego usarlo en la pagina index
        //todos estos pasos se hacen para asi tener el control en javascript para poder reproducir los sonidos
        $audioInfo = Upload::all();
        //se retoma la informacion de los usuarios de la tabla user
        $userInfo = User::all();
        
        // $class = str_replace('public/audios/'.$letterFile.'', '', $audioView);
        // return $class;
        // $audioView = str_replace('public', 'storage', $audioView);
        //nos lleva a index, con todas las variables compactadas
        return view('uploads.index', compact('audioView', 'audioInfo', 'titulo', 'userInfo'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->hasFile('audio')){
                
                $audio = $request->file('audio');
                $letterFile = $request->letter;

            
                if($audio->getClientSize() < 200000 ){
                
                        if($request->audio->extension() === 'mpga'){    
                            
                            if($letterFile === null){
                                return 'no le asignaste una letra';
                            }

                            $upload = new Upload;
                            $maxLetter = Upload::select(DB::raw('MAX(number)'))->where('letter', '=', $letterFile)->get()->toArray();
                            // $users = DB::table('uploads')
                            //              ->select(DB::raw('count(*)'))
                            //              ->where('letter', '=', $request->letter)
                            //              ->get();
                            $numberFile = $maxLetter[0]['MAX(number)']+1;
                            // return $numeroLetras;
                            // return $resultArray = json_decode(json_encode($users), true);
                            $upload->tittle = $request->tittle;
                            $upload->letter = $request->letter;
                            $upload->number = $numberFile;
                            $upload->user_id = $request->user_id;

                            $request->audio->storeAs('public/audios/'.$letterFile.'', $letterFile.$numberFile.'.mp3');
                            
                            $upload->save();
                        
                        }else{return 'el archivo no es mp3';}
                
                }else{return 'el archivo es muy pesado';}

        }else{return 'no seleccionaste archivos';}
       
        return redirect()->route('uploads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upload = DB::table('uploads')
                ->where('id', '=', $id)
                ->get();
        $number = $upload[0]->number;
        $letter = $upload[0]->letter;
        
        
        $url = 'public/audios/'.$letter.'/'.$letter.$number.'.mp3';
            
            Storage::delete($url);
            Upload::destroy($id);
            return redirect()->route('uploads.index');
            }
}

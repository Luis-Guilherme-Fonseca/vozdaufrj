<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use phpDocumentor\Reflection\Types\Null_;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store()
    {

        $rules = array(
            'nome' => 'required',
            'DRE' => 'required|min:9|max:9|unique:users',
            'predio' => 'required',
            'email' => 'required|email|unique:users',
            'senha' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){

            return Redirect::to('/')
                ->withErrors($validator)
                ->withInput(Input::except('senha'));
        }else{

            $usuario = new User;
            $usuario->nome = Input::get('nome');
            $usuario->dre = Input::get('DRE');
            $usuario->predio = Input::get('predio');
            $usuario->email = Input::get('email');
            $usuario->password = bcrypt(Input::get('senha'));
            if($usuario->predio === 'CCMN'){
                $usuario->id_curso = Input::get('CCMN');
            }elseif ($usuario->predio === 'CCS'){
                $usuario->id_curso = Input::get('CCS');
            }elseif ($usuario->predio === 'CT'){
                $usuario->id_curso = Input::get('CT');
            }elseif ($usuario->predio === 'REITORIA'){
                $usuario->id_curso = Input::get('REITORIA');
            }elseif ($usuario->predio === 'LETRAS'){
                $usuario->id_curso = Input::get('LETRAS');
            }

            if($usuario->id_curso == NULL){
                return Redirect::to('/');
            }
            $usuario->save();
            Session::flash('parabens', 'voce esta cadastrado');
            return back()->with(['parabens' => 'voce esta cadastrado' ]);

        }
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
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\user_model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class PersonController extends Controller
{

    private $objPerson;
    private $objUser;

    public function __construct()
    {
        $this->objPerson = new User();
        $this->objUser = new user_model();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = $this->objPerson->all();
        return view('dashboard',compact($cadastros, 'cadastros'));
    }

    public function auth(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('pessoa');
        }else{
           return redirect('pessoa')->with('danger', 'E-mail ou senha inválida');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view ('cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             user_model::create([
            'idUsuario'=>$request->idUsuario,
            'name'=>$request->name,
            'idade'=>$request->idade
        ]);
           
        echo  "<script>alert('Usuario cadastrado com sucesso no banco de dados');</script>";
        return view('dashboard');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idPessoa)
    {  
        $cadastros = User::findOrfail($idPessoa);
        return view('dashbord', compact($cadastros, 'cadastros'));
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
    
    }

    public function login()
    {
        return view ('login');
    }
}

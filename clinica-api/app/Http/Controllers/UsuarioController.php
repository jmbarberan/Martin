<?php

namespace App\Http\Controllers;

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function acceder(Request $req) {
        $credencial = json_decode($req->getContent());
        $usr = Usuario::where('nombre', $credencial->usuario)->where('clave', $credencial->clave)->first();
        if (!is_null($usr)) {
            $date = new \DateTimeImmutable();
            $expira = $date->modify('+120 minutes')->getTimestamp();
            $domainName = "ecuamedica.com";
            $username = $credencial->usuario;
        
            $datos = [
                'iat' => $date->getTimestamp(),
                'iss' => $domainName,
                'nbf' => $date->getTimestamp(),
                'exp' => $expira,
                'userName' => $username,
            ];
        
            $token = JWT::encode($datos, $_ENV['APP_KEY'], 'HS256');
            return $token;
        } else {
            return false;
        }
    }

    public function autorizado(Request $req) {
        $res = [ 'codigo' => 200, 'mensaje' => 'Ok' ];
        $token = $req->bearerToken();
        if ($token == null) {
            return [ 'codigo' => 400, 'mensaje' => 'HTTP/1.0 Bad Request' ];
        }        
        $dec = JWT::decode($token, new Key($_ENV['APP_KEY'], 'HS256'));
        $now = new \DateTimeImmutable();
        $serverName = "ecuamedica.com";
        
        if ($dec->iss !== $serverName || $dec->nbf > $now->getTimestamp() || $dec->exp < $now->getTimestamp()) {
            $res['codigo'] = 403;
            $res['mensaje'] = 'HTTP/1.1 403 Unauthorized';
        }
        return $res;
    }
}

<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_model extends Model
{
    protected $table = 'tb_Pessoa';
    protected $fillable = ['idPessoa','idUsuario','name','idade'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id');
    }
}

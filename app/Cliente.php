<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'descricao', 'idade', 'email', 'imagem'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clientes';
}

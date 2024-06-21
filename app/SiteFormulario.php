<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteFormulario extends Model
{
   protected $fillable = ['nome', 'telefone', 'email', 'mensagem'];
}

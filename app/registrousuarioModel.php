<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrousuarioModel extends Model
{
    protected $table ="usuarios";

    protected $fillable = ['nombre','email','password',]; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id';
}

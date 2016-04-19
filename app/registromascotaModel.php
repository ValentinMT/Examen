<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registromascotaModel extends Model
{
    protected $table ="mascotas";

    protected $fillable = ['nombre','edad','tipo','color',]; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id';
}

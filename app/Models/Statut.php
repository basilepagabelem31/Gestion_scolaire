<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{

    protected $fillable = ['nom','description']; // ou les champs que tu as définis


    public function users()
{
    return $this->hasMany(User::class,'statut_id');
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    public function employes()
    {
        return $this->hasMany(Employe::class);
    }

    public function postes()
    {
        return $this->hasMany(Poste::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;

    public function getIsAdminStatutAttribute()
    {
        if($this->is_admin == 1){
            return 'admin';
        }else{
            return 'user';
        }
    }

    public function getPrenomEtNomAttribute()
    {
        return $this->empl_prenom.' '.$this->empl_nom;
    }

    // Add relationship between employes and users tables
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function poste()
    {
        return $this->belongsTo(Poste::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'civilite',
        'date_naissance',
        'lieu_naissance',
        'adresse',
        'structure',
        'position',
        'ville',
        'email',
        'telephone',
    ];

    protected $table = 'teams';

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(Authenticatable::class, 'user_id');
    }

    // Mutateur pour le champ 'civilite'
    public function setCiviliteAttribute($value)
    {
        $allowedValues = ['M.', 'Mme', 'Mlle'];

        if (in_array($value, $allowedValues)) {
            $this->attributes['civilite'] = $value;
        } else {
            throw new \InvalidArgumentException('Invalid civility value');
        }
    }

    // Accesseur pour le champ 'date_naissance'
    public function getDateNaissanceAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    // Mutateur pour le champ 'date_naissance'
    public function setDateNaissanceAttribute($value)
    {
        $this->attributes['date_naissance'] = Carbon::parse($value)->format('Y-m-d');
    }

    // Accesseur pour le champ 'created_at'
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    // Mutateur pour le champ 'image'
    public function setImageAttribute($value)
    {
        $this->attributes['image'] = 'media/' . $value;
    }

    // Scope pour ordonner les résultats
    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    // Définition des champs dates
    protected $dates = ['created_at', 'updated_at', 'date_naissance'];

    // Méthode __toString pour retourner le nom complet
    public function __toString()
    {
        return $this->prenom . ' ' . $this->nom;
    }
}

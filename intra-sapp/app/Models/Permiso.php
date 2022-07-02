<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $fillable = ['opcion', 'user_id'];

    public static $rules = [
        'opcion' => 'required|min:3',
    ];

    public static $customMessages = [
        'opcion.required' => 'El campo descripcion es obligatorio.',
        'opcion.min' => 'El campo descripción debe contener >3 caract'
    ];
}

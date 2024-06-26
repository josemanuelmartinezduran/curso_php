<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'nombre'
    ];

    /**
     * Define the relationship with the Direccion model (if it exists).
     */
    public function direccion()
    {
        return $this->hasOne(Direccion::class, 'direccion_id', 'usuario_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direccion';
    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'calle',
        'numero'
    ];

    /**
     * Define the inverse relationship with the Usuario model.
     */
    public function usuarios()
    {
        return $this->belongsTo(Usuario::class);
    }
}

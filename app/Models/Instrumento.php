<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrumento extends Model
{
    use HasFactory;
    protected $table = 'instrumento';
    protected $primaryKey = 'id';

    protected $fillable = ['modelo', 'ano', 'musico_id'];

    public function musico()
    {
        return $this->belongsTo(Musico::class, 'musico_id', 'id');
    }
}

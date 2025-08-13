<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musico extends Model
{
    use HasFactory;
    protected $table = 'musico';
    protected $primaryKey = 'id';
    protected $with = ['instrumento'];

    protected $fillable = ['nome', 'sobrenome', 'cpf'];

    public function instrumento()
    {
        return $this->hasOne(Instrumento::class, 'musico_id', 'id');
    }
}

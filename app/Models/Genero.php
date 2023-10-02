<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;
     

class Genero extends Model
{
    use HasFactory;

    protected $table = 'genero';

	protected $fillable = [
		'nome',
	];

	public function livro()
	{
		return $this->belongsTo(Livro::class);
	}
}

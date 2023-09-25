<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Telefone
 *
 * @property int $id
 * @property int $aluno_id
 * @property string $nome
 * @property string $numero
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Aluno $aluno
 *
 * @package App\Models
 */
class Telefone extends Model
{
    use HasFactory;

	protected $table = 'telefone';

	protected $casts = [
		'aluno_id' => 'int'
	];

	protected $fillable = [
		'aluno_id',
		'nome',
		'numero',
	];

	protected $nullable = [
		'numero',
	];

	public function aluno()
	{
		return $this->belongsTo(Aluno::class);
	}
}

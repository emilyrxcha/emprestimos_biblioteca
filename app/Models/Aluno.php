<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Aluno
 *
 * @property int $id
 * @property string $nome
 * @property string|null $matricula
 * @property string|null $endereco
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Emprestimo[] $emprestimos
 * @property Collection|Telefone[] $telefones
 *
 * @package App\Models
 */
class Aluno extends Model
{
    use HasFactory;

	protected $table = 'aluno';

	protected $fillable = [
		'nome',
		'matricula',
		'endereco'
	];

	public function emprestimos()
	{
		return $this->hasMany(Emprestimo::class);
	}

	public function telefones()
	{
		return $this->hasMany(Telefone::class);
	}
}

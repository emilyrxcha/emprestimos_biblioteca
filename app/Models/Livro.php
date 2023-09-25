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
 * Class Livro
 *
 * @property int $id
 * @property string $nome
 * @property string $autor
 * @property string|null $isbn
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Emprestimo[] $emprestimos
 *
 * @package App\Models
 */
class Livro extends Model
{
    use HasFactory;

	protected $table = 'livro';

	protected $fillable = [
		'nome',
		'autor',
		'isbn'
	];

	public function emprestimos()
	{
		return $this->hasMany(Emprestimo::class);
	}
}

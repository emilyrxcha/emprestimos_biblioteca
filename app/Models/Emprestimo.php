<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Emprestimo
 *
 * @property int $livro_id
 * @property int $aluno_id
 * @property Carbon|null $datahora
 * @property Carbon|null $data_devolucao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Aluno $aluno
 * @property Livro $livro
 *
 * @package App\Models
 */
class Emprestimo extends Model
{
    use HasFactory;

	protected $table = 'emprestimo';
	public $incrementing = true;

	protected $casts = [
		'id'		=> 'int',
		'livro_id' => 'int',
		'aluno_id' => 'int',
		'datahora' => 'datetime',
		'data_devolucao' => 'datetime'
	];

	protected $fillable = [
		'livro_id',
		'aluno_id',
		'datahora',
		'data_devolucao'
	];

	public function aluno()
	{
		return $this->belongsTo(Aluno::class, 'aluno_id');
	}

	public function livro()
	{
		return $this->belongsTo(Livro::class);
	}
}

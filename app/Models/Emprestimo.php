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
 * @property int $usuario_id
 * @property Carbon|null $datahora
 * @property Carbon|null $data_devolucao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Livro $livro
 * @property Emprestimo $emprestimo
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
		'usuario_id' => 'int',
		'datahora' => 'datetime',
		'data_devolucao' => 'datetime',
		'created_at' => 'datetime',
		'updated_at' => 'datetime'
	];

	protected $fillable = [
		'livro_id',
		'usuario_id',
		'datahora',
		'data_devolucao',
		'created_at',
		'updated_at'
	];

	public function livro()
	{
		return $this->belongsTo(Livro::class);
	}

	public function emprestimo()
	{
		return $this->belongsTo(Emprestimo::class);
	}
}
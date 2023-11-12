<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoTipoDoc
 * 
 * @property int $TIPO_ID
 * @property string $TIP_NOMBRE
 * @property string $TIP_PREFIJO
 * 
 * @property Collection|DocDocumento[] $doc_documentos
 *
 * @package App\Models
 */
class TipoTipoDoc extends Model
{
	protected $table = 'tipo_tipo_doc';
	protected $primaryKey = 'TIPO_ID';
	public $timestamps = false;

	protected $fillable = [
		'TIP_NOMBRE',
		'TIP_PREFIJO'
	];

	public function doc_documentos()
	{
		return $this->hasMany(DocDocumento::class, 'DOC_ID_TIPO');
	}
}

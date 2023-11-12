<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocDocumento
 * 
 * @property int $DOC_ID
 * @property string $DOC_NOMBRE
 * @property string $DOC_CODIGO
 * @property string $DOC_CONTENIDO
 * @property int $DOC_ID_TIPO
 * @property int $DOC_ID_PROCESO
 * 
 * @property TipoTipoDoc $tipo_tipo_doc
 * @property ProProceso $pro_proceso
 *
 * @package App\Models
 */
class DocDocumento extends Model
{
	protected $table = 'doc_documento';
	protected $primaryKey = 'DOC_ID';
	public $timestamps = false;

	protected $casts = [
		'DOC_ID_TIPO' => 'int',
		'DOC_ID_PROCESO' => 'int'
	];

	protected $fillable = [
		'DOC_NOMBRE',
		'DOC_CODIGO',
		'DOC_CONTENIDO',
		'DOC_ID_TIPO',
		'DOC_ID_PROCESO'
	];

	public function tipo_tipo_doc()
	{
		return $this->belongsTo(TipoTipoDoc::class, 'DOC_ID_TIPO');
	}

	public function pro_proceso()
	{
		return $this->belongsTo(ProProceso::class, 'DOC_ID_PROCESO');
	}
}

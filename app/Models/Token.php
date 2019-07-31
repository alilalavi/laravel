<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Token
 * 
 * @property int $id
 * @property int $person_id
 * @property string $token
 * @property string $user_agent
 * @property array $input_data
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Person $person
 *
 * @package App\Models
 */
class Token extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'person_id' => 'int',
		'input_data' => 'json'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'person_id',
		'token',
		'user_agent',
		'input_data'
	];

	public function person()
	{
		return $this->belongsTo(\App\Models\Person::class);
	}
}

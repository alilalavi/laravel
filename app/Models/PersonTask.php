<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PersonTask
 * 
 * @property int $id
 * @property int $person_id
 * @property int $task_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Person $person
 * @property \App\Models\Task $task
 *
 * @package App\Models
 */
class PersonTask extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'person_task';

	protected $casts = [
		'person_id' => 'int',
		'task_id' => 'int'
	];

	protected $fillable = [
		'person_id',
		'task_id'
	];

	public function person()
	{
		return $this->belongsTo(\App\Models\Person::class);
	}

	public function task()
	{
		return $this->belongsTo(\App\Models\Task::class);
	}
}

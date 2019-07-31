<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $creator_id
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
class Project extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'creator_id' => 'int',
		'task_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'creator_id',
		'task_id'
	];

	public function person()
	{
		return $this->belongsTo(\App\Models\Person::class, 'creator_id');
	}

	public function task()
	{
		return $this->belongsTo(\App\Models\Task::class);
	}
}

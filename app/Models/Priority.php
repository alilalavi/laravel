<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Priority
 * 
 * @property int $id
 * @property string $caption
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tasks
 *
 * @package App\Models
 */
class Priority extends Eloquent
{
	protected $table = 'priority';

	protected $fillable = [
		'caption'
	];

	public function tasks()
	{
		return $this->hasMany(\App\Models\Task::class);
	}
}

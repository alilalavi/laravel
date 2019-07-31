<?php /** @noinspection ALL */

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Task
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $status_id
 * @property int $person_id
 * @property int $priority_id
 * @property Carbon $start_time
 * @property Carbon $deadline
 * @property Carbon $reject
 * @property Carbon $done
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Person $person
 * @property Priority $priority
 * @property Status $status
 * @property Collection $people
 * @property Collection $projects
 *
 * @package App\Models
 */
class Task extends Eloquent
{
	use SoftDeletes;

	protected $casts = [
		'status_id' => 'int',
		'person_id' => 'int',
		'priority_id' => 'int'
	];

	protected $dates = [
		'start_time',
		'deadline',
		'reject',
		'done'
	];

	protected $fillable = [
		'title',
		'description',
		'status_id',
		'person_id',
		'priority_id',
		'start_time',
		'deadline',
		'reject',
		'done'
	];

	public function person()
	{
		return $this->belongsTo(Person::class);
	}

	public function priority()
	{
		return $this->belongsTo(Priority::class);
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}

	public function people()
	{
		return $this->belongsToMany(Person::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function projects()
	{
		return $this->hasMany(Project::class);
	}
}

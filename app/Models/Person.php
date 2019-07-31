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
 * Class Person
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property Carbon $date_birth
 * @property Carbon $last_activity
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection $tasks
 * @property Collection $projects
 * @property Collection $tokens
 *
 * @package App\Models
 */
class Person extends Eloquent
{
	use SoftDeletes;
	protected $table = 'person';

	protected $dates = [
		'date_birth',
		'last_activity'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'gender',
		'date_birth',
		'last_activity'
	];

	public function tasks()
	{
		return $this->belongsToMany(Task::class);
	}

	public function projects()
	{
		return $this->hasMany(Project::class, 'creator_id');
	}

	public function tokens()
	{
		return $this->hasMany(Token::class);
	}
}

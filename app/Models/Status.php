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
 * Class Status
 * 
 * @property int $id
 * @property string $caption
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection $tasks
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	use SoftDeletes;
	protected $table = 'status';

	protected $fillable = [
		'caption'
	];

	public function tasks()
	{
		return $this->hasMany(Task::class);
	}
}

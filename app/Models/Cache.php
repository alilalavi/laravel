<?php /** @noinspection ALL */

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Carbon\Carbon;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cache
 * 
 * @property int $id
 * @property string $key
 * @property string $value
 * @property int $expiration
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Cache extends Eloquent
{
	protected $table = 'cache';

	protected $casts = [
		'expiration' => 'int'
	];

	protected $fillable = [
		'key',
		'value',
		'expiration'
	];
}

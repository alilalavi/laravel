<?php /** @noinspection ALL */

/**
 * Created by Reliese Model.
 * Date: Tue, 30 Jul 2019 22:56:03 +0000.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProorgProkaMap
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class ProorgProkaMap extends Eloquent
{
	use SoftDeletes;
	protected $table = 'proorg_proka_map';
}

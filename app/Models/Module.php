<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Module
 * 
 * @property int $id
 * @property string|null $name
 * @property int|null $order
 * @property bool $current
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Module extends Model
{
	use SoftDeletes;
	protected $table = 'modules';

	protected $casts = [
		'order' => 'int',
		'current' => 'bool'
	];

	protected $fillable = [
		'name',
		'order',
		'current'
	];
}

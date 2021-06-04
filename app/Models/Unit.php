<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unit
 * 
 * @property int $id
 * @property string|null $name
 * @property int|null $order
 * @property int $module_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property Collection|Answer[] $answers
 * @property Collection|Lesson[] $lessons
 * @property Collection|Question[] $questions
 *
 * @package App\Models
 */
class Unit extends Model
{
	use SoftDeletes;
	protected $table = 'units';

	protected $casts = [
		'order' => 'int',
		'module_id' => 'int'
	];

	protected $fillable = [
		'name',
		'order',
		'module_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'module_id');
	}

	public function answers()
	{
		return $this->hasMany(Answer::class);
	}

	public function lessons()
	{
		return $this->hasMany(Lesson::class);
	}

	public function questions()
	{
		return $this->hasMany(Question::class);
	}
}

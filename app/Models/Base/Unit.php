<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\User;
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
 * @package App\Models\Base
 */
class Unit extends Model
{
	use SoftDeletes;
	protected $table = 'units';

	protected $casts = [
		'order' => 'int',
		'module_id' => 'int'
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

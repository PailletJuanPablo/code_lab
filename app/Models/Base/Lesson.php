<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lesson
 * 
 * @property int $id
 * @property string|null $name
 * @property int|null $order
 * @property int $unit_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Unit $unit
 * @property Collection|Answer[] $answers
 * @property Collection|Question[] $questions
 *
 * @package App\Models\Base
 */
class Lesson extends Model
{
	use SoftDeletes;
	protected $table = 'lessons';

	protected $casts = [
		'order' => 'int',
		'unit_id' => 'int'
	];

	public function unit()
	{
		return $this->belongsTo(Unit::class);
	}

	public function answers()
	{
		return $this->hasMany(Answer::class);
	}

	public function questions()
	{
		return $this->hasMany(Question::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Lesson;
use App\Models\Question;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Answer
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $css_code
 * @property string|null $html_code
 * @property string|null $js_code
 * @property bool $resolved
 * @property int $lesson_id
 * @property int $unit_id
 * @property int $user_id
 * @property int $question_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Lesson $lesson
 * @property Question $question
 * @property Unit $unit
 * @property User $user
 *
 * @package App\Models\Base
 */
class Answer extends Model
{
	use SoftDeletes;
	protected $table = 'answers';

	protected $casts = [
		'resolved' => 'bool',
		'lesson_id' => 'int',
		'unit_id' => 'int',
		'user_id' => 'int',
		'question_id' => 'int'
	];

	public function lesson()
	{
		return $this->belongsTo(Lesson::class);
	}

	public function question()
	{
		return $this->belongsTo(Question::class);
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

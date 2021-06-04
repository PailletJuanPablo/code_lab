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
 * Class Question
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Lesson $lesson
 * @property Unit $unit
 * @property User $user
 * @property Collection|Answer[] $answers
 *
 * @package App\Models
 */
class Question extends Model
{
	use SoftDeletes;
	protected $table = 'questions';

	protected $casts = [
		'resolved' => 'bool',
		'lesson_id' => 'int',
		'unit_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'css_code',
		'html_code',
		'js_code',
		'resolved',
		'lesson_id',
		'unit_id',
		'user_id'
	];

	public function lesson()
	{
		return $this->belongsTo(Lesson::class);
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function answers()
	{
		return $this->hasMany(Answer::class);
	}
}

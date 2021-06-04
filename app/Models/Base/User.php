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
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Answer[] $answers
 * @property Collection|Question[] $questions
 * @property Collection|Unit[] $units
 *
 * @package App\Models\Base
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	public function answers()
	{
		return $this->hasMany(Answer::class);
	}

	public function questions()
	{
		return $this->hasMany(Question::class);
	}

	public function units()
	{
		return $this->hasMany(Unit::class, 'module_id');
	}
}

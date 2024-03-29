<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @method static create(array $array)
 * @method static inRandomOrder()
 * @property int $id
 * @property ScheduleTime $scheduleTimes
 */
class Rest extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'rest';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * @return MorphMany
     */
    public function scheduleTimes(): MorphMany
    {
        return $this->morphMany(ScheduleTime::class, 'scheduleable');
    }
}

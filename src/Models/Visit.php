<?php

namespace Coderflex\Laravisit\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Coderflex\Laravisit\Models\Visit
 * @property int $id
 * @property array $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Visit extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "laravisits";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'json',
    ];

    public function visitable()
    {
        return $this->morphTo();
    }
}

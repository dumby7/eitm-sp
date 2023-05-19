<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'test_results';

    /**
     * Table columns
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'correct_answers', 'submitted',
    ];

    /**
     * Foreign key to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Acacha\Stateful\Traits\StatefulTrait;
use Acacha\Stateful\Contracts\Stateful;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model implements Stateful
{
    use StatefulTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state'
    ];

    /**
     * Enrollment States
     *
     * @var array
     */
    protected $states = [
        'step1' => ['initial' => true],
        'step2' => ['final' => true]
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function person()
    {
        return $this->hasOne('App\Person');
    }

    /**
     * Enrollment State Transitions
     *
     * @var array
     */
    protected $transitions = [
        'step1step2' => [
            'from' => 'step1',
            'to' => 'step2'
        ],
        'step2step1' => [
            'from' => 'step2',
            'to' => 'step1'
        ]
    ];

    /**
     * @return bool
     */
    protected function validateStep1step2()
    {
        if($this->user_id != null){
            return true;
        }
        return false;
    }
}

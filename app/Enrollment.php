<?php

namespace App;

use Acacha\Stateful\Contracts\Stateful;
use Acacha\Stateful\Traits\StatefulTrait;
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
     * @return mixed
     */
    public function user()
    {
        return $this->hashOne('App\User');
    }

    /**
     * @return mixed
     */
    public function person()
    {
        return $this->hashOne('App\Person');
    }

    /**
     * Transaction States
     *
     * @var array
     */
    protected $states = [
        'setp1' => ['inital' => true],
        'setp2' => ['final' => true]
    ];

    /**
     * Transaction State Transitions
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
        ],
    ];

    /**
     * Validate + step1step2
     * @return bool
     */
    protected function validateStep1step2()
    {
        if ($this->user_id != null) return true;
        return false;
    }

    /**
     * Validate + step2step1
     * @return bool
     */
    protected function validateStep2step1()
    {
        return false;
    }
}

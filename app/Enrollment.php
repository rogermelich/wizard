<?php

namespace App;

use Acacha\Stateful\Contracts\Stateful;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model implements Stateful
{
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
}

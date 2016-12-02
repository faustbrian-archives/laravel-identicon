<?php

namespace BrianFaust\Identicon;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use function BrianFaust\Identicon\identicon;

trait HasIdenticon
{
    /** @var array */
    public $identicon = [
        'from' => 'email',
        'to' => 'avatar'
    ];

    public static function bootHasIdenticon()
    {
        static::created(function($model){
            $identicon = identicon($model->{$model->identicon['from']});

            $model->{$model->identicon['to']} = $identicon;

            $model->save();
        });
    }
}

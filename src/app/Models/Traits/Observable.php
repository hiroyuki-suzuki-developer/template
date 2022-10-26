<?php
namespace App\Models\Traits;

use App\Observers\AuthorObserver;

trait Observable
{
    public static function bootAuthorObservable()
    {
        self::observe(AuthorObserver::class);
    }
}
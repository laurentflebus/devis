<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

// Dire à Laravel que la classe est identifiable (Authenticatable)
class Authentification extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['login', 'password'];

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }
}

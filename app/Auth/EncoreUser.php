<?php

namespace App\Auth;

use Illuminate\Contracts\Auth\Authenticatable;

class EncoreUser implements Authenticatable
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['id'];
    }

    public function getAuthPassword()
    {
        return null; // Not used
    }

    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value)
    {
        //
    }

    // Only add if you're getting IDE errors, not Laravel errors
    public function getAuthPasswordName()
    {
        return null;
    }

    public function getRememberTokenName()
    {
        return null;
    }

    // Optional: magic getter for convenience
    public function __get($key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function toArray()
    {
        return $this->attributes;
    }


    // ✅ These make it serializable for session storage
    public function serialize()
    {
        return serialize($this->attributes);
    }

    public function unserialize($data)
    {
        $this->attributes = unserialize($data);
    }
}

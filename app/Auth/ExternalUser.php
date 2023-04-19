<?php

namespace App\Auth;

use App\Models\User;
use Hash;
use Log;
use Str;

class ExternalUser
{
    private array $attributes = [];
    private User $user;

    public function __get($name): mixed {
            return $this->properties[$name] ?? null;
    }

    public function __set($name, $value): void {
            $this->properties[$name] = $value;
    }

    public function addAttributeValue($name, $value) {
            if(!isset($this->attributes[$name])) {
                $this->attributes[$name] = [];
            }
            $this->attributes[$name][] = $value;
    }

    public function getAttributes() {
            return $this->attributes;
    }

    public function getFirstAttributeValue($name) {
            return $this->attributes[$name][0] ?? null;
    }

    public function saveEloquentModel(): User
    {
        $this->user()->save();
        return $this->user();
    }

    public function user(): User
    {
        return $this->user;
    }


    public function createOrFindEloquentModel(): User
    {
        $this->user = User::firstOrNew(
            [
                'authenticator' => 'external',
                'external_id' => $this->getFirstAttributeValue('external_id')
            ],
            [
                'password' => Hash::make(Str::random()),
                'locale' => config('app.locale'),
                'timezone' => setting('default_timezone')
            ]
        );
        return $this->user;
    }

    public function validate(){
        if($this->getFirstAttributeValue('external_id') == null){
            Log::error("External-ID attribute missing", ['attributes' => $this->getAttributes()]);
            return false;
        }

        if($this->getFirstAttributeValue('first_name') == null){
            Log::error("First name attribute missing", ['attributes' => $this->getAttributes()]);
            return false;
        }

        if($this->getFirstAttributeValue('last_name') == null){
            Log::error("Last name attribute missing", ['attributes' => $this->getAttributes()]);
            return false;
        }

        if($this->getFirstAttributeValue('email') == null){
            Log::error("Email attribute missing", ['attributes' => $this->getAttributes()]);
            return false;
        }

        return true;
    }

    public function syncWithEloquentModel(): User
    {
        $this->user->firstname = $this->getFirstAttributeValue('first_name');
        $this->user->lastname = $this->getFirstAttributeValue('last_name');
        $this->user->email = $this->getFirstAttributeValue('email');

        return $this->user;
    }
}
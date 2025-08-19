<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Account extends Authenticatable
{
    protected $connection = 'legacy';
    protected $table = 'accounts';
    public $timestamps = false;


    public function getAuthIdentifierName()
    {
        return 'email'; // or 'username' depending on your DB
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function investments()
    {
        return $this->hasMany(Investments::class, 'account_id');
    }

    public function type()
    {
        return $this->belongsTo(AccountType::class, 'type_id');
    }


    public function getNameAttribute(): string
    {
        if ($this->person) {
            return $this->person->first_name . ' ' . $this->person->last_name;
        } elseif ($this->company) {
            return $this->company->name;
        }

        return 'Unknown';
    }

    public function getTypeNameAttribute()
    {
        return $this->type->name ?? '—';
    }

    public function getTypeIconAttribute(): string
    {
        if ($this->person) {
            return '<span title="Individual" class="text-blue-500">👤</span>';
        } elseif ($this->company) {
            return '<span title="Company" class="text-green-500">🏢</span>';
        }

        return '<span title="Unknown" class="text-gray-500">❓</span>';
    }
}

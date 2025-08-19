<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $connection = 'legacy'; // if needed
    protected $table = 'account_types'; // adjust if necessary
    public $timestamps = false;
}

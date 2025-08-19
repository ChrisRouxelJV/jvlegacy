<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investments extends Model
{
    protected $connection = 'legacy'; // use the legacy DB
    protected $table = 'Project_investments';

    public $timestamps = false; // assuming no created_at/updated_at

    protected $fillable = [
        'id', 'project_id', 'account_id', 'transfer_id', 'pay_in_id',
        'amount', 'type', 'paid', 'paid_on', 'reserved_until',
    ];

    // Optional: enforce read-only access
    protected static function booted()
    {
        static::saving(fn () => false);
        static::creating(fn () => false);
        static::updating(fn () => false);
        static::deleting(fn () => false);
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }

    public function getTypeLabelAttribute(): string
    {
        return match ($this->type) {
            1 => 'Mezzanine',
            2 => 'Debt',
            default => 'Unknown',
        };
    }
}

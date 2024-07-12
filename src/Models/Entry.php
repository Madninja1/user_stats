<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $table;

    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
        $this->table = config('es_stats.db_prefix') . config('es_stats.entries_table');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
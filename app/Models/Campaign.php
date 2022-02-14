<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_tag',
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'target_amount',
        'minimum_amount',
        'sort_order',
        'icon_tag',
        'tip',
        'issue_tax_receipt',
    ];
}

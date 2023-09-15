<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'organization_type',
        'address',
        'foundation_year',
        'website_url',
        'instagram_link',
        'facebook_link',
        'annual_budget',
        'centers_count',
        'centers_address',
        'employees_count',
        'mi_registeration_number',
        'mf_registeration_number',
        'current_projects_count',
        'main_donors',
        'total_employess_count',
        'beneficiaries_nationalities',
        'beneficiaries_age',
        'main_objectives',
        'registeration_certification',
        'organization_structure',
        'read_status'
    ];

    public function getIsReadAttribute()
    {
        if ($this->read_status) {
            return '<div class="badge badge-light-success" style="font-size:1.15rem">' . trans("general.read") . '</div>';
        } else {
            return '<div class="badge badge-light-primary" style="font-size:1.15rem">' . trans("general.not_read") . '</div>';
        }
    }
}

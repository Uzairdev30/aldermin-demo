<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SettingCountryTable extends Model
{
    use HasFactory;

    protected $table = 'setting_countries';

    protected $fillable = ['country_name', 'code', 'status'];
}

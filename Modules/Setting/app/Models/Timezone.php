<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Timezone extends Model
{
    use HasFactory;

    protected $table = 'setting_timezones';
    protected $fillable = ['name', 'offset', 'diff_from_gtm'];
}

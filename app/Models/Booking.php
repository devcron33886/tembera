<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'bookings';

    public const STATUS_SELECT = [
        '0' => 'Pending',
        '1' => 'Confirmed',
        '2' => 'Cancelled',
    ];

    protected $dates = [
        'check_in_date',
        'check_out_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'package_id',
        'check_in_date',
        'check_out_date',
        'message',
        'status',
        'email',
        'mobile',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function getCheckInDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format').' '.config('panel.time_format')) : null;
    }

    public function setCheckInDateAttribute($value)
    {
        $this->attributes['check_in_date'] = $value ? Carbon::createFromFormat(config('panel.date_format').' '.config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getCheckOutDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCheckOutDateAttribute($value)
    {
        $this->attributes['check_out_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}

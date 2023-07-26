<?php

namespace App\Models;

use App\Notifications\BookingNotification;
use App\Notifications\BookingStatusChangeNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Notification;

class Booking extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'bookings';

    public const STATUS_SELECT = [
        'Pending' => 'Pending',
        'Confirmed' => 'Confirmed',
        'Cancelled' => 'Cancelled',
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
        'number_of_people',
        'message',
        'status',
        'email',
        'mobile',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public static function boot()
    {
        parent::boot();
        static::created(function ($booking) {
            Notification::route('mail', $booking->email)->notify(new BookingNotification($booking->status));
        });
    }

    public static function booting()
    {

        self::updated(function (Booking $booking) {
            if ($booking->isDirty('status') && in_array($booking->status, ['Confirmed', 'Cancelled'])) {
                Notification::route('mail', $booking->email)->notify(new BookingStatusChangeNotification($booking->status));
            }
        });

    }
}

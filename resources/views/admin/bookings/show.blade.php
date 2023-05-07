@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.booking.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.id') }}
                        </th>
                        <td>
                            {{ $booking->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.name') }}
                        </th>
                        <td>
                            {{ $booking->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.package') }}
                        </th>
                        <td>
                            {{ $booking->package->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.check_in_date') }}
                        </th>
                        <td>
                            {{ $booking->check_in_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.check_out_date') }}
                        </th>
                        <td>
                            {{ $booking->check_out_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.message') }}
                        </th>
                        <td>
                            {{ $booking->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Booking::STATUS_SELECT[$booking->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.email') }}
                        </th>
                        <td>
                            {{ $booking->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.mobile') }}
                        </th>
                        <td>
                            {{ $booking->mobile }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
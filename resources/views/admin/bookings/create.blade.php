@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bookings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.booking.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="package_id">{{ trans('cruds.booking.fields.package') }}</label>
                <select class="form-control select2 {{ $errors->has('package') ? 'is-invalid' : '' }}" name="package_id" id="package_id" required>
                    @foreach($packages as $id => $entry)
                        <option value="{{ $id }}" {{ old('package_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('package'))
                    <span class="text-danger">{{ $errors->first('package') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.package_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="check_in_date">{{ trans('cruds.booking.fields.check_in_date') }}</label>
                <input class="form-control datetime {{ $errors->has('check_in_date') ? 'is-invalid' : '' }}" type="text" name="check_in_date" id="check_in_date" value="{{ old('check_in_date') }}" required>
                @if($errors->has('check_in_date'))
                    <span class="text-danger">{{ $errors->first('check_in_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.check_in_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="check_out_date">{{ trans('cruds.booking.fields.check_out_date') }}</label>
                <input class="form-control date {{ $errors->has('check_out_date') ? 'is-invalid' : '' }}" type="text" name="check_out_date" id="check_out_date" value="{{ old('check_out_date') }}">
                @if($errors->has('check_out_date'))
                    <span class="text-danger">{{ $errors->first('check_out_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.check_out_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="message">{{ trans('cruds.booking.fields.message') }}</label>
                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message">{{ old('message') }}</textarea>
                @if($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.message_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.booking.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Booking::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.booking.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile">{{ trans('cruds.booking.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', '') }}">
                @if($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
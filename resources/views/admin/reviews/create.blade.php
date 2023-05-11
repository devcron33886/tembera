@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.review.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.reviews.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="service_id">{{ trans('cruds.review.fields.service') }}</label>
                <select class="form-control select2 {{ $errors->has('service') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                    @foreach($services as $id => $entry)
                        <option value="{{ $id }}" {{ old('service_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <span class="text-danger">{{ $errors->first('service') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.service_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="star_rate">{{ trans('cruds.review.fields.star_rate') }}</label>
                <input class="form-control {{ $errors->has('star_rate') ? 'is-invalid' : '' }}" type="text" name="star_rate" id="star_rate" value="{{ old('star_rate', '') }}">
                @if($errors->has('star_rate'))
                    <span class="text-danger">{{ $errors->first('star_rate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.star_rate_helper') }}</span>
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
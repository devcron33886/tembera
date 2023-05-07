@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.testimonial.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.testimonials.update", [$testimonial->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.testimonial.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $testimonial->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title">{{ trans('cruds.testimonial.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $testimonial->title) }}">
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="message">{{ trans('cruds.testimonial.fields.message') }}</label>
                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message" required>{{ old('message', $testimonial->message) }}</textarea>
                @if($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.message_helper') }}</span>
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
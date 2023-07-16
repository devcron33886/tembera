@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.package.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.packages.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.package.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title"
                           id="title" value="{{ old('title', '') }}" required>
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.package.fields.title_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="body">{{ trans('cruds.package.fields.body') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body"
                              id="body">{!! old('body') !!}</textarea>
                    @if($errors->has('body'))
                        <span class="text-danger">{{ $errors->first('body') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.package.fields.body_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="price">{{ trans('cruds.package.fields.price') }}</label>
                    <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number"
                           name="price" id="price" value="{{ old('price', '') }}" step="1" required>
                    @if($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.package.fields.price_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="unit_price">{{ trans('cruds.package.fields.unit_price') }}</label>
                    <input class="form-control {{ $errors->has('unit_price') ? 'is-invalid' : '' }}" type="text"
                           name="unit_price" id="unit_price" value="{{ old('unit_price', '') }}" required>
                    @if($errors->has('unit_price'))
                        <span class="text-danger">{{ $errors->first('unit_price') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.package.fields.unit_price_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.package.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status"
                            id="status">
                        <option value
                                disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\Package::STATUS_SELECT as $key => $label)
                            <option
                                value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.package.fields.status_helper') }}</span>
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


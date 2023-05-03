@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.setting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <td>
                            {{ $setting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.title') }}
                        </th>
                        <td>
                            {{ $setting->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.description') }}
                        </th>
                        <td>
                            {!! $setting->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.email') }}
                        </th>
                        <td>
                            {{ $setting->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.mobile') }}
                        </th>
                        <td>
                            {{ $setting->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.phone') }}
                        </th>
                        <td>
                            {{ $setting->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.instagram') }}
                        </th>
                        <td>
                            {{ $setting->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.facebook') }}
                        </th>
                        <td>
                            {{ $setting->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.twitter') }}
                        </th>
                        <td>
                            {{ $setting->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $setting->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.google') }}
                        </th>
                        <td>
                            {{ $setting->google }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.address') }}
                        </th>
                        <td>
                            {{ $setting->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.featured_image') }}
                        </th>
                        <td>
                            @if($setting->featured_image)
                                <a href="{{ $setting->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $setting->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
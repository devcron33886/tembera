@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.package.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.packages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.id') }}
                        </th>
                        <td>
                            {{ $package->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.title') }}
                        </th>
                        <td>
                            {{ $package->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.featured_image') }}
                        </th>
                        <td>
                            @if($package->featured_image)
                                <a href="{{ $package->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $package->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.body') }}
                        </th>
                        <td>
                            {!! $package->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.price') }}
                        </th>
                        <td>
                            {{ $package->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.unit_price') }}
                        </th>
                        <td>
                            {{ $package->unit_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Package::STATUS_SELECT[$package->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.packages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
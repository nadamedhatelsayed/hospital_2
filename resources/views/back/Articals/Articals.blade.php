@extends('back.layouts.master')
@section('css')
    @toastr_css
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Articals</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/Admin</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                           data-toggle="modal" href="#modaldemo8">{{ trans('Articals.add_artical') }}</a>
                    </div>
                    @include('back.Articals.create')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @foreach ($articals as $artical)
                        <table id="example1" class="table key-buttons text-md-nowrap"
                               style="background-color: #eff1f1">


{{--                                <tr>--}}
{{--                                    <th class="border-bottom-0">#</th>--}}
{{--                                    <td>{{ $artical->id }}</td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <th class="border-bottom-0"> {{ trans('Articals.title') }}</th>
                                    <td>{{ $artical->title }}</td>
                                </tr>
                                <tr>
                                    <th class="border-bottom-0">{{ trans('Articals.image') }}</th>
                                    <td>
                                        <img
                                            src="{{asset('images_admin/'.$artical->image)}}"
                                            style="margin-top: 10px; width: 130px; height: 100px; border-radius: 2px "
                                            alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-bottom-0">{{ trans('Articals.description') }}</th>
                                    <td>{{ $artical->description }}</td>
                                </tr>

                                <tr>

                                    <th class="border-bottom-0">{{ trans('Articals.options') }}</th>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $artical->id }}"
                                                title="{{ trans('Articals.Edit') }}"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $artical->id }}"
                                                title="{{ trans('Articals.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                @include('back.Articals.edit')
                                @include('back.Articals.delete')

                        </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->

    <!-- main-content closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>
@endsection

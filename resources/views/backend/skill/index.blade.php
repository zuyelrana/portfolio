@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('/') }}backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"
    rel="stylesheet">

@endpush

@extends('backend.master')
@section('skill') active @endsection
@section('title') Services @endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <ol class="breadcrumb breadcrumb-col-pink ">
            <li><a href="{{ route('skill.index') }}"> <i class="material-icons">live_help</i>Skill</a></li>
        </ol>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2">
                <div class="card">
                    <div class="header">
                        <h3>Skill Control <span><a class="btn bg-success btn-success waves-float" data-toggle="modal"
                                    data-target="#addSkill">
                                    Add
                                </a></span></h3>
                    </div>
                    <div class="body">
                        <div class="table col-lg-offset-2 table-responsive text-center">
                            <table
                                class="table-bordered table-striped table-hover @if(count($skills)>0) dataTable js-exportable @endif">

                                @if (count($skills)>0)
                                <thead>
                                    <tr class="text-uppercase">
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach ($skills as $item)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->skill_name }}</td>
                                        <td>{{ $item->value }}</td>
                                        <td>
                                            @if ($item->status==1)
                                            <h4><span class="label label-success">Active</span></h4>
                                            @else
                                            <h4><span class="label label-danger">Inactive</span></h4>
                                            @endif
                                        </td>
                                        <td>
                                            {{--  <a href="{{ route('category.edit',['id'=>$category->id]) }}" --}}
                                            @if ($item->status==1)
                                            <a href="{{ route('skill.unpublished',['id'=>$item->id]) }}"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="unpublished" data-toggle="tooltip" data-placement="top"
                                                title="Unpublished" data-original-title="Unpublished">
                                                <i class="material-icons">arrow_downward</i>
                                            </a>
                                            @else
                                            <a href="{{ route('skill.published',['id'=>$item->id]) }}"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float waves-light"
                                                id="published" data-toggle="tooltip" data-placement="top"
                                                title="Published" data-original-title="Published">
                                                <i class="material-icons">publish</i>
                                            </a>
                                            @endif
                                            <a class="btn bg-success btn-info btn-circle waves-effect waves-circle waves-float"
                                                data-toggle="modal" data-target="#editSkill" data-id="{{ $item->id }}"
                                                data-skill_name="{{ $item->skill_name }}" data-value="{{ $item->value }}">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <span class=" text-danger"> No data found </span>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
@include('backend.skill.create')
@include('backend.skill.edit')
@endsection
@push('js')

{{--  Update Skill  --}}
<script>
    $('#editSkill').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var id = button.data('id')
   var skill_name = button.data('skill_name')
   var value = button.data('value')
   var description = button.data('description')
   var modal = $(this)

   modal.find('.modal-body #skill_name').val(skill_name)
   modal.find('.modal-body #value').val(value)
   modal.find('.modal-body #id').val(id)
  })
</script>
@endpush

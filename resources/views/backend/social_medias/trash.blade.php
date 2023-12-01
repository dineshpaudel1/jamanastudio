@extends('layouts.master')
@section('title','Trash ' . $panel)
@section('section')
    <!-- Content Header (Page header) -->
    @include('sweetalert::alert')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-body">
            <h2 class="text-center my-2">Show Trash {{$panel}}</h2>
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <td>{{$data['record']->id}}</td>
                    </tr>
                    <tr>
                        <th>Twitter</th>
                        <td>{{$data['record']->twitter}}</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>{{$data['record']->facebook}}</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>{{$data['record']->instagram}}</td>
                    </tr>
                    <tr>
                        <th>Linked In</th>
                        <td>{{$data['record']->linked_in}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>@include('backend.includes.display_status',['status'=>$data['record']->status])</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{$data['record']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['record']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{$data['record']->createdBy->name}}</td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        @if($data['record']->updated_by !=null)
                            <td>{{$data['record']->updatedBy->name}}</td>
                        @else
                            <td class="text-info">Not Updated Yet</td>
                        @endif
                    </tr>
                    <tr>
                        <th>
                            <form action="{{route($base_route.'permanentDelete',$data['record']->id)}}" method="post"
                                  class="delete-form">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </th>
                    </tr>
                    <tr>
                        <th><a href="{{route($base_route.'restore',$data['record']->id)}}"
                               class="btn btn-warning"><i class="fas fa-undo"></i></a></th>
                    </tr>
                </table>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        @include('backend.includes.sweetalert_trash')
    </script>
@endsection


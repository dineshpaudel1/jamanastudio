@extends('layouts.master')
@section('title','List ' . $panel)
@section('section')
    <!-- Content Header (Page header) -->
    @include('sweetalert::alert')
    <!-- Main content -->
    <section class="content w-100">
        <!-- Default box -->
        <div class="card w-100">
            <div class="card-body">
            <h2 class="text-center my-2">List {{$panel}}</h2>
                <a href="{{route($base_view.'create')}}" class="btn btn-primary mb-1">Create {{$panel}}</a>
                <a href="{{route($base_view.'trash')}}" class="btn btn-danger mb-1">Trash List {{$panel}}</a>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Position</th>
                            <th>Rank</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data['records'] as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ucfirst($data->name)}}</td>
                                <td>{!! $data->description !!}</td>
                                <td>{{$data->position}}</td>
                                <td>{{$data->rank}}</td>
                                <td>
                                    <img src="{{asset('images/teams/'.$data->image)}}" alt="{{$data->name}}" width="100px" height="100px">
                                </td>
                                <td>
                                    @include('backend.includes.display_status',['status' => $data->status])
                                </td>
                                <td class="d-flex">
                                    <a href="{{route($base_route.'edit',$data->id)}}" class="btn btn-warning mx-1"><i class="fas fa-edit"></i></a>
                                    <a href="{{route($base_route.'show',$data->id)}}" class="btn btn-secondary mr-1"><i class="fas fa-eye"></i></a>
                                    <form action="{{route($base_route.'destroy',$data->id)}}" method="post" class="delete-form">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-danger">No Data Found</tr>
                        @endforelse
                    </tbody>
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
        $('#myTable').DataTable();
        @include('backend.includes.sweetalert')
    </script>
@endsection
@section('css')
    <style>
        .dataTables_filter {
            float: right;
            text-align: right;
        }

        /* Adjust the margin for better spacing */
        .dataTables_filter label {
            margin-right: 10px; /* Adjust the value as needed */
        }

        /* If you want to align the search input and button horizontally */
        .dataTables_filter input[type="search"] {
            display: inline-block;
            width: auto; /* Adjust the width as needed */
        }
    </style>
    @endsection


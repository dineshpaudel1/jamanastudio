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
                <table class="table table-bordered" id="myTable">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Rank</th>
                        <th>Short Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    @forelse($data['records'] as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ucfirst($data->title)}}</td>
                            <td>{{$data->rank}}</td>
                            <td>{!! $data->description !!}</td>
                            <td>
                                <img src="{{asset('images/portfolio_images/'.$data->image)}}" alt="{{$data->name}}" width="100px" height="100px">
                            </td>
                            <td>
                                @include('backend.includes.display_status',['status' => $data->status])
                            </td>
                            <td class="d-flex">
                                <a href="{{route($base_route.'restore',$data->id)}}" class="btn btn-secondary mr-1"><i class="fas fa-undo"></i></a>
                                <form action="{{route($base_route.'permanentDelete',$data->id)}}" method="post" class="delete-form">
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
        let table = new DataTable('#myTable');
        @include('backend.includes.sweetalert_trash')
    </script>
@endsection


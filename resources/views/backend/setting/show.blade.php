@extends('layouts.master')
@section('title','Show ' . $panel)
@section('section')
    <!-- Content Header (Page header) -->
    @include('sweetalert::alert')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-body">
            <h2 class="text-center my-2">Show {{$panel}}</h2>
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <td>{{$data['record']->id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['record']->name}}</td>
                    </tr>
                    <tr>
                        <th>Slogan</th>
                        <td>{{$data['record']->slogan}}</td>
                    </tr>
                    <tr>
                        <th>About Website</th>
                        <td>{{$data['record']->about_website}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$data['record']->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$data['record']->phone}}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{$data['record']->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$data['record']->address}}</td>
                    </tr>
                    <tr>
                        <th>Meta Title</th>
                        <td>{!! $data['record']->meta_title !!}</td>
                    </tr>
                    <tr>
                        <th>Meta Description</th>
                        <td>{!! $data['record']->meta_description !!}</td>
                    </tr>
                    <tr>
                        <th>Meta Keyword</th>
                        <td>{!! $data['record']->meta_keyword !!}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>@include('backend.includes.display_status',['status'=>$data['record']->status])</td>
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
                        <th>Created At</th>
                        <td>{{$data['record']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['record']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            @if($data['record']->image!=null)
                            <img src="{{asset('images/settings/'.$data['record']->image)}}" alt="{{$data['record']->name}}" width="100px" height="100px">
                            @else
                            <td class="text-danger">No Logo Footer</td>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Logo Header</th>
                        <td>
                        <img src="{{asset('images/settings/'.$data['record']->logo_header)}}" alt="{{$data['record']->name}}" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>Logo Footer</th>
                        <td>
                            @if($data['record']->logo_footer!=null)
                               <img src="{{asset('images/settings/'.$data['record']->logo_footer)}}" alt="{{$data['record']->name}}" width="100px" height="100px">
                            @else
                               <td class="text-danger">No Logo Footer</td>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Fav Icon</th>
                        <td>
                            @if($data['record']->fav_icon!=null)
                               <img src="{{asset('images/settings/'.$data['record']->fav_icon)}}" alt="{{$data['record']->name}}" width="100px" height="100px">
                            @else
                               <td class="text-danger">No Fav Icon</td>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Hero Image</th>
                        <td>
                        <img src="{{asset('images/settings/'.$data['record']->hero_image)}}" alt="{{$data['record']->name}}" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <form action="{{route($base_route.'destroy',$data['record']->id)}}" method="post"
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
                        <th><a href="{{route($base_route.'edit',$data['record']->id)}}"
                               class="btn btn-warning"><i class="fas fa-edit"></i></a></th>
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
        @include('backend.includes.sweetalert')
    </script>
@endsection


@extends('layouts.master')
@section('title','Update ' . $panel)
@section('section')
    <!-- Content Header (Page header) -->
    @include('sweetalert::alert')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-body">
            <h2 class="text-center my-2">Update {{$panel}}</h2>
            <a href="{{route($base_route.'index')}}" class="btn btn-info my-2">List {{$panel}}</a>
                {!! Form::model($data['record'],['route'=>[$base_route.'update',$data['record']->id],'method'=>'put','files'=>true]) !!}
                @include($base_view.'includes.__form')
                    <div class="form-group">
                        <input type="submit" name="save" value="Update {{$panel}} " class="btn btn-success"/>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            CKEDITOR.replace('description');
        });
    </script>
@endsection

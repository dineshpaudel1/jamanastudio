@extends('layouts.master')
@section('title','Update ' . $panel)
@section('section')
    <!-- Content Header (Page header) -->
    @include('sweetalert::alert')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <a href="{{route($base_route.'create')}}" class="btn btn-info">List {{$panel}}</a>
        <div class="card">
            <div class="card-body">
            <h2 class="text-center my-2">Update {{$panel}}</h2>
                {!! Form::model($data['record'],['route'=>[$base_route.'update',$data['record']->id],'method'=>'put']) !!}
                @include('backend.social_medias.includes.__form')
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
@endsection

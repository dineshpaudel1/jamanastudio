@extends('layouts.master')
@section('title','Create ' . $panel)
@section('section')
    <!-- Content Header (Page header) -->
    @include('sweetalert::alert')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-body">
            <h2 class="text-center my-2">Create {{$panel}}</h2>
            <a href="{{route($base_route.'trash')}}" class="btn btn-danger">List Trash {{$panel}}</a>
                <form action="{{route($base_route . 'store')}}" method="post" id="post_form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Enter name"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'name'])
                    </div>
                    <div class="form-group">
                        <label for="slogan">Slogan</label>
                        <input type="text" name="slogan" value="{{old('slogan')}}" placeholder="Enter slogan"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'slogan'])
                    </div>
                    <div class="form-group">
                        <label for="about_website">About Website</label>
                        <input type="text" name="about_website" value="{{old('about_website')}}"
                               placeholder="Enter about_website" class="form-control">
                        @include('backend.includes.field_validation',['input' => 'about_website'])
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image_file"placeholder="Enter image"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'image_file'])
                    </div>
                    <div class="form-group">
                        <label for="logo_header">Logo Header</label>
                        <input type="file" name="logo_header_file"
                               placeholder="upload logo_header" class="form-control">
                        @include('backend.includes.field_validation',['input' => 'logo_header_file'])
                    </div>
                    <div class="form-group">
                        <label for="logo_footer">Logo Footer</label>
                        <input type="file" name="logo_footer_file"
                               placeholder="upload logo_footer" class="form-control">
                        @include('backend.includes.field_validation',['input' => 'logo_footer_file'])
                    </div>
                    <div class="form-group">
                        <label for="hero_image">First Hero Image</label>
                        <input type="file" name="hero_image_file"
                               placeholder="upload hero_image" class="form-control">
                        @include('backend.includes.field_validation',['input' => 'hero_image_file'])
                    </div>
                    <div class="form-group">
                        <label for="fav_icon">Fav Icon Image</label>
                        <input type="file" name="fav_icon_file" placeholder="Insert fav_icon image"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'fav_icon_file'])
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter email"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'email'])
                    </div>
                    <div class="form-group">
                        <label for="optional_email">Option Email</label>
                        <input type="email" name="optional_email" value="{{old('optional_email')}}"
                               placeholder="Enter optional_email" class="form-control">
                        @include('backend.includes.field_validation',['input' => 'optional_email'])
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" value="{{old('phone')}}" placeholder="Enter phone"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'phone'])
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="number" name="mobile" value="{{old('mobile')}}" placeholder="Enter mobile"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'mobile'])
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="{{old('address')}}" placeholder="Enter address"
                               class="form-control">
                        @include('backend.includes.field_validation',['input' => 'address'])
                    </div>
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <textarea name="meta_title" placeholder="Enter meta title" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meta_keyword">Meta Keyword</label>
                        <textarea name="meta_keyword" placeholder="Enter meta keyword" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" placeholder="Enter meta description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="active">Status</label>
                        <input type="radio" value="1" name="status"/> Active
                        <input type="radio" value="0" name="status" checked/> De Active
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" value="Save {{$panel}} " class="btn btn-success"/>
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
            CKEDITOR.replace('meta_description');
            CKEDITOR.replace('meta_keyword');
            CKEDITOR.replace('meta_title');
        });
    </script>
@endsection

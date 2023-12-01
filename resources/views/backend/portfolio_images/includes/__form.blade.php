<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter Title']) !!}
    @include('backend.includes.field_validation',['input' => 'title'])
</div>
<div class="form-group">
    {!! Form::label('rank','Rank') !!}
    {!! Form::number('rank',null,['class'=>'form-control','placeholder'=>'Enter Rank']) !!}
    @include('backend.includes.field_validation',['input' => 'rank'])
</div>
<div class="form-group">
    {!! Form::label('image_file','Upload Image') !!}
    {!! Form::file('image_file',['class'=>'form-control']) !!}
    @include('backend.includes.field_validation',['input' => 'image_file'])
</div>
<div class="form-group">
    {!! Form::label('short_description','Short Description') !!}
    {!! Form::textarea('short_description',null,['class'=>'form-control','placeholder'=>'Enter Short Description']) !!}
    @include('backend.includes.field_validation',['input' => 'short_description'])
</div>
<div class="form-group">
    {!! Form::label('status',"Status") !!}
    {!! Form::radio('status',1) !!}Active
    {!! Form::radio('status',0,true) !!}In Active
</div>

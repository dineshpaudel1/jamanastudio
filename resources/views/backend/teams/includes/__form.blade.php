<div class="form-group">
    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name']) !!}
    @include('backend.includes.field_validation',['input' => 'name'])
</div>
<div class="form-group">
    {!! Form::label('position','Position') !!}
    {!! Form::text('position',null,['class'=>'form-control','placeholder'=>'Enter Position']) !!}
    @include('backend.includes.field_validation',['input' => 'position'])
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
    {!! Form::label('description','Description') !!}
    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Enter Description']) !!}
    @include('backend.includes.field_validation',['input' => 'description'])
</div>
<div class="form-group">
    {!! Form::label('twitter','Twitter') !!}
    {!! Form::url('twitter',null,['class'=>'form-control','placeholder'=>'Enter Twitter']) !!}
    @include('backend.includes.field_validation',['input' => 'twitter'])
</div>
<div class="form-group">
    {!! Form::label('facebook','Facebook') !!}
    {!! Form::url('facebook',null,['class'=>'form-control','placeholder'=>'Enter Facebook']) !!}
    @include('backend.includes.field_validation',['input' => 'facebook'])
</div>
<div class="form-group">
    {!! Form::label('instagram','Instagram') !!}
    {!! Form::url('instagram',null,['class'=>'form-control','placeholder'=>'Enter Instagram']) !!}
    @include('backend.includes.field_validation',['input' => 'instagram'])
</div>
<div class="form-group">
    {!! Form::label('linked_in','Linked In') !!}
    {!! Form::url('linked_in',null,['class'=>'form-control','placeholder'=>'Enter Linked In']) !!}
    @include('backend.includes.field_validation',['input' => 'linked_in'])
</div>
<div class="form-group">
    {!! Form::label('status',"Status") !!}
    {!! Form::radio('status',1) !!}Active
    {!! Form::radio('status',0,true) !!}In Active
</div>

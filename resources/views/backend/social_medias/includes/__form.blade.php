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


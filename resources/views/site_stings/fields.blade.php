

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Data:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>
 



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siteStings.index') !!}" class="btn btn-default">Cancel</a>
</div>

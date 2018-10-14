<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- cat_id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cat_id', 'cat:') !!}
    <select name="cat_id" class="form-control">
        @foreach($cat as $category)
            <option value="{{$category->id}}"> {{$category->title}} </option>
        @endforeach
    </select>

 </div>

 

<div class="form-group col-sm-4">
    {!! Form::label('Area', 'Area:') !!}
    {!! Form::text('Area', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('Rooms', 'Rooms:') !!}
    {!! Form::text('Rooms', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-4">
    {!! Form::label('bathroom', 'bathroom:') !!}
    {!! Form::text('bathroom', null, ['class' => 'form-control']) !!}
</div>




<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Single Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('single_photo', 'Single Photo:') !!}
    {!! Form::file('single_photo') !!}
</div>
<div class="clearfix"></div>

  <div class="form-group col-sm-6">
    {!! Form::label('photos_id', 'Photos Id:') !!}
    <input type="file"   name="photos_id[]" multiple    >
    
</div>
<!-- Slug Field -->

 



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>

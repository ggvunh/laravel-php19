<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('name') )
    <span class="text-warning">
        <strong> {{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('date_of_birth', 'Date of Birth') !!}
  <div class="form-controls">
    {!! Form::date('date_of_birth', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('date_of_birth') )
    <span class="text-warning">
        <strong> {{ $errors->first('date_of_birth') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('breed_id', 'Breed') !!}
  <div class="form-controls">
    {!! Form::select('breed_id',$breeds , null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('image', 'Image') !!}
  <div class="form-controls">
    {!! Form::file('image', ['onchange'=>"loadFile(event)"]) !!}
  </div>
  <img id="output"/>
</div>

{!! Form::submit('Save cat', ['class' => 'btn btn-primary', 'onclick' =>'showWating()']) !!}
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
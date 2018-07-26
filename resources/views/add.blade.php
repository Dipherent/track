@extends('layouts.app')

@section('content')
<hr>
<h1>Add Activity and Food</h1>
<hr>

{!! Form::open(['url' => 'add/submit']) !!}

<div class="form-group">
  {{Form::label('date', 'Date')}}
  {{Form::date('date', \Carbon\Carbon::now()), ['class'=>'form-control']}}

</div>
<div class="form-group">

  {{Form::label('sport', 'Sport Activity')}}
  {{Form::textarea('sport', '',['class'=>'form-control','placeholder'=>'Enter Sport Actrivity'])}}
  <script>
        CKEDITOR.replace( 'sport' );
      </script>
</div>
<div class="form-group">
  {{Form::label('food', 'Food Diary')}}
  {{Form::textarea('food', '',['class'=>'form-control', 'placeholder'=>'Enter Food Intake'])}}
  <script>
        CKEDITOR.replace( 'food' );
      </script>
</div>
<div class="form-group">
  {{Form::label('notes', 'Other Notes')}}
  {{Form::textarea('notes', '',['class'=>'form-control', 'placeholder'=>'Enter Any Other Notes'])}}
  <script>
        CKEDITOR.replace( 'notes' );
      </script>
</div>
<div>
  {{Form::submit('Add Acivity',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}

@endsection

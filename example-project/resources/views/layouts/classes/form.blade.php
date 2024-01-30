

@extends('layouts.app')

@section('content')

<div class="container text-center">

    <h2 class="m-lg-4">Create Class</h2>

    <form  method="POST" class="mx-auto" action="{{$route}}"  >
      @csrf

      <div class="row">
        <div class="form-group col-6 mx-auto">

          <input placeholder="Enter Class " type="text" class="form-control" id="class" name="class">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-6 mx-auto mt-5" >

            <select class="js-example-basic-multiple w-20"
            id="teacher_id" name="teacher_id" required >

            @if ($teachers)
                @foreach ($teachers as $teacher)
                    <option   value="{{ $teacher->id }}" >
                        {{ $teacher->name}}
                    </option>
                @endforeach
            @endif
        </select>

        </div>
      </div>

    </div>
      <button type="submit" class="btn btn-primary m-lg-4">Submit</button>
    </form>
  </div>

@endsection
@section('css')
<style>



</style>
@endsection

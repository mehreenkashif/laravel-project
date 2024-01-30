

@extends('layouts.app')

@section('content')

<div class="container text-center">

    <h2 class="m-lg-4">Create Student</h2>

    <form  method="POST" class="mx-auto" action="{{$route}}"  >
      @csrf

      <div class="row">
        <div class="form-group col-6 mx-auto">

          <input placeholder="Enter Students Name" type="text" class="form-control" id="name" name="name">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-6 mx-auto mt-5" >

            <select class="js-example-basic-multiple w-20"
            id="class_id" name="class_id" required >

            @if ($class)
                @foreach ($class as $class)
                    <option   value="{{ $class->id }}" >
                        {{ $class->class}}
                    </option>
                @endforeach
            @endif
        </select>

        </div>
      </div>
      {{-- <div class="col-md-6 mb-3 mb-3">
        <label class="col-form-label pt-0" for="email"> class *</label>
        <select class="js-example-basic-multiple "
        id="class" name="class" required>

        @if ($class)
            @foreach ($class as $class)
                <option   value="{{ $class->id }}" >
                    {{ $class->class}}
                </option>
            @endforeach
        @endif
    </select> --}}

    </div>
      <button type="submit"  class="btn btn-primary m-lg-4">Submit</button>
    </form>
  </div>


@endsection
@section('css')
<style>



</style>
@endsection

@extends('layouts.app')
 @section('content')

 <div class="page-body ">
    <div class="container-fluid main ">
        <div class="row justify-content-xl-end">
            <div class="col-md-4 m-lg-3">
                <h3 class="mt-2">Students List</h3>
            </div>
            <div class="col-md-4 text-right ">
                <a class="btn btn-primary mt-2" href="{{ route('Students.create') }}">
                    <i data-feather="plus-square"></i> Create Student
                </a>
            </div>
        </div>
     <div class="row justify-content-center">
        <div class="col-sm-10 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($studentlist as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ optional($student->studentClass)->class }}</td>
                                    </tr>
                                 @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No students found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
   </div>

</div>


@endsection @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/simple-mde.css')}}"/>
<style>


    </style>
@endsection @section('js')
    <script src="{{asset('js/editor/simple-mde/simplemde.min.js')}}"></script>
    <script src="{{asset('js/editor/simple-mde/simplemde.custom.js')}}"></script>
    <script src="{{asset('js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatable/datatables/datatable.custom.js')}}"></script>

@endsection


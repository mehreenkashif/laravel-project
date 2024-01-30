@extends('layouts.app')
 @section('content')

 <div class="page-body">
    <div class="container-fluid main ">

        <div class="row  ">
            <div class="col-md-8 student-heading">
                <h4 class="mt-2">Teachers List</h4>
            </div>
            <div class="col-md-4 text-right ">
                <a class="btn btn-primary mt-2" href="{{ route('Teachers.create') }}">
                    <i data-feather="plus-square"></i> Create Teacher
                </a>
            </div>
        </div>

        <div class="   col-sm-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->id }}</td>
                                        <td>{{ $teacher->name }}</td>

                                    </tr>
                                 @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No teacher found</td>
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



@endsection @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/simple-mde.css')}}"/>
<style>
    .student-heading{
margin-left:20px;
margin-top: 30px;
    }
    </style>
@endsection @section('js')
    <script src="{{asset('js/editor/simple-mde/simplemde.min.js')}}"></script>
    <script src="{{asset('js/editor/simple-mde/simplemde.custom.js')}}"></script>
    <script src="{{asset('js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatable/datatables/datatable.custom.js')}}"></script>

@endsection


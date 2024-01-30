@extends('layouts.app')
 @section('content')

    <div class="page-body">


        <!-- Container-fluid starts-->

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-dark">
                                    <h5>Classes</h5>

                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Teacher</th>
                                        <th scope="col">No.of.Students</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($classes as $class)
                                            <tr>
                                                <td>{{$class->id}}</td>
                                                <td>{{$class->class}}</td>
                                                <td>{{$class->teacher->name}}</td>
                                                <td>{{$class->students->count()}}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>


@endsection @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/simple-mde.css')}}"/>
@endsection @section('js')
    <script src="{{asset('js/editor/simple-mde/simplemde.min.js')}}"></script>
    <script src="{{asset('js/editor/simple-mde/simplemde.custom.js')}}"></script>
    <script src="{{asset('js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatable/datatables/datatable.custom.js')}}"></script>
    <script>

        function deleteRecord(id) {
            let confirmBox = confirm('Are You Really Want To Delete!');
            if (confirmBox) {
                let path = `{{ url('tsc-user/${id}') }}`;
                $('#delete-form').attr('action', path);
                $('#delete-form').submit();
            }
        }
    </script>

@endsection


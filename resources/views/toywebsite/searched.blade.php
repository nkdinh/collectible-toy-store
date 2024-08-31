@extends('toywebsiteMaster.ToyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection
@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav');

    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0 100px 0">
            <div class="content">
                <div class="container-fluid">
                    <h1>Puppy Management</h1>
                    <div class="col-sm-4">
                        <a href="{{Route('puppy.create')}}" class="btn btn-danger mb-2" style="border-radius: 15px"><i
                                    class="mdi mdi-plus-circle mr-2"></i> Add Puppy</a>
                        <a href="{{Route('toy.create-category')}}" class="btn btn-danger mb-2"
                           style="border-radius: 15px"><i
                                    class="mdi mdi-plus-circle mr-2"></i> Add Breed</a>
                    </div>

                    <table class="table table-striped table-centered mb-0 ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Breed</th>
                            <th>Gender</th>
                            <th>Area</th>
                            <th>Detail</th>
                            <th>Color</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pets as $each)
                            <tr>
                                <td>
                                    {{$each->Pid}}
                                </td>
                                <td>
                                    {{$each->name}}
                                </td>
                                <td>{{$each->bread}}</td>
                                <td>{{$each->gender}}</td>
                                <td>{{$each->area}}</td>
                                <td>{{$each->Detail}}</td>
                                <td>{{$each->color}}</td>
                                <td class="table-user">
                                    <img src="{{$each->image}}" alt="table-user"
                                         style="width:100px;height:100px" class="rounded-circle"/>
                                </td>
                                <td class="table-action">
                                    <a href="{{route('toy.edit',['id'=>$each->Pid])}}" class="action-icon">
                                        <i class="mdi mdi-pencil"></i></a>

                                    {{--                                    <a href="{{route('toy.confirm',['id'=>$each->Pid])}}" class="action-icon"--}}
                                    {{--                                       data-toggle="modal" data-target="#danger-header-modal"--}}
                                    {{--                                    >--}}
                                    {{--                                        <i class="mdi mdi-delete"></i></a>--}}
                                    {{--                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">--}}

                                    <i class="mdi mdi-delete action-icon" type="button" data-toggle="modal" data-target="#exampleModalScrollable">
                                    {{--                                    </button>--}}
                                    @include('toywebsite.deletePetmodal')
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{--    --}}
    {{--    modal confirm delete--}}
    {{--    <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header modal-colored-header bg-danger">--}}
    {{--                    <h4 class="modal-title" id="danger-header-modalLabel">Modal Heading</h4>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    ...--}}
    {{--                </div>--}}
    {{--                <div class="modal-footer">--}}
    {{--                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>--}}
    {{--                    <button type="button" class="btn btn-danger">Save changes</button>--}}
    {{--                </div>--}}
    {{--            </div><!-- /.modal-content -->--}}
    {{--        </div><!-- /.modal-dialog -->--}}
    {{--    </div><!-- /.modal -->--}}
@endsection


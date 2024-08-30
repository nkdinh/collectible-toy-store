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
                    <h1>Toys Management</h1>
                    <div class="col-sm-4">
                        <a href="{{Route('toy.create')}}" class="btn btn-danger mb-2" style="border-radius: 15px; margin-right: 10px"><i
                                class="mdi mdi-plus-circle mr-2"></i> Add new toy</a>
                        <a href="{{Route('toy.createCategory')}}" class="btn btn-danger mb-2"
                           style="border-radius: 15px"><i
                                class="mdi mdi-plus-circle mr-2"></i> Add new toy category</a>
                    </div>
                    <table class="table table-striped table-centered mb-0 ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Image</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($toys as $each)

                            <tr>
                                <td>
                                    {{$each->p_id}}
                                </td>
                                <td>
                                    {{$each->name}}
                                </td>
                                <td>{{$each->description}}</td>
                                <!-- <td>{{$each->img}}</td> -->
                                <td>{{$each->product_category_id}}</td>
                                <td class="table-user">
                                    <img src="{{$each->img}}" alt="table-user"
                                         style="width:100px;height:100px" class="rounded-circle"/>
                                </td>
                                <td class="table-action">
                                    <a href="{{route('toy.edit',['id'=>$each->p_id])}}" class="action-icon">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="{{route('toy.confirm',['id'=>$each->p_id])}}" class="action-icon">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


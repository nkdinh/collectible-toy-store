@extends('toywebsiteMaster.ToyMaster')
@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav')
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0 100px 0">
            <h1>categories Management</h1>
            <div class="content">
                <table class="table table-striped table-centered mb-0 ">
                    <tr>
                        <th>categories</th>
                    </tr>
                    @foreach($categories as $each)
                        <tr>
                            <td>{{$each->title}}</td>
                            <td class="table-action">
                                <a href="{{Route('category.update',['id'=>$each->id])}}" class="action-icon">
                                    <i class="mdi mdi-pencil"></i></a>
<a href="{{Route('product_categories.confirm',['id'=>$each->id])}}" class="action-icon">
<i class="mdi mdi-delete action-icon" type="button" data-toggle="modal" data-target="#exampleModalScrollable">
<form action="{{route('product_categories.delete',['id'=>$each->id])}}" method="post">
    @csrf
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this categories?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

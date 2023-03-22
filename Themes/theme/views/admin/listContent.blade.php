@extends('layouts.adminLayout')
@section('content')

<div class="container-fluid" >
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary">Content List</h6>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{URL_ADMIN_CREATE_NEW_CONTENT}}">
                                    Add New Content
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-y: scroll;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>Content 1</th>
                                        <th>Content 2</th>
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Add</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>Content 1</th>
                                        <th>Content 2</th>
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Add</th>
                                        <th>Update</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                        @foreach ($record as $item)
                                                <tr>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->categories }}</td>
                                                    <td>{{ $item->content1 }}</td>
                                                    <td>{{ $item->content2 }}</td>
                                                    <td>
                                                        <img src="{{ asset('/imageUpload/'.$item->src_pic1) }}" width="70px" height="70px" alt="image">
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('/imageUpload/'.$item->src_pic2) }}" width="70px" height="70px" alt="image">
                                                    </td>
                                                    <td class="text-center"><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#stockModal{{ $item->id }}">Add</button></td>
                                                    <td class="text-center"><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateModal{{ $item->id }}">Update</button></td>
                                                    {{-- <td class="text-center">
                                                        <a class="d-none d-sm-inline-block btn btn-primary shadow-sm" href="{{ url('/updatepatient/'.$item->id) }}" role="button">
                                                            Update
                                                        </a>
                                                    </td> --}}
                                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                @if($errors->any())
                                    <h4 style="color:red;">{{$errors->first()}}</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop


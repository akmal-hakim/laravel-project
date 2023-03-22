@extends('layouts.adminLayout')
@section('content')

<!-- row -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-6 col-xxl-12">
			<div class="card">
				<div class="card-header d-sm-flex d-block pb-0 border-0">
					<div class="mr-auto pr-3 mb-sm-0 mb-3">
						<h4 class="text-black fs-20">Create New Content</h4>
						<p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="card-body pt-0 pb-0">
					
                    <!-- Form Begins -->
                    <div class="" role="document">
                        <div class="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/addContent') }}" method="post" enctype='multipart/form-data'>
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="title" id="title"
                                                placeholder="Title" pattern="[a-zA-Z_ ]*" title="alphabet only" required>
                                            @if($errors->any())
                                                <p style="color:red;">{{$errors->first('title')}}</p>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="categories">
                                                <option value="">Categories</option>
                                                <option value="Beginner">Beginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Expert">Expert</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <textarea name="content1" id="content1" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type the content 1...."></textarea>
                                            @if($errors->any())
                                                <p style="color:red;">{{$errors->first('content1')}}</p>
                                            @endif
                                        </div>

                                        <div class="col-sm-6">
                                            <textarea name="content2" id="content2" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type the content 2...."></textarea>
                                            @if($errors->any())
                                                <p style="color:red;">{{$errors->first('content2')}}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="file" name="src_pic1" id="src_pic1" class="form-control form-control-user">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="file" name="src_pic2" id="src_pic2" class="form-control form-control-user">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Add
                                        </button>
                                        <div class="text-center">
                                            @if($errors->any())
                                                <p style="color:red;">{{$errors->first()}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="modal-footer"></div> --}}
                        </div>
                    </div>
                    <!-- Form Ends -->
				</div>
			</div>
		</div>
	</div>
</div>

@stop


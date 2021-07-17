@extends('layouts.admin_layouts')
@section('content')
    <main>
            <div class="container-fluid px-4">
             <h1 class="mt-4">Home</h1>
                <div class=" mb-4">
                     <p class="mb-0">
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item">Page section</li>
                            <li class="breadcrumb-item active">Home section</li>
                        </ol>
                     </p>        
                 </div>
                <form action="{{route('admin.home.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                <img style="height: 30vh" src="{{(@$home->bc_img)?url($home->bc_img):asset("assets/img/bc_img.jpg")}}" class="img-thumbnail">
                <input class="mt-3" type="file" id="bc_img" name="bc_img">
                </div>
                <div class="form-group col-md-8 mt-3">
                    <div class="mb-3">
                        <label for="title_1"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title_1" name="title_1" value="{{(@$home->title_1)?$home->title_1:"The title"}}">
                    </div>
                     <div class="mb-3">
                        <label for="title_2"><h4>Name</h4></label>
                    <input type="text" class="form-control" id="title_2" name="title_2" value="{{(@$home->title_2)?$home->title_2:"The title"}}">
                    </div>
                    <div class="mb-3">
                        <label for="sub_title"><h4>Description</h4></label>
                        <textarea type="text" class="form-control" id="sub_title" name="sub_title" value="">{{(@$home->sub_title)?$home->sub_title:"Sub Title"}}</textarea>
                    </div>
                    <div>
                        <h4>Button Text</h4>
                        <input type="text" class="form-control" id="button" name="button" value="{{(@$home->button)?$home->button:"Sub Title"}}">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5" value="Update">
        </div>
        </form>
             </div>
    </main>
 @endsection
              
@extends('layouts.admin_layouts')
@section('content')
    <main>
            <div class="container-fluid px-4">
             <h1 class="mt-4">About</h1>
                <div class=" mb-4">
                     <p class="mb-0">
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item">Page section</li>
                            <li class="breadcrumb-item active">About section</li>
                        </ol>
                     </p>        
                 </div>
                <form action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
              
                
                <div class="form-group col-md-12 mt-3">
                    <div class="mb-3">
                        <label for="title_1"><h4>Title 1</h4></label>
                    <input type="text" class="form-control" id="title_1" name="title_1" value="{{(@$about->title_1)?$about->title_1:"The title"}}">
                    </div>
                    <div class="mb-3">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <textarea type="text" class="form-control" id="sub_title" name="sub_title" value="">{{(@$about->sub_title)?$about->sub_title:"Sub Title"}}</textarea>
                    </div>
                     <div class="mb-3">
                        <label for="title_2"><h4>Title 2</h4></label>
                    <input type="text" class="form-control" id="title_2" name="title_2" value="{{(@$about->title_2)?$about->title_2:"The title"}}">
                    </div>
                     <div class="mb-3">
                        <label for="sub_title_2"><h4>Sub Title 2</h4></label>
                        <textarea type="text" class="form-control" id="sub_title_2" name="sub_title_2" value="">{{(@$about->sub_title_2)?$about->sub_title_2:"Sub Title"}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="sub_title_3"><h4>Sub Title 3</h4></label>
                        <textarea type="text" class="form-control" id="sub_title_3" name="sub_title_3" value="">{{(@$about->sub_title_3)?$about->sub_title_3:"Sub Title"}}</textarea>
                    </div>
      
                    <div class="row">
                            <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_name_1"><h4>List Name</h4></label>
                    <input type="text" class="form-control" id="list_name_1" name="list_name_1" placeholder="list_name_1" value="{{$about->list_name_1}}">
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_description_1"><h4>List Description</h4></label>
                    <input type="text" class="form-control" id="list_description_1" name="list_description_1" placeholder="list_description_1" value="{{$about->list_description_1}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="">
                        <label for="list_name_2"></label>
                    <input type="text" class="form-control" id="list_name_2" name="list_name_2" placeholder="list_name_2" value="{{$about->list_name_2}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_description_2"></label>
                    <input type="text" class="form-control" id="list_description_2" name="list_description_2" placeholder="list_description_2" value="{{$about->list_description_2}}">
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_name_3"></label>
                    <input type="text" class="form-control" id="list_name_3" name="list_name_3" placeholder="list_name_3" value="{{$about->list_name_3}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="">
                        <label for="list_description_3"></label>
                    <input type="text" class="form-control" id="list_description_3" name="list_description_3" placeholder="list_description_3" value="{{$about->list_description_3}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_name_4"></label>
                    <input type="text" class="form-control" id="list_name_4" name="list_name_4" placeholder="list_name_4" value="{{$about->list_name_4}}">
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_description_4"></label>
                    <input type="text" class="form-control" id="list_description_4" name="list_description_4" placeholder="list_description_4" value="{{$about->list_description_4}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="">
                        <label for="list_name_5"></label>
                    <input type="text" class="form-control" id="list_name_5" name="list_name_5" placeholder="list_name_5" value="{{$about->list_name_5}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_description_5"></label>
                    <input type="text" class="form-control" id="list_description_5" name="list_description_5" placeholder="list_description_5" value="{{$about->list_description_5}}">
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_name_6"></label>
                    <input type="text" class="form-control" id="list_name_6" name="list_name_6" placeholder="list_name_6" value="{{$about->list_name_6}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="">
                        <label for="list_description_6"></label>
                    <input type="text" class="form-control" id="list_description_6" name="list_description_6" placeholder="list_description_6" value="{{$about->list_description_6}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="">
                        <label for="list_name_7"></label>
                    <input type="text" class="form-control" id="list_name_7" name="list_name_7" placeholder="list_name_7" value="{{$about->list_name_7}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_description_7"></label>
                    <input type="text" class="form-control" id="list_description_7" name="list_description_7" placeholder="list_description_7"value="{{$about->list_description_7}}" >
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                      <div class="">
                        <label for="list_name_8"></label>
                    <input type="text" class="form-control" id="list_name_8" name="list_name_8" placeholder="list_name_8" value="{{$about->list_name_8}}">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="">
                        <label for="list_description_8"></label>
                    <input type="text" class="form-control" id="list_description_8" name="list_description_8" placeholder="list_description_8" value="{{$about->list_description_8}}">
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                    <div class="pt-5">
                         <h3> Image</h3>
                            <input class="my-3" type="file" id="img" name="img">
                            <img style="height: 30vh" src="{{(@$about->img)?url($about->img):asset("assets/img/img.jpg")}}" class="img-thumbnail">
                    </div>
                </div>
                 <div class="form-group col-md-6 ">
                    <div class="pt-5">
                        <div>
                        <h4 class="" >Upload Resume</h4>
                        <input class="mt-5 pt-4" type="file" id="cv" name="cv">
                        
                    </div>
                    </div>
                </div>
                </div>
                </div>
            
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5"value="Update" >
        </div>
        </form>
             </div>
    </main>
 @endsection
              
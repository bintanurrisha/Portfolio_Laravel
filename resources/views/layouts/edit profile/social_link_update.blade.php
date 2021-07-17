@extends('layouts.admin_layouts')
@section('content')
    <div>
        <div class="container-fluid px-4">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.Social_link.list')}}">Back List page</a>
             <h1 class="mt-4">Social Link</h1>
                        <div class=" mb-4">
                            <p class="mb-0">
                                <ol class="breadcrumb mt-4">
                                    <li class="breadcrumb-item">Page section</li>
                                    <li class="breadcrumb-item">Social Link section</li>
                                    <li class="breadcrumb-item active">Edit</li>
                                </ol>
                            </p>        
                        </div>
         <form action="{{route('admin.Social_link.update', $Social_link->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                 <div class="row">
                            <div class="form-group col-md-4 mt-3">
                                <div class="mb-3">
                                    <label for="icon"><h4>Icon</h4></label>
                                <input type="text" class="form-control" id="icon" name="icon" value="{{$Social_link->icon}}">
                                </div>
                                <div class="mb-3">
                                    <label for="Link"><h4>Link</h4></label>
                                    <input type="text" class="form-control" id="Link" name="Link" value="{{$Social_link->Link}}">
                                </div>
                                <div>
                                <input type="submit" name="submit" value ="Update" class="btn btn-primary mt-2">
                                </div>
                            </div>
                    </div>
                                
            </form>
         </div>
    </div>
 @endsection
              
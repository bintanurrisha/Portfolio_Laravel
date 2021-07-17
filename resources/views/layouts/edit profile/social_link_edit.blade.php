@extends('layouts.admin_layouts')
@section('content')
    <main>
            <div class="container-fluid px-4">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.Social_link.list')}}">List of Social Link</a>
             <h1 class="mt-4">Social Link</h1>
                <div class=" mb-4">
                     <p class="mb-0">
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item"> Edit Profile</li>
                            <li class="breadcrumb-item">Social link section</li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                     </p>        
                 </div>
                <form action="{{route('admin.Social_link.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="row">
              
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="icon"><h4>Social icon</h4></label>
                    <input type="text" class="form-control" id="icon" name="icon" >
                    </div>
                     <div class="mb-3">
                        <label for="Link"><h4>Link</h4></label>
                    <input type="text" class="form-control" id="Link" name="Link" >
                    </div>
                   <input type="submit" value="Create" name="submit" class="btn btn-primary mt-2">
                </div>
            </div>
            
        </div>
        </form>
             </div>
    </main>
 @endsection
              
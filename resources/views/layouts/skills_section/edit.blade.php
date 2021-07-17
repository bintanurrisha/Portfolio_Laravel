@extends('layouts.admin_layouts')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.skill.list')}}">Back Skills page</a>
             <h1 class="mt-4">Skills</h1>
                        <div class=" mb-4">
                            <p class="mb-0">
                                <ol class="breadcrumb mt-4">
                                    <li class="breadcrumb-item">Page section</li>
                                    <li class="breadcrumb-item">Skills section</li>
                                    <li class="breadcrumb-item active">Edit</li>
                                </ol>
                            </p>        
                        </div>
                <form action="{{route('admin.skill.update', $skills->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                    <div class="row">
                        <div class="form-group col-md-4 mt-3">
                            <div class="mb-3">
                              <label for="skill"><h4>Font Awesome Icon</h4></label>
                            <input type="text" class="form-control" id="skill" name="skill" value="{{$skills->skill}}">
                             </div>
                        <div class="mb-3">
                            <label for="score"><h4>Score</h4></label>
                             <input type="text" class="form-control" id="score" name="score" value="{{$skills->score}}">
                          </div>
                        <div>
                              <input type="submit" name="submit" class="btn btn-primary mt-5" value="Update">
                        </div>
                    </div>
                                
            </form>
         </div>
    </main>
 @endsection
              
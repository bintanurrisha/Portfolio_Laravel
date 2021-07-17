@extends('layouts.admin_layouts')
@section('content')
    <main>
            <div class="container-fluid px-4">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.facts.list')}}"> Facts List</a>
             <h1 class="mt-4">Facts</h1>
                <div class=" mb-4">
                     <p class="mb-0">
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item">Page section</li>
                            <li class="breadcrumb-item">Facts section</li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                     </p>        
                 </div>
                <form action="{{route('admin.facts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="row">
              
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="icon"><h4>icon</h4></label>
                    <input type="text" class="form-control" id="icon" name="icon" >
                    </div>
                     <div class="mb-3">
                        <label for="Counter"><h4>Counter</h4></label>
                    <input type="text" class="form-control" id="Counter" name="Counter" >
                    </div>
                    <div class="mb-5">
                        <label for="description"><h4>description</h4></label>
                        <input type="text" class="form-control" id="description" name="description" >
                    </div>
                   <input type="submit" name="submit" class="btn btn-primary mt-2" value="Create">
                </div>
            </div>
            
        </div>
        </form>
             </div>
    </main>
 @endsection
              
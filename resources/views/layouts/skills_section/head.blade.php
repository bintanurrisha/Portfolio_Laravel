 @extends('layouts.admin_layouts')
@section('content')
 <div class="container-fluid px-4">
             <h1 class="mt-4">Skills Title</h1>
                <div class=" mb-4">
                     <p class="mb-0">
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item">Page section</li>
                            <li class="breadcrumb-item active">Skills Title </li>
                        </ol>
                     </p>        
                 </div>
                <form  action="{{route('admin.skill_head.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-8 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{(@$skill_head_sections->title)?$skill_head_sections->title:"The title"}}">
                    </div>
                    <div class="mb-3">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <textarea type="text" class="form-control" id="sub_title" name="sub_title" value="">{{(@$skill_head_sections->sub_title)?$skill_head_sections->sub_title:"Sub Title"}}</textarea>
                    </div>
                      <input type="submit" name="submit" class="btn btn-primary mt-2" value="Update">
                </div>
            </div>
           
        </div>
        </form>
             </div>
              @endsection
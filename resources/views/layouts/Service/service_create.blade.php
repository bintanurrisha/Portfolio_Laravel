<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Service</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  </head>
  <body>
    
     <main>
            <div class="container px-4">
            <a class="btn btn-success"style="float:right;" href="{{route('admin.service.list')}}">List of Service</a>
             <h1 class="mt-4">Service</h1>
                <div class=" mb-4">
                     <p class="mb-0">
                        <ol class="breadcrumb mt-4">
                            <li class="breadcrumb-item">Page section</li>
                            <li class="breadcrumb-item">Service section</li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                     </p>        
                 </div>
                <form action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
            
           
            <div class="row">
              
                <div class="form-group col-md-12 mt-3">
                    <div class="mb-3">
                        <label for="icon"><h4>icon</h4></label>
                    <input type="text" class="form-control" id="icon" name="icon" >
                    </div>
                     <div class="mb-3">
                        <label for="Title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="Title" name="Title" >
                    </div>
                    <div class="mb-5">
                        <label for="description"><h4>description</h4></label>
                        <input type="text" class="form-control" id="description" name="description" >
                    </div>
                   <div class="mb-3">
                        <label for="long_description"><h4>Long_description</h4></label>
                        <textarea type="text" class="form-control" id="long_description" name="long_description" value="long_description">{{(@$about->long_description)?$about->sub_title_3:""}}</textarea>
                    </div>
                 
                     

                   <input type="submit" name="submit" class="btn btn-primary mt-2" value="Create">
                </div>
            </div>
            
        </div>
        </form>
             </div>
    </main>
    <script>
      $('#long_description').summernote({
        placeholder: 'Description Here',
        tabsize: 2,
        height: 100
      });
    </script>
  </body>
</html>

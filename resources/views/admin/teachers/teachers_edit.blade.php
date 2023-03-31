@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Teachers Edit Page </h4>

            <form method="post" action="{{ route('update.teachers') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $teachers->id }}">

                

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Teachers Namae</label>
                <div class="col-sm-10">
                    <input name="teachers_name" class="form-control" type="text" value="{{$teachers->teachers_name}}" id="example-text-input">
                    @error('teachers_name')
                    <span class="tesxt-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Teachers Course </label>
                <div class="col-sm-10">
                    <input name="teachers_course" class="form-control" type="text" value="{{$teachers->teachers_course}}" id="example-text-input">
                    @error('teachers_course')
                    <span class="tesxt-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Teachers Description </label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="teachers_description">
                    {{$teachers->teachers_description}}
                    </textarea>
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Teachers Image </label>
                <div class="col-sm-10">
                <input name="teachers_image" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ asset($teachers->teachers_image) }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Teachers Data">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection 






@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Instruments Edit Page </h4>

            <form method="post" action="{{ route('update.instruments') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $instruments->id}}">



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Instruments Name</label>
                <div class="col-sm-10">
                    <input name="instruments_name" class="form-control" type="text" value="{{ $instruments->instruments_name}}" id="example-text-input">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Instruments Price </label>
                <div class="col-sm-10">
                    <input name="instruments_price" class="form-control" type="text" value="{{ $instruments->instruments_price}}" id="example-text-input">
                </div>
            </div>
            <!-- end row -->



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Instruments Description </label>
                <div class="col-sm-10">
      <textarea id="elm1" name="instruments_description">
      {{ $instruments->instruments_description}}

      </textarea>
                </div>
            </div>
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Instruments Image </label>
                <div class="col-sm-10">
           <input name="instruments_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ asset($instruments->instruments_image) }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Instruments Data">
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
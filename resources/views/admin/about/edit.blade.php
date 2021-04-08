@extends('admin.layout.master')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        <strong class="card-title">Edit Details</strong>
    </div>
    <div class="card-body">
      <!-- Credit Card -->
      <div id="pay-invoice">
          <div class="card-body">
              <div class="card-title">
                  <h3 class="text-center">Edit Details</h3>
              </div>
              <hr>
              <form action="{{action('App\Http\Controllers\Admin\AboutsController@update',$about->id)}}" method="post">
                {{ csrf_field() }}
                @method('PUT')
                  <div class="form-group has-success">
                      <label for="cc-name" class="control-label mb-1">Description</label>
                      <textarea id="cc-name" name="description" class="form-control ckeditor cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">{{$about->description}}</textarea>
                      <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                  </div>

                  <div>
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection

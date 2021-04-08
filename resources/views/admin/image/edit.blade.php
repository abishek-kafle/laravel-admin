@extends('admin.layout.master')

@section('content')
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
              <form action="{{action('App\Http\Controllers\Admin\ImageController@update',$image->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="form-group">
                      <label for="cc-payment" class="control-label mb-1">Name</label>
                      <input type="text" name="name" class="form-control" value="{{$image->name}}">
                  </div>
                  <div class="form-group has-success">
                      <img src="{!!asset("storage/img/$image->image")!!}" style="width:100px;" alt="">
                      <label for="cc-name" class="control-label mb-1">Image</label>
                      <input type="hidden" name="oldimage" value="{{$image->image}}">
                      <input type="file" name="image" class="form-control">
                  </div>

                  <div>
                      <button id="payment-button" type="submit" class="btn btn-info">
                          Update
                      </button>
                  </div>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
@endsection

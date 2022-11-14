@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Add Employee</h4>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6 offset-md-3">
              <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Enter Email">
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" name="position" placeholder="Enter Position">
              </div>
              <div class="form-group">
                <textarea class="form-control"  type="text" name="address" placeholder="Enter Address"></textarea>
              </div> 
              <div class="form-group">
                <input class="form-control" type="file" name="pic" >
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" name="number" placeholder="Enter Number">
              </div>
              <div class="form-group">
                <select name="status" class="form-control">
                  <option value="">-----Select Status-----</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
              <button class="btn btn-info">Add Employee</button>
              </form>
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
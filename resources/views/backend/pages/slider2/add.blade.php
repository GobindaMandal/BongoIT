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
              <form action="{{ route('slider2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="subject" placeholder="Event Subject">
              </div> 
              <div class="form-group">
                <input class="form-control" type="date" name="date" placeholder="{{date('Y-m-d')}}">
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" name="time" placeholder="{{date('H:i:s')}}">
              </div>
              <div class="form-group">
                <textarea class="form-control"  type="text" name="description" placeholder="Event Description"></textarea>
              </div>
              <div class="form-group">
                <select name="status" class="form-control">
                  <option value="">-----Select Status-----</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
              <button class="btn btn-info">Add Event</button>
              </form>
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
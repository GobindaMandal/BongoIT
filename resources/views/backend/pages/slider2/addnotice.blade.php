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
              <form action="{{ route('slider2.storenotice') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="nsubject" placeholder="Notice Subject">
              </div> 
              <div class="form-group">
                <input class="form-control" type="date" name="date" placeholder="{{date('Y-m-d')}}">
              </div>
              <div class="form-group">
                <textarea class="form-control"  type="text" name="ndescription" placeholder="Notice Description"></textarea>
              </div>
              <button class="btn btn-info">Create Notice</button>
              </form>
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
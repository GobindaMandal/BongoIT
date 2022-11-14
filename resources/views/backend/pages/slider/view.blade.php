@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>View Employee Details</h4>
          <p class="mg-b-0">View All Data Here</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Address</th>
                        <th>Number</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>{{ $slider->name }}</td>
                        <td>{{ $slider->email }}</td>
                        <td>{{ $slider->position }}</td>
                        <td>{{ $slider->address }}</td>
                        <td>{{ $slider->number }}</td>
                        <td>{{ $slider->status }}</td>
                    </tr>
                </table> 
            </div> 
            <div class="col-md-3 ">
                <img class="w-100" src="{{ asset('backend/slider/'.$slider->pic) }}" alt="">
            </div>

        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
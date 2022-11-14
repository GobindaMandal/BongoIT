@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>View Event Details</h4>
          <p class="mg-b-0">View All Data Here</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>{{ $slider2->subject }}</td>
                        <td>{{ $slider2->date }}</td>
                        <td>{{ $slider2->time }}</td>
                        <td>{{ $slider2->description }}</td>
                        <td>{{ $slider2->status }}</td>
                    </tr>
                </table> 
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
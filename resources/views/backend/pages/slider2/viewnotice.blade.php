@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>View Notice Details</h4>
          <p class="mg-b-0">View All Data Here</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Notice Subject</th>
                        <th>Date</th>
                        <th>Notice</th>
                    </tr>
                    <tr>
                        <td>{{ $notice->nsubject }}</td>
                        <td>{{ $notice->date }}</td>
                        <td>{{ $notice->ndescription }}</td>
                    </tr>
                </table> 
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
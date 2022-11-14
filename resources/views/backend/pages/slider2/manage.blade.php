@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Event History</h4>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    @foreach($sliders2 as $slider2)
                    <tr>
                        <td>{{$slider2->subject}}</td>
                        <td>{{$slider2->date}}</td>
                        <td>
                            <a href="{{ Route('slider2.edit',$slider2->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ Route('slider2.view',$slider2->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ Route('slider2.delete',$slider2->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Notice History</h4>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Notice Subject</th>
                        <th>Action</th>
                    </tr>
                    @foreach($notices as $notice)
                    <tr>
                        <td>{{$notice->nsubject}}</td>
                        <td>
                            <a href="{{ Route('slider2.editnotice',$notice->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ Route('slider2.viewnotice',$notice->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ Route('slider2.deletenotice',$notice->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
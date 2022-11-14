@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage Employee</h4>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{$slider->name}}</td>
                        <td>{{$slider->email}}</td>
                        <td>{{$slider->position}}</td>
                        <td>
                            <img height="100" src="{{ asset('backend/slider/'.$slider->pic) }}" alt="">
                        </td>
                        <td>
                            <a href="{{ Route('slider.edit',$slider->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ Route('slider.view',$slider->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ Route('slider.delete',$slider->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
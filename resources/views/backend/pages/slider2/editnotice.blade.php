@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit Notice</h4>
          <p class="mg-b-0">Edit All Data Here</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-7">
              <form action="{{ route('slider2.editslidernotice',$notice->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" value="{{ $notice->nsubject }}" name="nsubject" placeholder="Notice Subject">
              </div> 
              <div class="form-group">
                <input class="form-control" type="date" value="{{ $notice->date }}" name="date" placeholder="{{date('Y-m-d')}}">
              </div>
              <div class="form-group">
                <textarea class="form-control"  type="text" name="ndescription" placeholder="Enter Description">{{ $notice->ndescription }}</textarea>
              </div>
              <button class="btn btn-info">Update Notice</button>
              </form>
          </div>
          <style>
            .image{
              margin: 15px;
              height: 200px;
              width: 300px;
              position: relative; 
            }
            .image img{
              width: 100%;
              height: 100%;
            }
            .image img:hover + .action{
              display: flex;
            }
            .image .action{
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background: rgba(0,0,0,.5);
              display: none;
              justify-content: center;
              align-items: center;
            }
          </style>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Edit EVent</h4>
          <p class="mg-b-0">Edit All Data Here</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-7">
              <form action="{{ route('slider2.editslider',$slider2->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input class="form-control" type="text" value="{{ $slider2->subject }}" name="subject" placeholder="Event Subject">
              </div> 
              <div class="form-group">
                <input class="form-control" type="date" value="{{ $slider2->date }}" name="date" placeholder="{{date('Y-m-d')}}">
              </div> 
              <div class="form-group">
                <input class="form-control" type="text" value="{{ $slider2->time }}" name="time" placeholder="{{date('H:i:s')}}">
              </div>
              <div class="form-group">
                <textarea class="form-control"  type="text" name="description" placeholder="Event Description">{{ $slider2->description }}</textarea>
              </div>
              <div class="form-group">
                <select name="status" class="form-control">
                  <option value="">-----Select Status-----</option>
                  <option value="1" @if($slider2->status == 1) selected @endif>Active</option>
                  <option value="2" @if($slider2->status == 2) selected @endif>Inactive</option>
                </select>
              </div>
              <button class="btn btn-info">Update Event</button>
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
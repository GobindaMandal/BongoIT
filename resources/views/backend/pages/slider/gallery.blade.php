@extends("backend.template.template")
    @section("content")
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Add Images</h4>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
            <form action="{{ Route('slider.imagestore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="s_id" class="form-control">
                    <option value="">-----Select Slider-----</option>
                    @foreach($sliders as $slider)
                    <option value="{{ $slider->id }}">{{$slider->title}}</option>
                    @endforeach
                </select>
                <input class="form-control" type="file" name="pics[]" multiple>
                <button class="mt-2 btn btn-info">Add</button>
            </form>
        </div><!-- row -->
      </div><!-- br-pagebody -->
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection
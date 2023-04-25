{{-- card-card project --}}
<div class="" style="margin-top: 3rem;">
    <div class="container">
      {{-- judul --}}
      <div class="d-flex justify-content-center my-5">
        <p class="h1 mx-auto">
          Project Yang Dikerjakan
        </p>
      </div>
  
      {{-- cardnya --}}
  
      <div class="row d-flex justify-content-center">
          <div class="col-4 mb-3">
            <a href="{{ route('create.project') }}">
              <div class="card">
                <img src="{{ asset('images/add-image.png') }}" class="image-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Tambah Projek Baru</h5>
                </div>
              </div>
            </a>
          </div>
      </div>

      {{-- <div class="container"> --}}
        <div class="row">
  
          @foreach ($project as $pro)
            <div class="col-4 mb-3">
              <div class="card">
                <img src="{{ $pro->image }}" class="image-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{!! $pro->title !!}</h5>
                  <p class="card-text">{!! $pro->description !!}</p>
                  <div class="text-end">
                    <a href="{{ route('portofolio.delete', $pro->id) }}">
                      <i class="fas fa-trash-alt fa-lg" style="color: #ff000d;"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
  
        </div>
      {{-- </div> --}}
    </div>
  </div>
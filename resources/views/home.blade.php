@extends('layouts.navbar')

@section('content')

<div class="container ">
  @include('flash')
    <div class="row d-flex justify-content-center">
      <div class="col-9">
        <p class="h1" style="color: hsl(234, 81%, 63%); margin-bottom: 7rem">
            {!! $title !!}
        </p>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card-body">
                    <form method="POST" action="{{ route('update.main-title') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea class="form-control" name="title" id="summernote_title">{!! $title  !!}</textarea>
                        </div>
                        <button type=”submit” class="btn btn-danger btn-block">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="d-flex justify-content-around">           
  <div>
    <img src="{{ asset('images/selfie.jpg') }}" alt="" class="img" width="600">
  </div>
  <div class="container row align-items-center" style="background-color: #ffb7e9">
    <div class="col-12 shadow-lg pt-3 pb-3 bg-secondary rounded">
      <div class="card">
        <div class="card-body">
          <p class="card-text">
            {!! $profile->description !!}
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row d-flex justify-content-center">
          <div class="col-md-12">
              <div class="card-body">
                  <form method="POST" action="{{ route('update.profile-desc') }}">
                      {{ csrf_field() }}

                      <div class="form-group">
                          <textarea class="form-control" name="desc" id="summernote_visi">{!! $profile->description !!}</textarea>
                      </div>
                      <button type=”submit” class="btn btn-danger btn-block">Save</button>
                  </form>
                  
              </div>
          </div>
      </div>
    </div>

  </div>
  
</div>

{{-- Portofolio --}}
<div class="container">
  <div>
    @include('portofolio.portofolio')
  </div>
  
  <div>
    <p class="text-center mb-5 mt-3 h4">
      <a href="{{ route('portofolio') }}">
        <span class="badge text-light" style="background-color: #ff00cc"><i class="fa-regular fa-hand-pointer fa-lg"></i> Lihat Semuanya...</span>
      </a>
    </p>
  </div>
</div>

@endsection
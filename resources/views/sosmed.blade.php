@extends('layouts.navbar')
@section('content')
    <div>
        <div class="d-flex justify-content-center mb-5">
            <p class="h1">
                Link Sosial Media untuk ditampilkan pada Bagian Footer
            </p>
        </div>

        <form action="{{ route('update.sosmed') }}" method="post">
            {{ csrf_field() }}

            <div class="d-flex justify-content-around align-items-center">
                <div class="row container">
                    <div class="col-12 d-flex align-items-center justify-content-around mb-5">
                        <div class="col-3 text-center">
                            <i class="fa-brands fa-instagram fa-2xl" style="color: #eb6999"></i>
                        </div>
                        <div class="col-9"> 
                            <input type="text" class="form-control" placeholder="Link Instagram kamu" name="instagram" />
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-around mb-5">
                        <div class="col-3 text-center">
                            <i class="fa-brands fa-twitter fa-2xl text-primary" ></i>
                        </div>
                        <div class="col-9"> 
                            <input type="text" class="form-control" placeholder="Link Twitter kamu" name="twitter" />
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-around mb-5">
                        <div class="col-3 text-center">
                            <i class="fa-brands fa-linkedin fa-2xl" style="color: #1500ff"></i>
                        </div>
                        <div class="col-9"> 
                            <input type="text" class="form-control" placeholder="Link LinkedIn kamu" name="linkedin" />
                        </div>
                    </div>
                </div>
    
                <div class="text-center mb-5">
                    <button type="submit" class="btn" style="background-color: #0dff00; color: rgb(0, 0, 0)">Submit</button>
                </div>
            </div>


        </form>
    </div>
@endsection
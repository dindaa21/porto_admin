@extends('layouts.navbar')
@section('content')
    <div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center row">
                <div class="col-2">
                    <img src="{{ $user->image }}" alt="">
                </div>
                <div class="col-10">
                    <p class="h3">
                        {{ $user->name }}
                    </p>
                    <span class="badge bg-primary mb-3">_____________</span>
                    <div>
                        <p class="h1">
                            Contact Me
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 2rem; margin-bottom: 5rem">
            <div class="d-flex justify-content-center align-items-center row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        
                        <div class="row">
                            <div class="form-group col-5 mb-4">
                                <label>Nama
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ old('name') ? old('name') : $user->name }}"
                                    name="name" />
                            </div>
                            <div class="form-group col-5 mb-4">
                                <label>Email
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  value="{{ old('email') ? old('email') : $user->email }}"
                                    name="email" />
                            </div>

                            <div class="col-10">
                                <button type="submit" class="btn btn-primary" style="border-radius: 25px">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
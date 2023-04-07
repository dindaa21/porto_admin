@extends('layouts.navbar')

@section('content')

    <form action="{{ route('create.project') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="justify-content-center d-flex text-center row">
            <div class="col-12">
                <p><label for="image">Choose a Picture:</label>
                <input type="file" id="image" name="image" accept="image/png, image/jpeg" onchange="loadFile(event)"></p><br>
            </div>
            <div class="col-12 mb-5">
                <img width="20%" id="output"/>
            </div>
            <div class="col-4 mb-5">
                <label>Tanggal Pengerjaan Project
                    <span class="text-danger">*</span></label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
    
            <div class="col-9 text-start mb-3">
                <label>Judul
                    <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Judul Project"
                    name="title" />
            </div>
            <div class="col-9 text-start mb-3">
                <label>Deskripsi
                <div class="form-group">
                    <textarea class="form-control" name="description" id="summernote_deskripsi"></textarea>
                </div>
            </div>
    
            <div class="col-9 mb-5">
                <button type="submit" class="btn btn-primary" style="border-radius: 25px">Kirim Pesan</button>
            </div>
        </div>
    </form>

@endsection

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Hotel</h1>
            <hr>
            <form action="{{ route('hotel.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
               <div class="form-group">
                    <label for="nama">Nama Hotel :</label>
                    <input type="text" class="form-control" id="usr" name="namaHotel" value="{{$data->nama_hotel}}">
                </div>

                <div class="form-group">
                    <label for="isi">Bintang Hotel:</label>
                    <input type="number" class="form-control" id="username" name="bintangHotel" value="{{$data->bintang_hotel}}">
                </div>
                <div class="form-group">
                    <label for="password">Kota Hotel :</label>
                    <input type="text" class="form-control" id="password" name="kotaHotel" value="{{$data->kota_hotel}}">
                </div>
                 
                <div class="form-group">
                    <label for="email">Foto:</label>

                    <img src="{{ url('uploads/file/'.$data->file) }} " style=" max-height: 150px;">
                
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
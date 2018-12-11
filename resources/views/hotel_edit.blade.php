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
                    <select name="bintangHotel" class="form-control" value="{{$data->bintang_hotel}}">
                        <option value="1">Bintang 1</option>
                        <option value="2">Bintang 2</option>
                        <option value="3">Bintang 3</option>
                        <option value="4">Bintang 4</option>
                        <option value="5">Bintang 5</option>
                    </select>
                    <input type="number" class="form-control" id="username" name="bintangHotel" value="{{$data->bintang_hotel}}">
                </div>
                <div class="form-group">
                    <label for="isi">Harga Hotel:</label>
                    <input type="number" class="form-control" id="username" name="hargaHotel" value="{{$data->harga_hotel}}">
                </div>
                <div class="form-group">
                    <label for="isi">Bintang Hotel:</label>
                    <select name="fasilitasHotel" class="form-control" value="{{$data->fasilitas_hotel}}">
                        <option value="breakfast">Free Breakfast</option>
                        <option value="wifi">Free WiFi</option>
                        <option value="laundry">Free Laundry</option>
                    </select>
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
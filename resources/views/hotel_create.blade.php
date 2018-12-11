@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Hotel</h1>
            <hr>
            <form action="{{ route('hotel.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama Hotel :</label>
                    <input type="text" class="form-control" id="usr" name="namaHotel">
                </div>

                <div class="form-group">
                    <label for="bintang">Bintang Hotel:</label>
                    <select name="bintangHotel" class="form-control">
                        <option value="1">Bintang 1</option>
                        <option value="2">Bintang 2</option>
                        <option value="3">Bintang 3</option>
                        <option value="4">Bintang 4</option>
                        <option value="5">Bintang 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bintang">Harga Hotel:</label>
                    <input type="number" class="form-control" id="username" name="hargaHotel">
                </div>
                <div class="form-group">
                    <label for="bintang">Fasilitas Hotel:</label>
                    <select name="fasilitasHotel" class="form-control">
                        <option value="breakfast">Free Breakfast</option>
                        <option value="wifi">Free WiFi</option>
                        <option value="laundry">Free Laundry</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="kota">Kota Hotel :</label>
                    <input type="text" class="form-control" id="password" name="kotaHotel">
                </div>
                <div class="form-group">
                    <label for="file">Foto :</label>
                    <input type="file" class="form-control" id="file" name="file">
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
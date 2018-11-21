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
                    <input type="number" class="form-control" id="username" name="bintangHotel">
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
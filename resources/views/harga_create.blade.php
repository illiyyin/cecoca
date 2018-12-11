@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Harga</h1>
            <hr>
            <form action="{{ route('harga.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nama">Nama Hotel :</label>
                    <input type="text" class="form-control" id="usr" name="namaHotel">
                </div>
                <div class="form-group">
                    <label for="namaPenyedia">Nama Penyedia :</label>
                    <!-- <select class="form-control" name="namaPenyedia">
                        <option value="traveloka">Traveloka</option>
                        <option value="airy">Airy Room</option>
                        <option value="redDoor">Red Doors</option>
                    </select>  -->
                    <select name="namaPenyedia" class="form-control">
                        <option value="traveloka">Traveloka</option>
                        <option value="airy">Airy Room</option>
                        <option value="redDoor">Red Doors</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="nama">Harga :</label>
                    <input type="number" class="form-control" id="usr" name="hargaHotel">
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
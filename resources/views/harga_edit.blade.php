@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Harga</h1>
            <hr>
            <form action="{{ route('harga.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
               <div class="form-group">
                    <label for="nama">Nama Hotel :</label>
                    <input type="text" class="form-control" id="usr" name="namaHotel" value="{{$data->nama_hotel}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Penyedia :</label>
                    <select name="namaPenyedia" class="form-control" value="{{$data->nama_penyedia}}">
                        <option value="traveloka">Traveloka</option>
                        <option value="airy">Airy Room</option>
                        <option value="redDoor">Red Doors</option>
                    </select>
                    </div>
                <div class="form-group">
                    <label for="nama">Harga Hotel :</label>
                    <input type="number" class="form-control" id="usr" name="hargaHotel" value="{{$data->harga_hotel}}">
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
@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL HOTEL</h1><br>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                        <th colspan="8"></th>
                        <td scope="col" ><button  class="btn btn-add "><a style="color:white" href="/hotel/create">Tambah Hotel</a></button></td>
                    </tr>
                <tr>
                    <th scope="col">No.</th>
                    
                    <th scope="col">ID Hotel</th>
                    <th scope="col">Nama Hotel</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Bintang </th>
                    <th scope="col">Harga </th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Kota </th>
                    <th scope="col">Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($data as $i=>$value)
                    
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$value->id_hotel}}</th>
                    <th>{{$value->nama_hotel}}</th>
                     <th><img src="{{ url('uploads/file/'.$value->file) }}" style=" max-height: 150px;"> </th>
                    <th>{{$value->bintang_hotel}}</th>
                    <th>Rp. {{$value->harga_hotel}}</th>
                    <th>{{$value->fasilitas_hotel}}</th>
                    <th>{{$value->kota_hotel}}</th>
                    <th>
                        <form action="{{route('hotel.destroy',$value->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{route('hotel.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>                           
                        </form>
                    </th>
                    
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
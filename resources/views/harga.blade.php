@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>LIST HARGA</h1><br>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                        <th colspan="5"></th>
                        <td scope="col" ><button  class="btn btn-add "><a style="color:white" href="/harga/create">Tambah Harga</a></button></td>
                    </tr>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID Harga</th>
                    
                    <th scope="col">Nama Penyedia</th>
                    <th scope="col">Nama Hotel</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($data as $i=>$value)
                    
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$value->id_harga}}</th>
                    
                    <th>{{$value->nama_penyedia}}</th>
                    <th>{{$value->nama_hotel}}</th>
                    <th>{{$value->harga_hotel}}</th>
                    <th>
                        <form action="{{route('harga.destroy',$value->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{route('harga.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
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
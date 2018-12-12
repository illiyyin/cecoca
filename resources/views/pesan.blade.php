@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL PESANAN</h1>
            
            <br>
            
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <!-- <tr>
                        <th colspan="3"></th>
                        <td scope="col" ><button  class="btn btn-add "><a style="color:white" href="/penyedia/create">Tambah Penyedia</a></button></td>
                    </tr> -->
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID Pesanan</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">No HP Pemesan</th>
                    <th scope="col">Email Pemesan</th>
                    <th scope="col">Nama Hotel</th>
                    <th scope="col">Nama Penyedia</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($data as $i=>$value)
                    
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$value->id_pesanan}}</th>
                    <th>{{$value->nama_pemesan}}</th>
                    
                    <th>{{$value->nohp_pemesan}}</th>
                    <th>{{$value->email_pemesan}}</th>
                    <th>{{$value->hotel_pesanan}}</th>
                    <th>{{$value->penyedia_pesanan}}</th>
                    <th>{{$value->checkin}}</th>
                    <th>{{$value->checkout}}</th> 
                    <th>
                        <form action="{{route('pesan.destroy',$value->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
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
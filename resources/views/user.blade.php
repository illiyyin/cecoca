@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL User</h1><br>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID User</th>
                    
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birth</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($data as $i=>$value)
                    
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$value->id_user}}</th>
                    
                    <th>{{$value->username}}</th>
                    <th>{{$value->password}}</th>
                    <th>{{$value->email}}</th>
                    <th>{{$value->date}}</th>
                    <th>+62{{$value->phone_number}}</th>
                    <th>{{$value->address}}</th>
                    <th>
                        <form action="{{route('user.destroy',$value->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{route('user.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
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
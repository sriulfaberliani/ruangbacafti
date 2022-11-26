@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun_terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $item)
                        <tr>
                        <!-- <th scope="row">1</th> -->
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama_buku}}</td>
                        <td>{{$item->pengarang}}</td>
                        <td>{{$item->penerbit}}</td>
                        <td>{{$item->tahun_terbit}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                                        
            </div>
        </div>
    </div>
@endsection
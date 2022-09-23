@extends('layouts.base')


@section('content')
<a class="btn btn-success" href="{{ url('dinas-luar/create') }}">Add</a>
<br>
<br>

<!-- Page Heading -->

<table border="1">
    <table class=" table table-responsive">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">status asal</th>
                <th scope="col">Ket Asal</th>
                <th scope="col">kota tujuan</th>
                <th scope="col">Status pulang</th>
                <th scope="col">Ket Pulang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $key => $item)

            <tr>

                <td>{{$key + 1}} </td>
                <td>{{$item->nip}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->kota_asal}}</td>
                <td>{{$item->st_asal}}</td>
                <td>{{$item->ket_asal}}</td>
                <td>{{$item->kota_tujuan}}</td>
                <td>{{$item->st_pulang}}</td>
                <td>{{$item->ket_pulang}}</td>
                <td><a class="btn btn-info" href="{{ url('dinas-luar/edit',["id"=>$item->kd_dl]) }}">edit</a></td>
                <td><form action="{{ url('dinas-luar/delete',["id"=>$item->kd_dl]) }}" method="post">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger" type="submit">delete</button>
                </form></td>
            </tr>


            @endforeach
        </tbody>
    </table>
</table>
@endsection

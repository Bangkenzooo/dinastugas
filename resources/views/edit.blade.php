@extends('layouts.base')

@section('content')

    <div class="card" style=" width: 50rem">
        <div class="card-body">
            <h3>data</h3>
            <form action="{{ route('dinas.update' ,["id"=>$data->kd_dl]) }}" method="post">
                @csrf
                @method('PUT')
                <br>
                <label for="">NIP</label>
                <br>
                <input class="form-control" type="text" name="nip" placeholder="nip" value="{{$data->nip}}">
                <br>
                <label for="">Nama</label>
                <br>
                <input class="form-control" type="text" name="nama" placeholder="nama" value="{{$data->nama}}">
                <br>
                <label for="">Kota Asal</label>
                <br>
                <input class="form-control" type="text" name="kota_asal" placeholder="kota asal" value="{{$data->kota_asal}}">
                <br>
                <label for="">Status Asal </label>
                <br>
                <input class="form-control" type="text" name="st_asal" placeholder="status asal" value="{{$data->st_asal}}">
                <br>
                <label for="">Keterangan Asal</label>
                <br>
                <input class="form-control" type="text" name="ket_asal" placeholder="keterangan asal" value="{{$data->ket_asal}}">
                <br>
                <label for="">Kota Tujuan</label>
                <br>
                <input class="form-control" type="text" name="kota_tujuan" placeholder="kota tujuan" value="{{$data->kota_tujuan}}">
                <br>
                <label for="">Status Pulang</label>
                <br>
                <input class="form-control" type="text" name="st_pulang" placeholder="status pulang" value="{{$data->st_pulang}}">
                <br>
                <label for="">Keterangan Pulang</label>
                <br>
                <input class="form-control" type="text" name="ket_pulang" placeholder="keterangan pulang" value="{{$data->ket_pulang}}">
                <br>
                <button class="btn btn-success">submit</button>
            </form>


        </div>

    </div>

@endsection

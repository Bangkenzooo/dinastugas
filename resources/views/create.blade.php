@extends('layouts.base')

@section('content')

    <div class="card" style=" width: 50rem">
        <div class="card-body">
            <h3> data</h3>
            <form action="{{ route('dinas.store') }}" method="post">
                @csrf
                <br>
                <label class="form-label" for="">NIP</label>
                <br>
                <input class="form-control" type="text" name="nip" placeholder="nip">
                <br>
                <label class="form-label" for="">Nama</label>
                <br>
                <input class="form-control" type="text" name="nama" placeholder="nama">
                <br>

                <label class="form-label" for="">Kota Asal</label>
                <br>
                <input class="form-control" type="text" name="kota_asal" placeholder="kota asal">
                <br>
                <label class="form-label" for="">Status Asal </label>
                <br>
                <input class="form-control" type="text" name="st_asal" placeholder="status asal">
                <br>
                <label class="form-label" for="">Keterangan Asal</label>
                <br>
                <input class="form-control" type="text" name="ket_asal" placeholder="keterangan asal">
                <br>
                <label class="form-label" for="">Kota Tujuan</label>
                <br>
                <input class="form-control" type="text" name="kota_tujuan" placeholder="kota tujuan">
                <br>
                <label class="form-label" for="">Status Pulang</label>
                <br>
                <input class="form-control" type="text" name="st_pulang" placeholder="status pulang">
                <br>
                <label class="form-label" for="">Keterangan Pulang</label>
                <br>
                <input class="form-control" type="text" name="ket_pulang" placeholder="keterangan pulang">
                <br>
                <button class="btn btn-success">submit</button>
            </form>


        </div>

    </div>

@endsection

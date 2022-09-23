<html>
<center>
    <div class="card" style=" width: 50rem">
        <div class="card-body">
            <h3> data</h3>
            <form action="{{ route('dinas.store') }}" method="post">
                @csrf
                <br>
                <label for="">NIP</label>
                <br>
                <input type="text" name="nip" placeholder="nip">
                <br>
                <br>
                <label for="">Nama</label>
                <br>
                <input type="text" name="nama" placeholder="nama">
                <br>
                <br>
                <label for="">Kota Asal</label>
                <br>
                <input type="text" name="kota_asal" placeholder="kota asal">
                <br>
                <br>
                <label for="">Kota Asal</label>
                <br>
                <input type="text" name="kota_asal" placeholder="kota asal">
                <br>
                <br>
                <label for="">Status Asal </label>
                <br>
                <input type="text" name="st_asal" placeholder="status asal">
                <br>
                <br>
                <label for="">Keterangan Asal</label>
                <br>
                <input type="text" name="ket_asal" placeholder="keterangan asal">
                <br>
                <br>
                <label for="">Kota Tujuan</label>
                <br>
                <input type="text" name="kota_tujuan" placeholder="kota tujuan">
                <br>
                <br>
                <label for="">Status Pulang</label>
                <br>
                <input type="text" name="st_pulang" placeholder="status pulang">
                <br>
                <br>
                <label for="">Keterangan Pulang</label>
                <br>
                <input type="text" name="ket_pulang" placeholder="keterangan pulang">
                <br>
                <br>
                <button>submit</button>
            </form>


        </div>

    </div>
</center>

</html>
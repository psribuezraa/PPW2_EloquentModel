<table class="table table-stripped" border="1">
    <thead>
        <tr>
            <!-- <th>nomor</th> -->
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $index => $buku)
            <tr>
                <td>{{ $index + 1}}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp. ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d-m-Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<p>Jumlah buku: {{ count($data_buku) }}</p>
<p>Total harga buku: Rp. {{ number_format($data_buku->sum('harga'), 2, ',', '.') }}</p>

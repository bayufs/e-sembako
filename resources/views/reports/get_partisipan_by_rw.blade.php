<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>NIK</th>
            <th>No. Kartu</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($partisipan as $partisipan)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $partisipan->nama }}</td>
            <td>{{ $partisipan->kelamin }}</td>
            <td>{{ $partisipan->alamat }}</td>
            <td>{{ $partisipan->nik }}</td>
            <td>{{ $partisipan->no_kartu }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
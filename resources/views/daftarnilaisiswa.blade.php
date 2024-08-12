<h2>Nilai Siswa dari Seluruh Kelas Berdasarkan Nilai Tertinggi</h2>
<br>
<table border="1" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($siswa as $s)
            <td>{{ $loop->iteration }}.</td>
            <td><a href="/siswa/{{$s->id}}">{{$s->nama}}</a></td>
            <td>{{$s->kelas->nama}}</td>
            <td>{{$s->nilai}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<h2>Nilai Siswa dari Masing-Masing Kelas Berdasarkan Total Nilai Kelas Tertinggi</h2>
<table border="1" cellspacing="0">
    <thead>
        <tr>
            <th>Kelas</th>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $k)
        <tr>
            <td rowspan="{{ $siswaBerdasarkanKelas[$k->nama]->count() + 1 }}">{{ $k->nama }}</td>
            @foreach ($siswaBerdasarkanKelas[$k->nama] as $s)
            <td>{{ $s->nama }}</td>
            <td>{{ $s->nilai }}</td>
        </tr>
            @endforeach
        <tr>
            <td></td>
            <td>{{ $k->nilai }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="/tambahnilaisiswa">Masukkan Nilai Siswa</a>
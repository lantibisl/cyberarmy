Nama: {{$siswa->nama}}
<br>
<br>
<table border="1" cellspacing="0">
    <thead>
        <th>Matematika</th>
        <th>Kimia</th>
        <th>Fisika</th>
        <th>Biologi</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$siswa->matematika}}</td>
            <td>{{$siswa->kimia}}</td>
            <td>{{$siswa->fisika}}</td>
            <td>{{$siswa->biologi}}</td>
        </tr>
    </tbody>
</table>
<br>
Kelas: {{$siswa->kelas->nama}}
<br>
Total nilai: {{$siswa->nilai}}
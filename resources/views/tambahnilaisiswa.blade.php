<form action="/tambahnilaisiswa" method="POST">
    @csrf
    Nama Lengkap: 
    <input type="text" name="nama" required />
    <br>
    <br>
    Kelas: 
    {{-- <input type="text" name="kelas" required /> --}}
    <select name="id_kelas" required>
        <option value="" hidden selected></option>
        <option value="1">3A</option>
        <option value="2">3B</option>
        <option value="3">3C</option>
    </select>
    <br>
    <br>
    Matematika: 
    <input type="number" name="matematika" required />
    <br>
    <br>
    Kimia: 
    <input type="number" name="kimia" required />
    <br>
    <br>
    Fisika: 
    <input type="number" name="fisika" required />
    <br>
    <br>
    Biologi: 
    <input type="number" name="biologi" required />
    <br>
    <br>
    <button type="submit">Simpan</button>
</form>
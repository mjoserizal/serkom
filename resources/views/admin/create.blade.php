@extends("layouts.app")

@section("title")
    Tambah Mahasiswa Baru
@endsection

@section("content")
    <div class="bg-light rounded">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Mahasiswa Baru</h5>

                <div class="container mt-4">
                    <form method="post" action="{{ route("admin.store") }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="NIM">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="mb-3">
                            <label for="usia" class="form-label">Usia</label>
                            <input type="text" class="form-control" name="usia" placeholder="Usia">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">Pilih gender</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
                        <a href="{{ route("admin.index") }}" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

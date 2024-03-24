@extends("layouts.app")

@section("title")
    Edit Mahasiswa
@endsection

@section("content")
    <div class="bg-light rounded">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Mahasiswa</h5>

                <div class="container mt-4">
                    <form method="post" action="{{ route("admin.update", $mahasiswa->nim) }}">
                        @method("PUT")
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input value="{{ $mahasiswa->nama }}" type="text" class="form-control" name="nama"
                                placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input value="{{ $mahasiswa->nim }}" type="text" class="form-control" name="nim"
                                placeholder="NIM" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input value="{{ $mahasiswa->alamat }}" type="text" class="form-control" name="alamat"
                                placeholder="Alamat" required>
                            @if ($errors->has("alamat"))
                                <span class="text-danger text-left">{{ $errors->first("alamat") }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="usia" class="form-label">Usia</label>
                            <input value="{{ $mahasiswa->usia }}" type="text" class="form-control" name="usia"
                                placeholder="Usia" required>
                            @if ($errors->has("usia"))
                                <span class="text-danger text-left">{{ $errors->first("usia") }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="">Pilih gender</option>
                                <option value="L" {{ $mahasiswa->gender == "L" ? "selected" : "" }}>
                                    Laki-laki
                                </option>
                                <option value="P" {{ $mahasiswa->gender == "P" ? "selected" : "" }}>
                                    Perempuan
                                </option>
                            </select>
                            @if ($errors->has("gender"))
                                <span class="text-danger text-left">{{ $errors->first("gender") }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input value="{{ $mahasiswa->tanggal_lahir }}" type="date" class="form-control"
                                name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                            @if ($errors->has("tanggal_lahir"))
                                <span class="text-danger text-left">{{ $errors->first("tanggal_lahir") }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Update Mahasiswa</button>
                        <a href="{{ route("admin.index") }}" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

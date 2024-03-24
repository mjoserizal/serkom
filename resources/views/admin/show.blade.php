@extends("layouts.app")

@section("title")
    Show mahasiswa
@endsection

@section("content")
    <div class="bg-light rounded">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Show mahasiswa</h5>

                <div class="container mt-4">
                    <div>
                        Name: {{ $mahasiswa->nama }}
                    </div>
                    <div>
                        NIM: {{ $mahasiswa->nim }}
                    </div>
                    <div>
                        Alamat: {{ $mahasiswa->alamat }}
                    </div>
                    <div>
                        Tanggal Lahir: {{ $mahasiswa->tanggal_lahir }}
                    </div>
                    <div>
                        Gender: {{ $mahasiswa->gender }}
                    </div>
                    <div>
                        Usia: {{ $mahasiswa->usia }}
                    </div>
                    <div class="mt-4">
                        <a href="{{ route("admin.index") }}" class="btn btn-default">Back</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

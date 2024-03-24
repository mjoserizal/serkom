@extends("layouts.app")

@section("title")
    Mahasiswa List
@endsection

@section("content")
    <div class="bg-light rounded">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mahasiswa</h5>

                <div class="mt-2">
                    @include("layouts.includes.messages")
                </div>

                <div class="mb-2 text-end">
                    <a href="{{ route("admin.create") }}" class="btn btn-primary btn-sm float-right">Add user</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">#</th>
                                <th scope="col" width="15%">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col" width="10%">Alamat</th>
                                <th scope="col" width="10%">Tanggal Lahir</th>
                                <th scope="col" width="10%">Gender</th>
                                <th scope="col" width="10%">Usia</th>
                                <th scope="col" width="1%" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mahasiswa)
                                <tr>
                                    <th scope="row">{{ $mahasiswa->id }}</th>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->alamat }}</td>
                                    <td>{{ $mahasiswa->tanggal_lahir }}</td>
                                    <td>{{ $mahasiswa->gender }}</td>
                                    <td>{{ $mahasiswa->usia }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary " type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                <li><a class="dropdown-item"
                                                        href="{{ route("admin.show", $mahasiswa->nim) }}"><i
                                                            class="fas fa-user text-success"></i>
                                                        Show</a></li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route("admin.edit", $mahasiswa->nim) }}">
                                                        <i class="fas fa-edit text-primary"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="{{ route("admin.delete", $mahasiswa->nim) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this mahasiswa?')">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="fas fa-trash text-danger"></i> Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    {{-- <td><a href="{{ route("users.show", $user->id) }}"
                                            class="btn btn-warning btn-sm">Show</a>
                                    </td>
                                    <td><a href="{{ route("users.edit", $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(["method" => "DELETE", "route" => ["users.destroy", $user->id], "style" => "display:inline"]) !!}
                                        {!! Form::submit("Delete", ["class" => "btn btn-danger btn-sm"]) !!}
                                        {!! Form::close() !!}
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

@extends('master.master')
@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($getSiswa as $siswa)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->telepon }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>
                  <a href="{{ route('editData', $siswa->id) }}" class="btn btn-success btn-flat btn-sm">Edit</a>
                  <a href="{{ route('deleteData', $siswa->id)}}" class="btn btn-danger btn-flat btn-sm">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
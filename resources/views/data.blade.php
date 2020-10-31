@extends('master.master')
@section('content');
    <form action="/data" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">

        <label>Telepon</label>
        <input type="number" name="telepon" class="form-control">

        <label>Alamat</label>
        <textarea name="alamat" cols="30" rows="10"></textarea>

        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </form>
@endsection
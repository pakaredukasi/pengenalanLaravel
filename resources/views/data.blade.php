@extends('master.master')
@section('content')
    <div class="container">
       @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $item)
                   <li>{{$item}}</li>
               @endforeach
           </ul>
       </div>
       @endif

        <form action="/data" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Telpon</label>
                <input name="telepon" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input name="alamat" type="text" class="form-control">
            </div>
            <div class="form-group form-check">
            {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
            {{-- <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  @endsection
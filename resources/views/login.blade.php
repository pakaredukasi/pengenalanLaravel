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

        <form action="{{ route('postlogin') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">password</label>
                <input name="password" type="password" class="form-control">
            </div>
            <div class="form-group form-check">
            {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
            {{-- <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
  @endsection
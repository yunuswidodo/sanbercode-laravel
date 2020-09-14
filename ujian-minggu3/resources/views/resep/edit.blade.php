@extends('layouts.master');
@section('content')
<div class="p-5">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Ini Halaman Edit</h1>
    </div>
<form class="user" action="/resep/{{$query->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
      <input type="text" class="form-control form-control-user" name="nama" id="exampleInputEmail" placeholder="masukan nama" value="{{$query->nama_masakan}}">
        <br>
      <input type="text" class="form-control form-control-user" name="bahan" id="exampleInputEmail" placeholder="masukan bahan" value="{{$query->bahan}}">
        <br>
      <input type="text" class="form-control form-control-user" name="langkah" id="exampleInputEmail" placeholder="masukan langkah" value="{{$query->langkah}}">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
@extends('layouts.master');
@section('content')
<div class="p-5">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
    </div>
    <form class="user" action="/resep" method="POST">
      @csrf
      <div class="form-group">
        <input type="text" class="form-control form-control-user" name="nama" id="exampleInputEmail" placeholder="masukan nama">
        <br>
        <input type="text" class="form-control form-control-user" name="bahan" id="exampleInputEmail" placeholder="masukan bahan">
        <br>
        <input type="text" class="form-control form-control-user" name="langkah" id="exampleInputEmail" placeholder="masukan langkah">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
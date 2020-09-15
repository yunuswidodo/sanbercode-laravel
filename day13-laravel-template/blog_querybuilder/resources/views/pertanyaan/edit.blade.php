@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Post ID ke-{{$pertanyaans->id}}</h3>
        </div>
        {{-- edit update --}}
    <form role="form" action="/pertanyaan/{{$pertanyaans->id}}" method="POST">
    @csrf
    {{-- mengganti method dari POST ke PUT--}}
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">judul</label>
        {{-- old = supaya data tidak ilang ketika tidak unique || jika kosong ke param ''  || kalao ditext area seperti dibawah--}} 
      <input type="text" class="form-control" name="judul" value="{{old('judul', $pertanyaans->judul)}}" id="exampleInputEmail1" placeholder="judul pertanyaan">
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>isi</label>
        {{-- tambahan=> val bisa dilakukan didepan dengan tambah require pada element text area --}}
      <textarea type="text" class="form-control" rows="3" name="isi"  id="isi" placeholder="Enter ...">{{old('isi', $pertanyaans->isi)}}</textarea>
        {{-- pesan error val di controller --}}
        @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Edit Pertanyaan</button>
    </div>
  </form>
</div>
</div>
@endsection
@extends('adminlte.master')
@section('content')
<form role="form" action="/pertanyaan" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">judul</label>
        {{-- old = supaya data tidak ilang ketika tidak unique || jika kosong ke param ''  || kalao ditext area seperti dibawah--}} 
      <input type="text" class="form-control" name="judul" value="{{old('judul', '')}}" id="exampleInputEmail1" placeholder="judul pertanyaan">
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>isi</label>
        {{-- tambahan=> val bisa dilakukan didepan dengan tambah require pada element text area --}}
      <textarea type="text" class="form-control" rows="3" name="isi"  id="isi" placeholder="Enter ...">{{old('isi', '')}}</textarea>
        {{-- pesan error val di controller --}}
        @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
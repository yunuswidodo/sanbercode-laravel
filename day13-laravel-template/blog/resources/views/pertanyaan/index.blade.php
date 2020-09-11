@extends('adminlte.master')
@section('content')
<div class="mt-3 ml-3">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{-- ambil sesion dari redirect PertanyaanController@stroe  --}}
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New Pertanyaans</a>
          <table class="table table-bordered">
            <thead>                  
              <tr>
                <th style="width: 10px">#</th>
                <th>Judul</th>
                <th>Isi</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- ambil data dari compact --}}
              {{-- jika data tidak ada menampilkan p no post --}}
              @forelse ($pertanyaans as $key => $tanya)
                  <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$tanya->judul}}</td>
                  <td>{{$tanya->isi}}</td>
                  <td style="display:flex;">
                      {{-- ambil id  || unutk show--}}
                      <a href="/pertanyaan/{{$tanya->id}}" class="btn btn-info btn-sm">show</a>
                      {{-- untuk edit --}}
                      <a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-default btn-sm">edit</a>
                  </td>
                  </tr>
                  @empty
                  <tr>
                      <td colspan="4" align="center">No Post</td>
                  </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div> --}}
      </div>
</div>

    
@endsection
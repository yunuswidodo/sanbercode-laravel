@extends('adminlte.master')

@section('content')

<div class="mt-3 ml-3">
    {{-- <h4>{{$pertanyaans->judul}}</h4>
    <p>{{$pertanyaans->isi}}</p> --}}
    
    <div class="card card-widget">
        <div class="card-header">
          <div class="user-block">
            <img class="img-circle" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
            <span class="username"><a href="#">{{$pertanyaans->penanya->nama_lengkap}}</a></span>
          <span class="description">Shared publicly {{$pertanyaans->created_at}}</span>
          </div>
          <!-- /.user-block -->
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
              <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- post text -->
        <h3>{{$pertanyaans->judul}}</h3>
        <p>{{$pertanyaans->isi}}</p>

          <!-- Attachment -->
         
          <!-- /.attachment-block -->

          <!-- Social sharing buttons -->
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
          <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
          <span class="float-right text-muted">45 likes - 2 comments</span>
        </div>
        <!-- /.card-body -->
        <div class="card-footer card-comments">
          {{-- relasi dimodel pertanyaan method jawaban || hasmany == array --}}
          @foreach ($pertanyaans->jawaban as $jawaban)
              
        
          <div class="card-comment">
            <!-- User image -->
            <img class="img-circle img-sm" src="{{asset('adminlte/dist/img/user5-128x128.jpg')}}" alt="User Image">

            <div class="comment-text">
              <span class="username">
                {{-- model jawaban ->method profile->name tabel  --}}
               {{$jawaban->profile->nama_lengkap}}
                <span class="text-muted float-right">8:03 PM Today</span>
              </span><!-- /.username -->
              {{$jawaban->isi}}
            </div>
            <!-- /.comment-text -->
          </div>
          <!-- /.card-comment -->
          @endforeach
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            {{-- $pertanyaans --}}
            {{-- {{route('jawaban.store', ['jawaban' =>  $pertanyaans->id ])}} --}}
        <form action="/jawaban/{{$pertanyaans->id}}" method="POST">
            @csrf
            <img class="img-fluid img-circle img-sm" src="{{asset('adminlte/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->

            <div class="img-push">
              <input type="text" name="isi" class="form-control form-control-sm"  placeholder="Press enter to post comment">
            </div>
            <input type="submit" value="jawab" class="btn btn-sm btn-primary">
          </form>
        </div>
        <!-- /.card-footer -->
      </div>
    
</div>
@endsection
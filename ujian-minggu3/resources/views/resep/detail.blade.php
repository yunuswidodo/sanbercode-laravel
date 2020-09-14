@extends('layouts.master')
@section('content')
<h1>RESEP</h1>
<h4>{{$query->nama_masakan}}</h4>
<p>{{$query->bahan}}</p>
<p>{{$query->langkah}}</p>
@endsection

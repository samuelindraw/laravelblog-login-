@extends('layouts.main')
@section('container')
<h1>KUNTUL</h1>
<h3>{{ $name }}</h3>
<h3>{{ $email }}</h3>
<img src="img/{{ $image }}" alt="gambar1" width="200">      
@endsection
  

@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
	<p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == "Paulo")
<p>O nome é Paulo e ele tem {{ $idade }} anos.</p>
@else
<p>O nome não é Pedro, o nome é {{ $nome }}</p>
@endif

@for($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }}</p>
@endfor

@foreach($nomes as $nome)
<p>{{ $loop->index + 1 }}- {{ $nome }}</p>
@endforeach

@php
	$name = "João";
	echo $name;
@endphp

<!-- comtário HTML -->
{{-- Este é o comentário do Blade --}}


@endsection
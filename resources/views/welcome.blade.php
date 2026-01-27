@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <img src="/img/banner.jpg" alt="banner">
    <h1>algum título</h1>
    @if(10 > 4)
         <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Pedro")
    <p> O nome é Pedro</p>
    @elseif($nome == "Luis")
    <p> Meu nome é {{ $nome }} e eu tenho {{ $idade }} anos e trabalho como {{ $profissao }}
    @else
    <p> O nome não é Pedro</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if($i == 2)
        <p>O i é 2</p>
        @endif
    @endfor

    @php
        $name = 'João';
        echo $name;
    @endphp

    <!-- comentário de html -->
    {{-- Este é o comentário do blade --}}

    @foreach($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach
    
@endsection

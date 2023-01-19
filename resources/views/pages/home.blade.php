@extends('layouts.app', ['pageTitle' => config("app.name"). ' - Home'])



@section('content')

<main class="main">
    <h1>
        {{ config('app.name') }}
    </h1>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, consequatur at aliquid blanditiis tempore
        nam laudantium amet. Iusto at, repudiandae tempore totam,
        ea praesentium nostrum, mollitia dolor molestias ad quisquam?
    </p>

    <img src="{{ asset('/img/flag.png') }}" alt="logo pays">

    <p>
        Il est {{ date('H:i') }}
    </p>
</main>
@endsection
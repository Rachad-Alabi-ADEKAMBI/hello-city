@extends('app')

@section('title')
{{ config('app.name') }} Home

@endsection

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

    <p>
        Il est {{ date('H:i') }}
    </p>
</main>
@endsection
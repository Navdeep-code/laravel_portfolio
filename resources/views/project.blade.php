
@extends ('layout.frontend', ['title' => $myproject->title])

@section ('content')

<section class="w3-padding">

    <h2 class="w3-text-blue">{{$myproject->title}}</h2>

    @if ($myproject->image)
        <div class="w3-margin-top">
            <img src="{{asset('storage/'.$myproject->image)}}" width="400">
        </div>
    @endif

    <p><{{$myproject->content}}</p>

    @if ($myproject->url)
        View Project: <a href="{{$myproject->url}}">{{$myproject->url}}</a>
    @endif

    <p>
        Posted: {{$myproject->date->format('M j, Y')}}
        <br>
        Type: {{$myproject->type->title}}
    </p>

    <a href="/">Back to Home</a>

</section>

@endsection

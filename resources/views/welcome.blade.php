@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    <ul>
        @foreach ($skills as $skill)
            <li>{{$skill->Name}}</li>
        @endforeach
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($myprojects as $myproject)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$myproject->title}}</h3>

            </div>
            
            @if ($myproject->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$myproject->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($myproject->url)
                    View Project: <a href="{{$myproject->url}}">{{$myproject->url}}</a>
                @endif

                <p>
                    Posted: {{$myproject->date}}
                    <br>
                    Type: {{$myproject->type->title}}
                </p>

                <a href="/myprojects/{{$myproject->id}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

@endsection

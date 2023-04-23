@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Project</h2>

    <form method="post" action="/console/myprojects/edit/{{$myproject->id}}" novalidate class="w3-margin-bottom">

    @csrf

<div class="w3-margin-bottom">
    <label for="title">Title:</label>
    <input type="title" name="title" id="title" value="{{old('title', $myproject->title)}}" required>
    
    @if ($errors->first('title'))
        <br>
        <span class="w3-text-red">{{$errors->first('title')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{old('content', $myproject->content)}}</textarea>

    @if ($errors->first('content'))
        <br>
        <span class="w3-text-red">{{$errors->first('content')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="url">URL:</label>
    <input type="url" name="url" id="url" value="{{old('url', $myproject->url)}}">

    @if ($errors->first('url'))
        <br>
        <span class="w3-text-red">{{$errors->first('url')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="date">DATE:</label>
    <input type="date" name="date" id="date" value="{{old('date', $myproject->date)}}">

    @if ($errors->first('date'))
        <br>
        <span class="w3-text-red">{{$errors->first('date')}}</span>
    @endif
</div>


<div class="w3-margin-bottom">
            <label for="type_id">TYPE:</label>
            <select name="type_id" id="type_id">
                <option disabled>CHOOSE</option>
                @foreach($types as $type)
                    <option value="{{$type->id}}"
                        {{$type->id == old('type_id', $myproject->type_id) ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Project</button>

    </form>

    <a href="/console/myprojects/list">Back to Project List</a>

</section>

@endsection

@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Experience</h2>

    <form method="post" action="/console/experience/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="Company">Company:</label>
            <input type="text" name="Company" id="Company" value="{{old('Company')}}" required>
            
            @if ($errors->first('Company'))
                <br>
                <span class="w3-text-red">{{$errors->first('Company')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Title">Title:</label>
            <input type="text" name="Title" id="Title" value="{{old('Title')}}" required>
            
            @if ($errors->first('Title'))
                <br>
                <span class="w3-text-red">{{$errors->first('Title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Start">Start:</label>
            <input type="date" name="Start" id="Start" value="{{old('Start')}}" required>
            
            @if ($errors->first('Start'))
                <br>
                <span class="w3-text-red">{{$errors->first('Start')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="End">End:</label>
            <input type="date" name="End" id="End" value="{{old('End')}}" required>
            
            @if ($errors->first('End'))
                <br>
                <span class="w3-text-red">{{$errors->first('End')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Location">Location:</label>
            <input type="text" name="Location" id="Location" value="{{old('Location')}}" required>
            
            @if ($errors->first('Location'))
                <br>
                <span class="w3-text-red">{{$errors->first('Location')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Description">Description:</label>
            <input type="text" name="Description" id="Description" value="{{old('Description')}}" required>
            
            @if ($errors->first('Description'))
                <br>
                <span class="w3-text-red">{{$errors->first('Description')}}</span>
            @endif
        </div>
        <button type="submit" class="w3-button w3-green">Add Experience</button>

    </form>

    <a href="/console/experience/list">Back to Experience List</a>

</section>

@endsection
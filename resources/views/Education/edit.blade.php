@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="/console/education/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="Degree">Degree:</label>
            <input type="text" name="Degree" id="Degree" value="{{old('Degree', $education->Degree)}}" required>
            
            @if ($errors->first('Degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('Degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Discipline">Discipline:</label>
            <input type="text" name="Discipline" id="Discipline" value="{{old('Discipline', $education->Discipline)}}" required>
            
            @if ($errors->first('Discipline'))
                <br>
                <span class="w3-text-red">{{$errors->first('Discipline')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Institute">Institute:</label>
            <input type="text" name="Institute" id="Institute" value="{{old('Institute', $education->Institute)}}" required>
            
            @if ($errors->first('Institute'))
                <br>
                <span class="w3-text-red">{{$errors->first('Institute')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Location">Location:</label>
            <input type="text" name="Location" id="Location" value="{{old('Location', $education->Location)}}" required>
            
            @if ($errors->first('Location'))
                <br>
                <span class="w3-text-red">{{$errors->first('Location')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Started_at">Started_at:</label>
            <input type="date" name="Started_at" id="Started_at" value="{{old('Started_at', $education->Started_at)}}" required>
            
            @if ($errors->first('Started_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('Started_at')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="Ended_at">Ended_at:</label>
            <input type="date" name="Ended_at" id="Ended_at" value="{{old('Ended_at', $education->Ended_at)}}" required>
            
            @if ($errors->first('Ended_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('Ended_at')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

@endsection
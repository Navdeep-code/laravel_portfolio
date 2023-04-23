@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Degree</th>
            <th>Discipline</th>
            <th>Insitute</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($education as $educations): ?>
            <tr>
                <td>{{$educations->Degree}}</td>
                <td>{{$educations->Discipline}}</td>
                <td>{{$educations->Institute}}</td>
                <td><a href="/console/education/edit/{{$educations->id}}">Edit</a></td>
                <td><a href="/console/education/delete/{{$educations->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection
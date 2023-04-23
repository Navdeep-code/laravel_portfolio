@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Experience</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Company</th>
            <th>Title</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($experience as $experiences): ?>
            <tr>
                <td>{{$experiences->Company}}</td>
                <td>{{$experiences->Title}}</td>
                <td>{{$experiences->Description}}</td>
                <td><a href="/console/experience/edit/{{$experiences->id}}">Edit</a></td>
                <td><a href="/console/experience/delete/{{$experiences->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/experience/add" class="w3-button w3-green">New Experience</a>

</section>

@endsection
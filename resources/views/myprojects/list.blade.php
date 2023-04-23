@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage My Projects</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
    <tr class="w3-red">
            <th>Title</th>
            <th>Type</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($myprojects as $myproject): ?>
            <tr>
                <td>{{$myproject->title}}</td>
                <td>{{$myproject->type->title}}</td>
                <td>{{ \Carbon\Carbon::parse($myproject->date)->format('d/m/Y g:i:s A')}}</td>
                <td><a href="/console/myprojects/image/{{$myproject->id}}">Image</a></td>
                <td><a href="/console/myprojects/edit/{{$myproject->id}}">Edit</a></td>
                <td><a href="/console/myprojects/delete/{{$myproject->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/myprojects/add" class="w3-button w3-green">New Project</a>

</section>

@endsection
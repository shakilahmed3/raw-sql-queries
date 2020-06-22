<h1>All Student</h1>

<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Roll</th>
        <th>Class</th>
    </tr>
    @foreach ($studentInfo as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->First_Name}}</td>
            <td>{{$item->roll}}</td>
            <td>{{$item->class}}</td>
        </tr>
    @endforeach
</table>

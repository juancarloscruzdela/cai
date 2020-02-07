<div class="card" style="overflow:hidden;">
    <div class="card-header">Student Table</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                    <th scope="row"><a href="/students/view/{{$student->id}}">{{ $student->id }}</a></th>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->middleName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->firstName }} {{ $student->middleName }} {{ $student->lastName }}</td>
                        <td>{{ $student->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>View Student</title>
  </head>
  <body>
    <x-layout/>
    <div class="conatiner" style="margin-top:25px;">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <!-- <th>Address</th> -->
                    <th>dob</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['email']}}</td>
                        <!-- <td>{{$student['gender']}}</td> -->
                        <td>{{$student['address']}}</td>
                        <td>{{$student['dob']}}</td>
                        <td>
                            <a href="{{route('student.delete', ['id'=> $student->student_id])}}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                            <a href="{{route('student.edit', ['id'=> $student->student_id])}}">
                            <button class="btn btn-primary">Update</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>
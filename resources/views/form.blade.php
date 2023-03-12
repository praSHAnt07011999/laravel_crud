<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="{{url('/')}}/register" method="post">
      @csrf
        <div class='container'>
            <h1 class="text-center">Registration</h1>
            <x-input type="text" name="name" label="Name"/>
            <x-input type="email" name="email" label="Email"/>

            <p>Gender</p>
            <div style="display:flex; flex-direction:row;">
              <input type="radio" id="male" name="gender" value="M" style="margin-right:5px;">
              <label for="male" style="margin-right:10px;">Male</label><br>
              <input type="radio" id="female" name="gender" value="F" style="margin-right:5px;">
              <label for="female" style="margin-right:10px;">Female</label><br>
              <input type="radio" id="other" name="gender" value="O" style="margin-right:5px;">
              <label for="other" style="margin-right:10px;">Other</label>
            </div>

            <x-input type="text" name="address" label="Address"/>
            <x-input type="date" name="dob" label="DOB"/>
            <x-input type="password" name="password" label="Password"/>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
  </body>
</html>
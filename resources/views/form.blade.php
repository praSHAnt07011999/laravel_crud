<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>{{$title}}</title>
  </head>
  <body>
    <x-layout/>
    <h1>"{{print_r($url)}}"</h1>
    <form action="{{$url}}" method="post" style="margin-top:25px;">
      @csrf
        <div class='container'>
            <h1 class="text-center">{{$title}}</h1>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describeby="helpId" value="{{$student->name}}"/>
              <span class="text-danger">
                  <!-- @error('email')
                      {{$message}}
                      @enderror -->
              </span>
              <!-- <small id="helpId" class="text-muted">Help Text</small> -->
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" id="" class="form-control" placeholder="" aria-describeby="helpId" value="{{$student->email}}"/>
              <span class="text-danger">
                  <!-- @error('email')
                      {{$message}}
                      @enderror -->
              </span>
              <!-- <small id="helpId" class="text-muted">Help Text</small> -->
            </div>
            <p>Gender</p>
            <div style="display:flex; flex-direction:row;">
              <input type="radio" id="male" name="gender" value="M" style="margin-right:5px;"
                {{$student->gender == "M" ? "checked" : ""}}
              />
              <label for="male" style="margin-right:10px;">Male</label><br>
              <input type="radio" id="female" name="gender" value="F" style="margin-right:5px;"
              {{$student->gender == "F" ? "checked" : ""}}
              />
              <label for="female" style="margin-right:10px;">Female</label><br>
              <input type="radio" id="other" name="gender" value="O" style="margin-right:5px;"
              {{$student->gender == "O" ? "checked" : ""}}
              />
              <label for="other" style="margin-right:10px;">Other</label>
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="address" id="" class="form-control" placeholder="" aria-describeby="helpId" value="{{$student->address}}"/>
              <span class="text-danger">
                  <!-- @error('email')
                      {{$message}}
                      @enderror -->
              </span>
              <!-- <small id="helpId" class="text-muted">Help Text</small> -->
            </div>
            <div class="form-group">
              <label for="">DOB</label>
              <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describeby="helpId" value="{{$student->dob}}"/>
              <span class="text-danger">
                  <!-- @error('email')
                      {{$message}}
                      @enderror -->
              </span>
              <!-- <small id="helpId" class="text-muted">Help Text</small> -->
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="" aria-describeby="helpId" value="{{$student->password}}"/>
              <span class="text-danger">
                  <!-- @error('email')
                      {{$message}}
                      @enderror -->
              </span>
              <!-- <small id="helpId" class="text-muted">Help Text</small> -->
            </div>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
  </body>
</html>
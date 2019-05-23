<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-6">
                  <h1 class="text-center py-2">Register Yourself Here ...</h1>
                  @if ($errors->any())
                  
                  @endif
                 
                {{Form::open(array('url' => '/registers','method'=>'post' ))}}
                <div class="form-group">
                    {{Form::label('firstname', 'Enter First Name')}}
                    {{Form::text('firstname',null,array('class'=>"form-control $errors->has('firstname') ?'is-invalid':''"))}}
                    @error('firstname')
                      <span class="text-danger">{{$message}}</span>
                    @endError()
                </div>
                <div class="form-group">
                  {{Form::label('lastname', 'Enter First Name')}}
                <input type="text" name="lastname" id="ls" class="form-control {{$errors->has('lastname') ? 'is-invalid' : ''}}">
                <div class="invalid-feedback">    
                  @error('lastname')
                    {{$message}}
                  @endError()
                </div>
              </div>
              <div class="form-group">
                {{Form::label('password', 'Enter First Name')}}
              <input type="password" name="password" id="ls" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}">
                @error('password')
                  <span class="text-danger">{{$message}}</span>
                @endError()
            </div>
            <div class="form-group">
              {{Form::label('password_confirmation', 'Enter First Name')}}
            <input type="password" name="password_confirmation" id="ls" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}">
            
            @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
              @endError()
          </div>
            <div class="form-group">
              {{Form::label('dob', 'Enter First Name')}}
            <input type="date" value="{{old('dob')}}" name="dob" id="ls" class="form-control {{$errors->has('dob') ? 'is-invalid' : ''}}">
                @error('dob')
                  <span class="text-danger">{{$message}}</span>
                @endError()
            </div>
            <div class="form-group">
              {{Form::label('email', 'Email')}}
            <input type="text" value="{{old('email')}}" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}">
                @error('email')
                  <span class="text-danger">{{$message}}</span>
                @endError()
            </div>
            <div class="form-group">
              {{Form::label('contact', 'Email')}}
            <input type="text" value="{{old('contact')}}" name="contact" id="contact" class="form-control {{$errors->has('contact') ? 'is-invalid' : ''}}">
                @error('contact')
                  <span class="text-danger">{{$message}}</span>
                @endError()
            </div>
                {{Form::submit('Submit',array('class'=>'btn btn-primary'))}}
                {{Form::close()}}
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
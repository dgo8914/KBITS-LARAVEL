<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kbits packs registration</title>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
<!-- Navigation Bar TBD -->
    <nav class="navbar fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="/">Kbits</a>
    </nav>
    <div >
        </div>
        @if(session('success'))
           <div class="alert alert-success">
             {{ session('success') }}
           </div>
        @endif
        <div class="form-signin">  
            {!! Form::open(['route'=>'packRegistrationForm']) !!}
            <!--pack name-->
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Pack name:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Pack Name']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            <!--description-->
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Description:') !!}
                    {!! Form::text('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Enter the description']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
            <!--image-->   
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-label-group">
                    {!! Form::label('Image:') !!}
                    {!! Form::text('image', old('image'), ['class'=>'form-control', 'placeholder'=>'Add a picture']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
            <!--author-->    
                <!--<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <div class="form-label-group">
                    {!! Form::label('Author  id:') !!}
                    {!! Form::text('author_id', old('author_id'), ['class'=>'form-control', 'placeholder'=>'Enter author id']) !!}
                    </div>
                    <span class="text-danger">{{ $errors->first('author_id') }}</span>
                </div>-->
                <div class="form-group">
                    <button class="btn btn-success">ADD PACK</button>
                    <a class="navbar-brand" href="home">HOME</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>    
</body>
</html>
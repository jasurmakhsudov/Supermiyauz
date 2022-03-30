<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "icon" href = "{{ URL::asset('image/icon.png') }}" type = "image/x-icon">
	<title>Login Page</title>
</head>
<style>
body {
	 background-color: #9f9da7;
	 font-size: 1.6rem;
	 font-family: "Open Sans", sans-serif;
	 color: #2b3e51;
}

 #login-form-wrap {
	 background-color: #fff;
     width: 35vw;
	 margin: 10% auto;
	 text-align: center;
	 padding: 20px 0 0 0;
	 border-radius: 4px;
	 box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
}
@media screen and (max-width: 1065px) {
    #login-form-wrap {
        width: 70vw;
    }
}
@media screen and (max-width: 500px) {
    #login-form-wrap {
        width: 100%;
    }
}
 #login-form {
	 padding: 0 60px;
}
 input {
	 display: block;
	 box-sizing: border-box;
	 width: 100%;
	 outline: none;
	 height: 60px;
	 line-height: 60px;
	 border-radius: 4px;
}
 input[type="text"], input[type="password"] {
	 width: 100%;
	 padding: 0 0 0 10px;
	 border: 1px solid #c2c0ca;
	 font-size: 20px;
}
 input[type="submit"] {
	 border: none;
	 display: block;
	 background-color: #3ca9e2;
	 color: #fff;
	 font-weight: bold;
	 text-transform: uppercase;
	 cursor: pointer;
	 transition: all 0.2s ease;
	 font-size: 18px;
	 text-align: center;
}
 input[type="submit"]:hover {
	 background-color: #329dd5;
	 transition: all 0.2s ease;
}
 #create-account-wrap {
	 background-color: #eeedf1;
	 color: #8a8b8e;
	 font-size: 14px;
	 width: 100%;
	 padding: 10px 0;
	 border-radius: 0 0 4px 4px;
}
 
</style>
<body>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    
    <div id="login-form-wrap">
        <h2>Login</h2>
        @if(session('errors'))
            <span class="text-danger">{{ session('errors') }}</span>
		@elseif(session('success'))
			<span class="text-success">{{ session('success') }}</span>
        @endif
        <form method="POST" id="login-form" action="{{ route('login.custom') }}">
          @csrf
          <p>
            <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone" required
            autofocus>
          </p>
          <p>
            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
          </p>
          {{-- <input type="checkbox" name="remember"> Remember Me --}}
		  <p><a href="{{route('forget-password')}}">Parolni qayta tiklash</a></p>
          <p>
            <input type="submit" id="login" value="Login">
          </p>
        </form>
        <div id="create-account-wrap">
          <p></p>
        </div>
      </div>

</body>
</html>
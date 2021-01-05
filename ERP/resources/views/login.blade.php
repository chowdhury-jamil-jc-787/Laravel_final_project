<!DOCTYPE HTML>
<html>

<head>
  <title>Log in page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('website/style/style.css')}}" /> --}}
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Welcome to Winteam-Tech!</h1>
          <h2>Log in</h2>
        </div>
      </div>
    
    <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          {{-- <li class="selected"><a href="{{route('login.passrecover')}}">Recover Password</a></li> --}}
        </ul>
      </div>
    </div>
    
    <form method="post">
        @csrf
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
      
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
    <div id="sidebar_container">
        
        <div class="sidebar">
     
        </div>
        
      </div>
      <div id="content">
        Usertype:
        <select name="usertype">
        <option value="admin">Admin</option>
        <option value="employee">Manager</option>
        <option value="Customer">House Owner</option>
        <option value="Deliveryman">Customer</option>
        
        </select> <br> <br>
        
    Username:  <input type="text" required name="uname" > <br><br>
    Password:  <input type="password" required name="password" ><br><br>
    <input type="submit" name="submit" value="login" ><br> <br>
      </div>
    </div>
   <a href="/signup">Create an account</a>
    <h3 style="color: red">
        {{session('msg')}}
    </h3>
    </form>
      <div id="footer">
    

      </div> 
    </div>
  </div>
</body>
</html>

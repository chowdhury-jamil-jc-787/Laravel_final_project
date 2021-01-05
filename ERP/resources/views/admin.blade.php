<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">
</head>
<body>
    <p>Hi, This is {{ session()->get('uname') }}</p>
    <p></p>
    <a href="{{route('logout')}}">logout</a>
    {{-- {{print_r($user)}} --}}
    {{-- <td><input type="text" name="fname" value="{{$user->role}}" required></td> --}}
    <div class="navbar">
        <div class="navbar-inner">
            {{-- <a id="logo" href="/">Single Malt</a> --}}
            <ul class="nav">
            
                <li><a href="/products">Products</a></li>
                <li><a href="/invoice">Pdf</a></li>
                <li><a href="/laravel-json">json</a></li>
                <li><a href="/employees">employees</a></li>
                <li><a href="/customers">Customers</a></li>
                <li><a href="/live_search">live search</a></li>
                <li><a href="/sendemail">mail</a></li>
                <li><a href="/api/data">Api integration</a></li>
                <li><a href="/posts">Guzzle</a></li>

                {{-- <li class="selected"><a href="{{route('admin.list1')}}">Customers</a></li>
                <li class="selected"><a href="{{route('admin.list2')}}">House Owners</a></li>
                <li class="selected"><a href="{{route('admin.list3')}}">Available Houses</a></li>
                <li class="selected"><a href="{{route('admin.list4')}}">Rented Houses</a></li>
                <li class="selected"><a href="{{route('admin.add')}}">Create New Manager Account</a> </li>
                <li class="selected"><a href="{{route('admin.edit')}}">Edit Profile</a></li>
                <li class="selected"><a href="{{route('logout')}}"> Logout</a> </li>
            </ul> --}}
        </div>
    </div>
</body>
</html>
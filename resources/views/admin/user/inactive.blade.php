<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMIS::Admin</title>
</head>
<body>
<div>
    <h1>
        List of Inactive Users
    </h1>
</div>
@if(session()->has('message'))
<div class="m-auto  w-4/5">
<p class="m-auto text-gray-600 text-center text-extrabold  bg-green-200 py-4 rounded-2xl">
    {{session()->get('message')}}
</p>
</div>
@endif
@if(Auth::check())
<div class="m-auto w-4/5 pt-15">
<ul>
    <li>
        {{}}
    </li>
</ul>
</div>
@endif
   

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name="csrf-token" content="{{csrf_token()}}">
<title>@yield('title', 'Image CRUD')</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
   <main class="mt-5">
      @yield('content')
   </main>
</body>

</html>
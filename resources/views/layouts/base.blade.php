<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style> 
    .button {
  width: 15px;
  height: 15px;
  display: inline-block;
  padding: 1px;
  cursor: pointer;
  border: solid 1px #fff;
}
 
.button:hover {
  border: solid 1px #f00;
}
 
.button:active {
  border: solid 1px #ff0;
}
 
#palette, #canvas {
  display: inline-block;
  border: solid 1px #aaa;
  cursor: default;
  vertical-align: top;
}
 
#palette {
  width: 200px;
}
 
#clear {
  background: #eee;
  color: #777;
  padding: 10px;
  width: 200px;
  text-align: center;
  margin: 15px auto;
  cursor: pointer;
}
 
.container {
   white-space: normal;
   width: 710px;
}</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>@yield('page-title', "Tasks")</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.header')
           @yield('content')
        @include('includes.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>
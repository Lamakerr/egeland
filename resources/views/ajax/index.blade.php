<html lang="en">
<head>
    <title>Laravel Ajax jquery </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<div class="container panel panel-default ">
        <h2 class="panel-heading">Laravel Ajax jquery Validation</h2>
    <form id="contactForm" action="{{route('ajax.store')}}">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name">
        </div>

        <div class="form-group">
            <input type="text" name="soname" class="form-control" placeholder="Enter soname" id="soname">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="email" id="email">
        </div>

        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
        @csrf
    </form>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

   <script>

    $('#contactForm').on('submit',function(event){
        event.preventDefault();

        let name = $('#name').val();
        let soname = $('#soname').val();
        let email = $('#email').val();
  
        $.ajax({
          url: "{{route('ajax.store')}}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            name:name,
            soname:soname,
            email:email,
          },
          success:function(response){
            console.log(response);
          },
         });
        });
      </script>
 </body>
</html>
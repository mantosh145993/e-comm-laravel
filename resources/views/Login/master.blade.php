<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <title>Ecomm-Project</title>
</head>
<body>
    {{View::make('Login.header')}}
    @yield('content')
    {{View::make('Login.footer')}}

</body>
<style>
    .custome-login{
        height: 500px;
        padding-top: 100px;
    }
</style>
<script>
    // $(document).ready(function()
    // {
    //     $("button").click(function()
    //     {
    //         alert('Ok')

    //     })
    // })
</script>
</html>
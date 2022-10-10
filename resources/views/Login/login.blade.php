@extends('Login.master')
@section('content')
<div class="container custome-login" >
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form  method="post">
          @csrf
            <div>
                <span>Email</span>
                <input type="text" name="email" class="form-control" placeholder="email">
              </div>
              
              <div >
                <span>Password</span>
                <input type="password" name="password" class="form-control" placeholder="password">
              </div>
              
              <div><br>
                <span>Submit</span>
                <button class="btn btn-success" type="submit" value="submit" name="submit">Login</button>
              </div>
        </form>
    </div>
    </div>
</div>
@endsection

<script>
  function myFunction(){
    alert('Hello');
  }
</script>


@extends('Login.master')
@section('content')
<div class="container custome-login" >
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form>
            <div>
                <span>Email</span>
                <input type="text" class="form-control" placeholder="email">
              </div>
              
              <div >
                <span>Password</span>
                <input type="password" class="form-control" placeholder="password">
              </div>
              
              <div><br>
                <span>Submit</span>
                <button class="btn btn-succes" type="submit" value="submit" name="submit">Login</button>
              </div>
        </form>
    </div>
    </div>
</div>
@endsection


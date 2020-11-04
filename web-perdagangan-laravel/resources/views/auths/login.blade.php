<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <form action="{{ route('login_process') }}" method="post">
        {{ csrf_field() }}
   <!--      <table>
            <tr>
                <th style="text-align: left">Nama</th>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
            <tr>
                <th style="text-align: left">password</th>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table> -->
        <div class="container d-flex justify-content-center">
            <div class="d-flex flex-column justify-content-between">
                <div class="card mt-3 p-5"><img src="">
                    <div>
                        <p class="mb-1">Choose Your</p>
                        <h4 class="mb-5 text-white">Favourite wristwatch!</h4>
                    </div> <button class="btn btn-primary btn-lg"><small>Don't have an account ?</small><span>&nbsp;Sign Up</span> </button>
                </div>
                <div class="card two bg-white px-5 py-4 mb-3">
                    <div class="form-group"><input type="text" class="form-control" name="name" required><label class="form-control-placeholder" for="mail">Nama</label></div>

                    <div class="form-group"><input type="password" name="password" class="form-control" required><label class="form-control-placeholder" for="name">Password</label></div>

                    <button class="btn btn-primary btn-block btn-lg mt-1 mb-2" type="submit"><span>SIGN IN<i class="fas fa-long-arrow-alt-right ml-2"></i></span></button>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/style/style.css') }}" />
    <title>Login</title>
</head>
<body class="text-center">
@if($errors->any())

<h1 style="color: red; background: blue; ">

{{ $errors->first() }}

</h1>
@endif
    <main class="form-signin w-50 m-auto">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h1 class="h3 mb-100 fw-normal">Silahkan Masuk</h1>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <h1>
            <button class="w-50 btn btn-lg btn-primary" type="submit">Masuk</button>
            </h1>
        </form>
        <!-- <p><b>Belum Punya Akun?</b></p>
        <a class="w-50 btn btn-lg btn-success" href="{{ url('registrasi') }}">Daftar</a>
        <a class="w-50 btn btn-lg btn-info mt-2" href="{{ url('/') }}">Kembali ke Halaman</a> -->
    </main>
</body>
</html>
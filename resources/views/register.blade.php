<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" name="email"
                            aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Already Account ? <a
                                href="{{ route('login') }}">Login</a></label>
                    </div>
                    <button type="submit" class="btnSubmit">
                        <span>Register</span>
                    </button>
                </form>

                {{-- <div class="cardAuth">
                    <h2>CARD</h2>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>

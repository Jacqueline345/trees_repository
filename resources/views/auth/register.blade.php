<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{assert('assets/style.css')}}">

</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="{{route('registrar')}}" method="post">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="lastname" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Lastname</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="phone_number" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Phone number</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="address" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Address</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="country" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Country</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg" name="password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form3Example4cdg" name="repeat"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>
                                    <label class="form-label" for="form3Example1cg">Role</label>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                    <select name="role" id="role">
                                        <option value="amigo">Amigo</option>
                                        <option value="operador">Operador</option>
                                        <option value="admin">Administrador</option>
                                    </select>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('login')}}"
                                            class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
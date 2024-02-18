<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> Login Study Expo </title>
    <link href="style/styles.css" rel="stylesheet" />
    <link href="https://ppdb.prestasiprima.sch.id/assets/assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-4/assets/css/login-4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-GLhlTQ8iNl4DkByiz3P/CmJ53QfGT++pz2Utbpa0kLXL5mz5lTzM5Pa9Pb4W8jz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-GLhlTQ8iNl4DkByiz3P/CmJ53QfGT++pz2Utbpa0kLXL5mz5lTzM5Pa9Pb4W8jz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-dRpbz7zjRglGGUnE4A5f5QXe59viV38z/zioM/u4Z+6LrwT5yzjKd8kCZHv7EdFd" crossorigin="anonymous">


</head>

<body class="nav-fixed">
    <!-- Login 4 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
                <div class="row g-0">
                    <div class="col-12 col-md-4">
                        <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                            src="img/login.png" alt="BootstrapBrain Logo">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Log in Study Expo</h3>
                                    </div>
                                </div>
                            </div>
                            <!--<form action="#!">
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="name@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="remember_me"
                                                id="remember_me">
                                            <label class="form-check-label text-secondary" for="remember_me">
                                                Keep me logged in
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary" type="submit">Log in now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>-->
                            <!--  <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="#!" class="link-secondary text-decoration-none">Create new account</a>
                                        <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                                    </div>
                                </div>
                            </div>-->
                            <div class="row">
                                <div class="col-12">
                                    <p style="color: red;"> * Login Harus Memakai Akun Google Sekolah !</p>
                                    <br>
                                    <div class="d-flex gap-3 flex-column flex-xl-row">
                                        <a href="{{ route('auth.google') }}" class="btn bsb-btn-xl btn-outline-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                            </svg>
                                            <span class="ms-2 fs-6">Google</span>
                                        </a>
                                        <br>




                                        <button
                                            onclick="window.location.href='https://drive.google.com/file/d/1jQTLxCUyNiIzo3-7_xeH9T__1nrSkG4i/view?usp=drive_link'"
                                            class=" btn btn-primary btn-lg">
                                            <span class="ms-2 fs-6">Manual Book</span>

                                        </button>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6"><b>Copyright © <a
                                            href="https://www.instagram.com/ibrbbra?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Ibra</a>
                                        & <a
                                            href="https://www.instagram.com/e_erlanggaa?igsh=OGQ5ZDc2ODk2ZA==">Erlangga</a>
                                        2024</b></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('error'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops..",
            text: "Anda Harus Memakai Akun Sekolah",
        });
        </script>
    @endif
</body>
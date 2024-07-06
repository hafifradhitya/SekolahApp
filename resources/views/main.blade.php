<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SekolahApp</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top py-3">
        <div class="container">
            <a href="" class="navbar-brand">WhiteRoom</a>

            <button class="navbar-toggler"
                data-bs-toggle="offcanvas" data-bs-target="#navmenu" aria-controls="navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="offcanvas offcanvas-end" tabindex="-1" id="navmenu" aria-labelledby="navmenu">
                <div class="offcanvas-header">
                  <h5 id="offcanvasRightLabel">Menu</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#about" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#promo" class="nav-link">Promo</a>
                            </li>
                            <li class="nav-item me-5">
                                <a href="#contact" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary shadow btn-login ms-2" data-bs-toggle="modal" data-bs-target="#modallogin">Login</button>
                            </li>
                        </ul>
                </div>
        </div>
    </nav>


    <!-- header start -->

    <section class="pt-5 pb-5 pb-lg-0 mt-5 bg-light text-dark text-center text-sm-start">
        <div class="container">
            <div  class="d-flex align-items-center">
                <div>
                    <h1><span class="text-primary">Mari</span> menjadi Perfect Human, <span class="text-primary">Mari</span> Belajar</h1>
                    <p class="lead">Yuk kita belajar, menuntut ilmu, mencari jadi diri dan mempunyai banyak teman-teman. Jadi, Mari Belajar.</p>
                    <button
                    type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalregister"
                        class="btn btn-primary btn-lg"
                    >
                    Yuk Daftar!
                    </button>
                </div>
                <img class="img-fluid w-50 d-none d-lg-block"
                src="{{ url('assets/img/header.svg') }}" alt="header">
            </div>
        </div>
    </section>

    <!-- header end -->


    <!-- about start -->
    <section id="about" class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-dark border">
                        <img src="{{ url('assets/img/murid.svg') }}" class="p-2 card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Murid</h5>
                          <p class="card-text">Kami mempunyai para murid-murid yang berprestasi dan mempunyai kemampuan dibidangnya masing-masing</p>
                          <a href="#" class="btn btn-primary">Lihat Murid</a>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card bg-info text-light border-0">
                        <img src="{{ url('assets/img/ujianonline.svg') }}" class="p-2 card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Ujian Online</h5>
                          <p class="card-text">Ujian untuk para murid-murid agar lebih menyenangkan dan tidak membosankan saat test</p>
                          <a href="#" class="btn btn-secondary">History Ujian</a>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark border">
                        <img src="{{ url('assets/img/guru.svg') }}" class="p-2 card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Guru</h5>
                          <p class="card-text">Kami juga mempunyai guru berpengalaman. Daftarkan diri anda, jika anda berminat untuk menjadi guru dari bagian kami</p>
                          <a href="#" class="btn btn-primary">Daftar Guru</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->


    <!-- promo start -->
    <section class="bg-primary text-light p-5" id="promo">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3>Dapatkan promo menarik</h3>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkkan Email Anda">
                    <button class="btn btn-dark btn-lg" type="button">Submit</button>
                </div>
            </div>
        </div>
    </section>
    <!-- promo end -->


    <!-- contact us start -->
    <div class="p-5" id="contact">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Us</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <i class="bi bi-geo-alt"></i>
                            <span class="fw-bold">Location:</span>
                            <br>Jalan Doang Jadian Kaga, 11
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-telephone"></i>
                            <span class="fw-bold">Mobile Phone:</span>
                            <br>(+62) 812-2353-9286
                        </li>

                        <li class="list-group-item">
                            <i class="bi bi-instagram"></i>
                            <span class="fw-bold">Instagram:</span>
                            <br>@whiteroom
                        </li>

                        <li class="list-group-item">
                            <i class="bi bi-envelope"></i>
                            <span class="fw-bold">E-Mail:</span>
                            <br>whiteroomofficial@maribelajar.com
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <img class="img-fluid d-none d-sm-block" src="{{ url('assets/img/contact.svg') }}" alt="contact">
                </div>
            </div>
        </div>
    </div>
    <!-- contact us end -->


    <!-- footer -->

    <!-- modalLogin -->

    <!-- Modal -->
    <div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered animate__animated animate__bounceInUp">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modallogin">Mari Bergabung</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-ajax" action="{{ url('login') }}">
                @csrf
                <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="nisn" class="form-control" placeholder="Masukkan nisn">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <!-- modalLogin end -->


    <!-- modalRegister -->

    <!-- Modal -->
    <div class="modal fade" id="modalregister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg animate__animated animate__jackInTheBox">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalregister">Mari Daftar Sekarang!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                    </div>
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-4">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              L
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              P
                            </label>
                          </div>
                    </div>
                    <label for="birth_date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="date" name="birth_date" class="form-control" placeholder="Masukkan Tanggal Lahir">
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label for="birth_place" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-4">
                        <input type="text" name="birth_place" class="form-control" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat">
                    </div>
                    {{-- <label for="birth_date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="date" name="birth_date" class="form-control" placeholder="Masukkan Tanggal Lahir">
                    </div> --}}
                </div>
                <div class="mb-3 row align-items-center">
                    <label for="number" class="col-sm-2 col-form-label">Nomor</label>
                    <div class="col-sm-4">
                        <input type="text" name="number" class="form-control" placeholder="Masukkan Nomor Telephone">
                    </div>
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-4">
                        <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN">
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label for="nisn" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <label for="nisn" class="col-sm-2 col-form-label">Minat Jurusan</label>
                    <div class="col-sm-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>-- Pilih --</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Daftar</button>
            </div>
        </div>
        </div>
    </div>
    <!-- modalRegister end -->

    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2024 WhiteRoom.com</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/sweetalert2.js') }}"></script>
    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.form-ajax').each(function() {
                $(this).bind('submit', function(e) {
                    e.preventDefault();
                    let form = $(this);
                    //console.log(form);
                    $.ajax({
                        url: form.prop('action'),
                        data: new FormData(this),
                        cache: false,
                        async: false,
                        type: 'post',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            console.log(data);
                            if (data.success == false) {
                                Swal.fire({
                                    icon: 'error',
                                    title: data.message,
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                            } else {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: "Anda Berhasil Login",
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result)=>{
                                    console.log(result);
                                    document.location = data.url;
                                });

                            }
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>

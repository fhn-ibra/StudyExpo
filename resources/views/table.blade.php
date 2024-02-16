<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Study Expo | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="style/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer=""
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">
    @include('components.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">

                        <div class="sidenav-menu-heading">Custom</div>
                        <!-- Sidenav Accordion (Pages)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i data-feather="grid"></i></div>
                            Kelas
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link" href="pricing.html">Sesi 1</a>
                                <a class="nav-link" href="invoice.html">Sesi 2</a>
                            </nav>
                        </div>
                        <!-- Sidenav Link (Tables)-->
                        <a class="nav-link active" href="tables.html">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            Pendaftar
                        </a>
                    </div>
                </div>
                <!-- Sidenav Footer-->
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">Admin</div>
                    </div>
                </div>
            </nav>
        </div>


        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="layout"></i></div>
                                        Tabel Pendaftar
                                    </h1>
                                </div>
                            </div>
                        </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Extended DataTables</div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>No. Telp</th>
                                        <th>Sesi 1</th>
                                        <th>Sesi 2</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>No. Telp</th>
                                        <th>Sesi 1</th>
                                        <th>Sesi 2</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Farhan Ibra A</td>
                                        <td>XI PPLG 3</td>
                                        <td>0081217291</td>
                                        <td>ABC</td>
                                        <td>abc</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Muhammad Erlangga W</td>
                                        <td>X BCF 1</td>
                                        <td>081212873</td>
                                        <td>ABC</td>
                                        <td>abc</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer-admin mt-auto footer-light" style="background-color:rgb(255, 255, 255);">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6"><b>Copyright © Ibra & Erlangga 2024</b></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables/datatables-simple-demo.js"></script>

    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"85671c0028468216","version":"2024.2.0","token":"6e2c2575ac8f44ed824cef7899ba8463"}'
        crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Nasabah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <style>
    .pagetitle {
        padding: 20px;
        background-color: #f0f0f0;
        border-bottom: 1px solid #ddd;
    }

    .welcome-message {
        margin-top: 20px;
        padding: 20px;
        background-color: #eaf7ff;
        border: 1px solid #b3e0ff;
        border-radius: 5px;
    }

    .welcome-message h2 {
        color: #007bff;
    }

    .welcome-message p {
        margin-bottom: 10px;
    }
</style>
</head>
<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Cashless</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('pegawaiprofile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="dropdown-item d-flex align-items-center" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="{{ route('pegawai.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('pegawai.perhitungankoin') }}">
            <i class="bi bi-coin"></i>
          <span>Perhitungan Uang koin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cash"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('pegawai.transaksiharian') }}">
              <i class="bi bi-circle"></i><span>Transaksi Harian</span>
            </a>
          </li>
          <li>
            <a href="{{ route('pegawai.riwayattransaksi') }}">
              <i class="bi bi-circle"></i><span>Riwayat Transaksi</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-clipboard2-data"></i><span>Manajemen Nasabah</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('pegawai.datanasabah') }}">
              <i class="bi bi-circle"></i><span>Data Nasabah</span>
            </a>
          </li>
          <li>
          <li>
          </li>
        </ul>
      </li>
      <li class="nav-heading">cassless aplication</li>
    </ul>
  </aside>
  <main id="main" class="main">

    <div class="row">
        <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Data Nasabah</h5>
                    <div class="d-flex align-admins-center">
                        <div class="card-icon rounded-circle d-flex align-admins-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            @if(isset($totalnasabah))
                            @if($totalnasabah > 0)
                                <p>Total nasabah: {{ $totalnasabah }}</p>
                            @else
                                <p>Tidak ada data nasabah.</p>
                            @endif
                        @else
                            <p>Data nasabah belum tersedia.</p>
                        @endif
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Data Nasabah <span>| Terdaftar</span></h5>
                      <!-- Move the button here, above the table -->
                      <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary" id="tambahModal" data-toggle="modal" data-target="#tambahdatanasabah">
                            Tambah Data Nasabah
                        </button>
                    </div>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Nasabah</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Gender</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nasabah as $n)
                            <tr>
                                <td>{{ $n->Id_nasabah }}</td>
                                <td>{{ $n->nama_nasabah }}</td>
                                <td>{{ $n->alamat }}</td>
                                <td>{{ $n->gender }}</td>
                                <td>{{ $n->no_hp }}</td>
                                <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $n->Id_nasabah }}">
                                            <i class="oi oi-pencil"></i> Update
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ $n->Id_nasabah }}">
                                            <i class="oi oi-trash"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>
  </main>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
@if(session('success'))
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
<script>
    $(document).ready(function(){
        // Ketika tombol "Tambah Data Admin" diklik, tampilkan modal
        $('#tambahModal').click(function(){
            $('#tambahModal').modal('show');
        });
    });
</script>
<!-- Modal Tambah -->
<div class="modal fade" id="tambahdatanasabah" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModal">Tambah Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('nasabah.tambah') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_nasabah">Nama Nasabah</label>
                        <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach ($nasabah as $n)
<!-- Modal Update -->
<div class="modal fade" id="updateModal-{{ $n->Id_nasabah }}" tabindex="-1" aria-labelledby="updateModalLabel-{{ $n->Id_nasabah }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel-{{ $n->Id_nasabah }}">Update Data Nasabah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/updatenasabah/' . $n->Id_nasabah) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_nasabah" class="form-label">Nama Nasabah</label>
                        <input type="text" class="form-control" id="nama_nasabah-{{ $n->Id_nasabah }}" name="nama_nasabah" value="{{ $n->nama_nasabah }}" required maxlength="35">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat-{{ $n->Id_nasabah }}" name="alamat" rows="3" required maxlength="50">{{ $n->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender-{{ $n->Id_nasabah }}" name="gender" required>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="text" class="form-control" id="no_hp-{{ $n->Id_nasabah }}" name="no_hp" value="{{ $n->no_hp }}" maxlength="15">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
    <!-- Modal Hapus -->
  @foreach ($nasabah as $n)
  <div class="modal fade" id="hapusModal-{{ $n->Id_nasabah }}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
          <form action="/hapusnasabah/{{ $n->Id_nasabah }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</body>
</html>

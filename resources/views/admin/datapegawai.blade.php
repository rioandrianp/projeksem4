<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="header fixed-top d-flex align-admins-center">
    <div class="d-flex align-admins-center justify-content-between">
      <a href="index.html" class="logo d-flex align-admins-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Cashless</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="search-bar">
      <form class="search-form d-flex align-admins-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-admins-center">
        <li class="nav-admin d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <li class="nav-admin dropdown">
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
            <li class="notification-admin">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-admin">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-admin">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="notification-admin">
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
        <li class="nav-admin dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-admin d-flex align-admins-center" href="{{ route('adminprofile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-admin d-flex align-admins-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-admin d-flex align-admins-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="dropdown-admin d-flex align-admins-center" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-admin">
        <a class="nav-link " href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-admin">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Pengelolaan Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('admin.datapegawai') }}">
              <i class="bi bi-circle"></i><span>Data Pegawai</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.datanasabah') }}">
              <i class="bi bi-circle"></i><span>Data Nasabah</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-admin">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('laporan.index') }}">
                  <i class="bi bi-circle"></i><span>Pencarian Laporan</span>
                </a>
              </li>

          <li>
          </li>
        </ul>
      </li>
      <li class="nav-heading">cassless aplication</li>
    </ul>
  </aside>
  <main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pegawai</h5>
                        <div class="d-flex align-admins-center">
                            <div class="card-icon rounded-circle d-flex align-admins-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                @if(isset($totalpegawai))
                                @if($totalpegawai > 0)
                                    <p>Total pegawai: {{ $totalpegawai }}</p>
                                @else
                                    <p>Tidak ada data pegawai.</p>
                                @endif
                            @else
                                <p>Data pegawai belum tersedia.</p>
                            @endif
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
                        <h5 class="card-title">Data pegawai <span>| Terdaftar</span></h5>
                           <!-- Move the button here, above the table -->
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary" id="tambahModal" data-toggle="modal" data-target="#tambahdatapegawai">
                                Tambah Data Pegawai
                            </button>
                        </div>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama Pegawai</th>
                                    <th scope="col">Tahun Masuk</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pegawai as $p)
                                <tr>

                                    <td>{{ $p->Id_pegawai }}</td>
                                    <td>{{ $p->nama_pegawai }}</td>
                                    <td>{{ $p->tahun_masuk }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $p->Id_pegawai }}">
                                                <i class="oi oi-pencil"></i> Update
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ $p->Id_pegawai }}">
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
  <a href="#" class="back-to-top d-flex align-admins-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
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
<script>
    $(document).ready(function(){
        console.log('jQuery Loaded');
    });
</script>

@foreach ($pegawai as $p)
<!-- Modal Update -->
<div class="modal fade" id="updateModal-{{ $p->Id_pegawai }}" tabindex="-1" aria-labelledby="updateModalLabel-{{ $p->Id_pegawai }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel-{{ $p->Id_pegawai }}">Update Data Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/updatepegawai/' . $p->Id_pegawai) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai-{{ $p->Id_pegawai }}" name="nama_pegawai" value="{{ $p->nama_pegawai }}" required maxlength="35">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                        <input type="number" class="form-control" id="tahun_masuk-{{ $p->Id_pegawai }}" name="tahun_masuk" value="{{ $p->tahun_masuk }}" required min="1900" max="{{ date('Y') }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat-{{ $p->Id_pegawai }}" name="alamat" rows="3" required maxlength="50">{{ $p->alamat }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


<script>
    $(document).ready(function() {
        let adminId;

        // Tangkap ID admin saat modal akan ditampilkan
        $('#hapusdataadmin').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget); // Tombol yang memicu modal
            adminId = button.data('id'); // Dapatkan ID dari atribut data-id tombol
            console.log('admin ID untuk dihapus: ', adminId);
        });

        // Tangani klik pada tombol konfirmasi hapus
        $('#konfir').click(function() {
            $.ajax({
                url: '/admin/delete/' + adminId, // Sesuaikan URL endpoint
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}' // Sertakan CSRF token
                },
                success: function(response) {
                    Swal.fire({
                        title: 'Terhapus!',
                        text: 'Data berhasil dihapus.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        $('#hapusdataadmin').modal('hide');
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Terjadi kesalahan saat menghapus data.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>
<!-- Modal Tambah -->
<div class="modal fade" id="tambahdatapegawai" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModal">Tambah Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action={{ route('pegawai.tambah') }} method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_masuk">Tahun Masuk</label>
                        <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" min="1900" max="2099" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" maxlength="255" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal Update --}}
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="updateId" name="Id_admin">
                    <div class="form-group">
                        <label for="update_nama_admin">Nama Admin</label>
                        <input type="text" class="form-control" id="update_nama_admin" name="nama_admin" required>
                    </div>
                    <div class="form-group">
                        <label for="update_alamat">Alamat</label>
                        <input type="text" class="form-control" id="update_alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="update_gender">Gender</label>
                        <select class="form-control" id="update_gender" name="gender" required>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_no_hp">Nomor HP</label>
                        <input type="text" class="form-control" id="update_no_hp" name="no_hp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
  </div>

    <!-- Modal Hapus -->
  @foreach ($pegawai as $p)
  <div class="modal fade" id="hapusModal-{{ $p->Id_pegawai}}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
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
          <form action="/hapuspegawai/{{ $p->Id_pegawai }}" method="POST">
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

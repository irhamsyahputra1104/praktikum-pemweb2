@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Data Paramedik</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Paramedik</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Paramedik</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Kategori</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>Unit Kerja ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_paramedik as $paramedik)
                                <tr>
                                    <td>{{ $paramedik->id }}</td>
                                    <td>{{ $paramedik->nama }}</td>
                                    <td>{{ $paramedik->gender }}</td>
                                    <td>{{ $paramedik->tmp_lahir }}</td>
                                    <td>{{ $paramedik->tgl_lahir }}</td>
                                    <td>{{ $paramedik->kategori }}</td>
                                    <td>{{ $paramedik->telpon }}</td>
                                    <td>{{ $paramedik->alamat }}</td>
                                    <td>{{ $paramedik->unit_kerja_id }}</td>
                                    <td>
                                        <a class="btn btn-info"
                                            href="view_pasien.php?id=<?= $paramedik['id'] ?>">View</a>
                                        <a class="btn btn-success"
                                            href="form_paramedik.php?idedit=<?= $paramedik['id'] ?>">Edit</a>
                                        <a class="btn btn-danger"
                                            href="delete_paramedik.php?iddel=<?= $paramedik['id'] ?>"
                                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $paramedik['nama'] ?>?')) {return false}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Paramedik
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
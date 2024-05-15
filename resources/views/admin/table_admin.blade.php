@extends('component.template_admin')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Admin</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Study</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Study</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($DataUser as $datauser)
                                @if ($Data->jabatan->name !== 'User' && $Data->jabatan->name !== 'Pengajar')
                                    <tr>
                                        <td>{{ $datauser->nama_lengkap }}</td>
                                        <td>{{ $datauser->jabatan->name }}</td>
                                        <td>{{ $datauser->pekerjaan }}</td>
                                        <td>{{ $datauser->gender }}</td>
                                        <td>{{ $datauser->usia }}</td>
                                        <td>{{ $datauser->tahap }}</td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

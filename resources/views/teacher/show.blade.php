@extends('layouts.layout')
@section('crumb', 'Guru')
@section('crumb1', 'Dashboard')
@section('name', $name)
@section('role', $role)

@section('sidebar')
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('present.index') }}">
                    <i class="bi bi-book"></i>
                    <span>Presensi</span>
                </a>
            </li><!-- End Presensi Nav -->

            <li class="nav-item">
                <a class="nav-link " href="{{ route('teacher.index') }}">
                    <i class="bi bi-person-circle"></i>
                    <span>Guru</span>
                </a>
            </li><!-- End Guru Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('subject.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Mapel</span>
                </a>
            </li><!-- End Mapel Nav -->

        </ul>

    </aside><!-- End Sidebar-->
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-6">
                    <h5 class="card-title">Data Detail Guru</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="{{ route('teacher.edit', $teacherDetail->id) }}" type="button" class="btn btn-warning"><i class="bi bi-plus me-1"></i> Edit</a>
                </div>
            </div>

            <div class="mb-5">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Guru</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="{{ $teacherDetail->name_teacher }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Total Hadir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="{{ $present }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Total Tidak Hadir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" disabled value="{{ $absent }}">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                {{-- <th scope="col">Nama Guru</th> --}}
                                <th scope="col">Ke</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kehadiran</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Topik</th>
                                <th scope="col">Total Murid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacherPresent as $present)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    {{-- <td>{{ $present->teacher_p }}</td> --}}
                                    <td>{{ $present->meet_p }}</td>
                                    <td>{{ $present->date_p }}</td>
                                    <td>{{ $present->attend_p }}</td>
                                    <td>{{ $present->class_p }}</td>
                                    <td>{{ $present->subject_p }}</td>
                                    <td>{{ $present->topic_p }}</td>
                                    <td>{{ $present->student_p }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
@endsection

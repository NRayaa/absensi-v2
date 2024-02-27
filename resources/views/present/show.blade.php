@extends('layouts.layout')
@section('crumb', 'Presensi')
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
                <a class="nav-link " href="{{ route('present.index') }}">
                    <i class="bi bi-book"></i>
                    <span>Presensi</span>
                </a>
            </li><!-- End Presensi Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('teacher.index') }}">
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
            <h5 class="card-title">Detail Presensi</h5>

            <!-- Default Table -->
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Nama Guru</th>
                        <td>{{$detailPresent->teacher_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Kehadiran</th>
                        <td>{{$detailPresent->attend_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Kelas</th>
                        <td>{{$detailPresent->class_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Pertemuan Ke-</th>
                        <td>{{$detailPresent->meet_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal</th>
                        <td>{{$detailPresent->date_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mapel</th>
                        <td>{{$detailPresent->subject_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Topik</th>
                        <td>{{$detailPresent->topic_p}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Jumlah Murid</th>
                        <td>{{$detailPresent->student_p}}</td>
                    </tr>
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection

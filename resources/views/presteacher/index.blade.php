@extends('layouts.layout')
@section('crumb', 'Presensi')
@section('crumb1', 'Dashboard')
@section('name', $name)
@section('role', $role)

@section('sidebar')
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('presteacher.index') }}">
                    <i class="bi bi-book"></i>
                    <span>Presensi</span>
                </a>
            </li><!-- End Presensi Nav -->

        </ul>

    </aside><!-- End Sidebar-->
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title">Data Presensi</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="{{ route('presteacher.create') }}" type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Buat Presensi</a>
                </div>
            </div>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kehadiran</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Ke-</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Topik</th>
                        <th scope="col">J Murid</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($presentTeacher as $present)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$present->attend_p}}</td>
                            <td>{{$present->class_p}}</td>
                            <td>{{$present->meet_p}}</td>
                            <td>{{$present->date_p}}</td>
                            <td>{{$present->subject_p}}</td>
                            <td>{{$present->topic_p}}</td>
                            <td>{{$present->student_p}}</td>
                            <td><a href="{{route('presteacher.show', $present->id)}}" type="button" class="btn btn-warning">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
@endsection

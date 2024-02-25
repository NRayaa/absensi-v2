@extends('layouts.layout')
@section('crumb', 'Dashboard')
@section('crumb1', 'Dashboard')

@section('sidebar')
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('present.index')}}">
                <i class="bi bi-book"></i>
                <span>Presensi</span>
            </a>
        </li><!-- End Presensi Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{route('teacher.index')}}">
                <i class="bi bi-person-circle"></i>
                <span>Guru</span>
            </a>
        </li><!-- End Guru Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('subject.index')}}">
                <i class="bi bi-people"></i>
                <span>Mapel</span>
            </a>
        </li><!-- End Mapel Nav -->

    </ul>

</aside><!-- End Sidebar-->
@endsection

@section('content')
    Testing Dashboard
@endsection

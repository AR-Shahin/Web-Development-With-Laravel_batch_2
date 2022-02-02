@extends('layouts.backend_app')
<!-- Navbar -->
@includeIf('backend.inc.navbar')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@includeIf('backend.inc.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @yield('breadcumb')
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        @yield('master_content')
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0
  </div>
</footer>

<!-- Control Sidebar -->
@includeIf('backend.inc.right')
<!-- /.control-sidebar -->
</div>

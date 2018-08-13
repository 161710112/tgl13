@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Buku</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Data Buku</div>
                <br>
                <h2 class="panel-title">&nbsp&nbspBuku</h2>
<p> &nbsp&nbsp&nbsp<a class="btn btn-primary" href="{{ url('/admin/books/create') }}">Tambah</a>
<a class="btn btn-primary" href="{{ url('/admin/export/books') }}">Export</a>
<div class="card-body">
{!! $html->table(['class'=>'table-striped']) !!}
</div>
</div>
</div>
</div>
</div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection
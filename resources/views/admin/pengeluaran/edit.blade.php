@extends('layouts.app')
@section('title', 'Sancho | Dashboard')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header">
                                <strong>Edit Form</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ url('/showpengeluaran/', $dataPengeluaran->id)}}" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" value="{{ $dataPengeluaran->tanggal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" value="{{ $dataPengeluaran->deskripsi}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Pengeluaran</label>
                                        <input type="text" name="pengeluaran" class="form-control" value="{{ $dataPengeluaran->pengeluaran}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Pembayaran</label>
                                        <input type="text" name="pembayaran" class="form-control" value="{{ $dataPengeluaran->pembayaran}}">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
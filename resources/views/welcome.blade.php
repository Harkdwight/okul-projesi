@extends('layouts.app')
@section('content')<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href={{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet"/>
</head>
<body>
<div class="container">
    <h1> Pc Toplama Sihirbazı</h1>
    <div id="gather-right-panel" class="container">
        <div class="row">
            <div class="col">
                <div class="heading">
                    <h4 class="text-center">Seçici</h4>
                </div>
            </div>
            <div class="col-3">
                <div class="heading">
                    <h4 class="text-center">Listem</h4>
                </div>
                <div class="container border rounded pt-2">
                    <div class="col">
                        <div class="col">
                            <span class="col-form-label">Ekran karti</span>
                            <p class="fw-bold" style="margin-left: 10%">MSI GTX 1060ti</p>
                        </div>
                        <div class="col">
                            <span class="col-form-label">Ekran karti</span>
                            <p class="fw-bold" style="margin-left: 10%">MSI GTX 1060ti</p>
                        </div>
                        <div class="col">
                            <span class="col-form-label">Ekran karti</span>
                            <p class="fw-bold" style="margin-left: 10%">MSI GTX 1060ti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection

@extends('layouts.template')

@section('content')
    <style>
        .content-wrapper {
            padding: 20px;
            background-color: #f5f5f5; /* Ubah latar belakang menjadi silver */
        }

        .welcome-heading {
            font-family: 'Manrope', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 28px;
            line-height: 38px;
            color: #8D8D8D;
            margin-bottom: 10px;
        }

        .text-black {
            color: #000;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #fff; /* Hapus latar belakang transparan di card */
        }

        .card-title {
            color: #333;
            font-size: 20px;
            font-weight: bold;
        }

        .card-subtitle {
            color: #666;
            font-size: 16px;
        }

        .chartjs-wrapper {
            position: relative;
            width: 100%;
            padding-top: 20px;
        }
    </style>

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <h1 class="welcome-heading">SELAMAT DATANG, <span class="text-black fw-bold">ADMIN</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Area Chart -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body" style="background-color: #b9dfbd;">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title">SELAMAT DATANG DI SISTEM INFORMASI KAS RT</h4>
                                <h5 class="card-subtitle mb-4">INI ADALAH DASHBOARD ADMIN</h5>
                            </div>
                        </div>
                        <div class="chartjs-wrapper">
                            <canvas id="performanceLine"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

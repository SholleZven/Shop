@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Прогноз погоды</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Главная</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    @if($weatherData)
                                        <div class="weather-info">
                                            <p><strong>Температура:</strong> {{ $weatherData['temperature'] }}</p>
                                            {{-- <p><strong>Описание:</strong> {{ $weatherData['description'] }}</p> --}}
                                        </div>
                                    @else
                                        <p>Информация о погоде недоступна.</p>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

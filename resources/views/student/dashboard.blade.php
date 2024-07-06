@extends('student.layout')

@section('content')

<div class="card">
    <div class="card-header">
        MYDashboard
    </div>
    <div class="card-body">
        <h5 class="card-title">Ini adalah DashboardKU</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <button type="button" class="btn btn-info">Info</button>
        <hr>
        <div class="container">
            <div class="row align-items-start">
              <div class="col">
                <div class="card">
                    <div class="card-body">
                        DATA MURID
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-body">
                        DATA SOAL
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-body">
                        DATA HASIL UJIAN
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

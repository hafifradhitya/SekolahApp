@extends('student.layout')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Data Murid
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="text-center">No</th>
                    <th class="text-center">NISN</th>
                    <th class="text-center">Nama Murid</th>
                    <th class="text-center">Jk</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Jurusan</th>
                    <th class="text-center">Email</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($students as $student)
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td class="text-center">{{ $student->nisn }}</td>
                        <td class="text-center">{{ $student->name }}</td>
                        <td class="text-center">{{ $student->gender }}</td>
                        <td class="text-center">{{ $student->class }}</td>
                        <td class="text-center">{{ $student->major }}</td>
                        <td class="text-center">{{ $student->email }}</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $students->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>


@endsection

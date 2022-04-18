@extends('layout.template')
@section('title')
    BRUHH DETAIL
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="{{ asset('template/dist/css/argon-dashboard.css?v=2.0.2') }}" rel="stylesheet" />

    <style>
        .table1,
        .td {
            text-align: center;
            margin: auto;
            margin-top: -1%;
            font-weight: 600;
        }

        .td {
            font-weight: bold;
        }

        .modal-title {
            margin-left: auto;
        }

    </style>
    <div class="content-wrapper">
        <div class="container">
            <a href="/student" class="btn btn-primary mt-3"><i class="bi bi-arrow-return-left"></i> Kembali</a>
            <div class="card">
                <div class="modal-content mb-3 mt-1">
                    <div class="container">
                        <div class="text-center mt-4">
                            <h1><b>Detail</b></h1>
                        </div>
                        <div class="card-body">
                            <table class="table1">
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('photostudent/' . $post->photo) }}" alt=""
                                                style="width: 120px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 20px">{{ $post->name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 20px">{{ $post->email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 30px">{{ $post->gender }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 30px">{{ $post->nomor_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 20px">{{ $post->address }}</td>
                                    </tr>
                                    <tr>
                                        <td style=" font-size: 55px">{{ $post->motto }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.admin-layout')
@section('main-content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    <div class="container-fluid ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Partnership Subject</th>
                <th scope="col">Review</th>
                {{--                <th scope="col">Active</th>--}}
                {{--                <th></th>--}}
                {{--                <th></th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach ($feedbackPartnerships as $feedbackPartnership )
                <tr>
                    <td>{{ $feedbackPartnership->id}}</td>
                    <td>{{ $feedbackPartnership->name }}</td>
                    <td>{{ $feedbackPartnership->email }}</td>
                    <td>{{ $feedbackPartnership->partnership_id}}</td>
                    <td>{{ $feedbackPartnership->partnership_review }}</td>
                    {{--                    <td>{{ App\seminar_register::$_statusActiveSeminarRegister[$registerSeminar->active] }}</td>--}}
                    {{--                    <td><a class="btn-edit-seminar" href="#">--}}
                    {{--                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>--}}
                    {{--                        </a></td>--}}
                    {{--                    <td><a class="btn-edit-seminar" href="{{url('admin/deleteSeminarRegister/'.$registerSeminar->seminar_register_id)}}" onclick="return confirm('Are you sure ?')">--}}
                    {{--                            <i class="fa fa-trash-o fa-1x"  style="color: white"aria-hidden="true"></i>--}}
                    {{--                        </a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $feedbackPartnerships -> Links() !!}
    </div>
@endsection

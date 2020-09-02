@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col col-lg-12">
                <div class="card">
                    <div class="card-header">RHC Membership</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @unlessrole('player')
                        There are no players added to your account please add one to confirm you are a member<br><br>
                        @endunlessrole
                        <a href="{{ route('account') }}"><button class="btn btn-primary btn-lg btn-block">Account</button></a><br>
                        @role('player')
                        <button class="btn btn-primary btn-lg btn-block">COVID-19 Guidance</button><br>
                        <button class="btn btn-primary btn-lg btn-block">Club News</button><br>
                        <button class="btn btn-primary btn-lg btn-block">Membership Fees</button>
                        @endrole
                        @role('admin')

                        <hr><br>
                        <a href="{{ route('admin.list') }}"><button class="btn btn-warning btn-lg btn-block">Captains List Players</button></a>
                    @endrole

                    </div>
                </div>
            </div>
        </div>

@endsection

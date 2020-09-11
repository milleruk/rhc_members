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

                        @role('captain')
                        <hr><br>
                        <a href="{{ route('admin.list') }}"><button class="btn btn-warning btn-lg btn-block">Captains List Players</button></a>
                    @endrole

                    @role('committee')
                    <hr><br>
                    <a href="{{ route('admin.list') }}"><button class="btn btn-warning btn-lg btn-block">Full List Players</button></a>
                     @endrole

                    </div>
                </div>
            </div>
        </div>

@endsection

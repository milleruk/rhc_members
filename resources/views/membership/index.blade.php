@extends('layouts.app', ['title' => 'Account'])

@section('content')
    <div class="row">
        <div class="col col-lg-12">
            <div class="card">
                <div class="card-header">RHC Membership</div>

                <div class="card-body">


                    <br>The following players are listed under your account<br><bR>
                    <table class="table table-striped">
                        <thead>
                            <td>Name</td>
                            <td>Membership Type</td>
                            <td>Date Of Birth</td>
                            <td>Emergency Details</td>
                            <td colspan=2>Actions</td>
                        </thead>
                        <tbody>

                            @forelse ($memberData as $data)

                                <tr>
                                    <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                    <td>{{ $data->membershiptype }}</td>
                                    <td>{{ $data->date_of_birth }}</td>
                                    <td>{{ $data->emg_name }} <br> {{ $data->emg_con_number }}</td>
                                    <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                                    <td><a href="/membership/remove/{{ $data->id }}"><button type="button"
                                                class="btn btn-warning btn-sm">Remove</button></a></td>
                                </tr>
                            @empty
                                <br>No Registered players are on this account please add one<br><br>
                            @endforelse

                        </tbody>
                    </table>

                    <a href="/membership/addchild"><button type="button" class="btn btn-primary">Add Under
                            16</button></a>
                    <a href="/membership/addsenior"><button type="button" class="btn btn-primary">Add
                            Senior</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection

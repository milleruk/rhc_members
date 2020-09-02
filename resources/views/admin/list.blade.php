@extends('layouts.app', ['title' => 'About'])

@section('content')
        <div class="row">
            <div class="col col-lg 12">
                <div class="card">
                    <div class="card-header">RHC Membership</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <br>The following players are listed that you have avalaible<br><bR>

                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Player Name</th>
                                    <th>Address</th>
                                    <th>Date of Birth</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>

                        @forelse ($childData as $data)




                            <tr>
                                <td>{{  $data->first_name  }}</td>
                                <td>{{  $data->address }}</td>
                                <td>{{  $data->date_of_birth  }}</td>
                                <td><a href="/membership/addchild"><button type="button" class="btn btn-primary">Info</button></a></td>
                              </tr>




                        @empty
                            <br>No Registered players are on this account please add one<br><br>
                        @endforelse

                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>



@endsection

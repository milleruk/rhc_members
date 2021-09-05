@extends('layouts.app', ['title' => 'About'])

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <div class="row">
        <div class=col-lg-12><a href="{{ route('account') }}"><button type="button" class="btn btn-warning btn-sm">Back to Account Managment</button></a></div>
        <br><br>
        @foreach ($editAccountView as $data)
        <div class="col-lg-12">
            @if ($data->updated_at < Carbon\Carbon::now()->subDays(334)) 

            <div class="alert alert-danger" role="alert">
            You have not updated your membership details in the last year please update these!
            </div>

            @endif
            <div class="card card-primary bg-primary-gradient bubble-shadow">

                <div class="card-body">

                        <p><br>Detailed view for:<br><b> {{ $data->first_name }} {{ $data->last_name }}</b>
                        <p>Last Updated:<br><b> {{ $data->updated_at }}</b>
                        </p>

                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Player Details</div>

                <div class="card-body">
                    <div class="table-responsive">
                <table class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->date_of_birth }}</td>
                                <td>

                                    @if ($data->membershiptype <= 3)
                                            {{ $data->mobile_phone }}
                                            @else
                                            {{ $data->mobile_phone }}
                                            @endif

                                    </td>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col col-lg 6">
    <div class="card">
        <div class="card-header">Medication</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="20%">Question</th>
                            <th width="20%">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Does they have any allergies ?</td>
                                <td>
                                    @if ($data->medical_allergies == 1)
                                    Yes<br>
                                        {{ $data->medical_allergies_details }}
                                    @else
                                        No
                                    @endif
                                </td>
                            </tr><tr>
                                <td>Does they take any regular medication?</td>
                                <td>
                                    @if ($data->medical_regularmeds == 1)
                                    Yes<br>
                                        {{ $data->medical_regularmeds_details }}
                                    @else
                                        No
                                    @endif
                                </td>
                            </tr><tr>
                                <td>Does they have any long-term conditions, illnesses or injuries?</td>
                                <td>
                                    @if ($data->medical_longterm == 1)
                                    Yes<br>
                                        {{ $data->medical_longterm_details }}
                                    @else
                                        No
                                    @endif
                                </td>
                            </tr><tr>
                                <td>Does they have any dietary requirements?</td>
                                <td>
                                    @if ($data->medical_dietary == 1)
                                    Yes<br>
                                        {{ $data->medical_dietary_details }}
                                    @else
                                       No
                                    @endif
                                </td>
                            </tr><tr>
                                <td>is there any activities your they cannot participate in?</td>
                                <td>
                                    @if ($data->medical_physical == 1)
                                    Yes<br>
                                        {{ $data->medical_physical_details }}
                                    @else
                                        No
                                    @endif
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        <div class="col col-lg 6">
            <div class="card">
                <div class="card-header">Emergency Contacts</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="33%"></th>
                                    <th width="33%">Main</th>
                                    <th width="33%">Secondary</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $data->emg_name }}</td>
                                        <td>{{ $data->emg2_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td>{{ $data->emg_con_number }}</td>
                                        <td>{{ $data->emg2_con_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Relationship</td>
                                        <td>{{ $data->emg_relationship }}</td>
                                        <td>{{ $data->emg2_relationship }}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

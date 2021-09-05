@extends('layouts.app', ['title' => 'About'])

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-primary card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="flaticon-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats">
                        <div class="numbers">
                            <p class="card-category">Male Mebers</p>
                            <h4 class="card-title">{{ $countMale }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-info card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="flaticon-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats">
                        <div class="numbers">
                            <p class="card-category">Female Members</p>
                            <h4 class="card-title">{{ $countFemale }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-secondary card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="flaticon-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats">
                        <div class="numbers">
                            <p class="card-category">Total Members</p>
                            <h4 class="card-title">{{ $memberDataTotal }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

                        <br>The following players are listed under the club<br><bR>
                            <div class="table-responsive">
                                <table id="multi-filter-select" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date Of Birth</th>
                                            <th>Mobile</th>
                                            <th>Emergency Details</th>
                                            <th>Actions</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date Of Birth</th>
                                            <th>Mobile</th>
                                            <th>Emergency Details</th>
                                            <th>Actions</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($memberData as $data)
                                        @if ($data->updated_at < Carbon\Carbon::now()->subDays(334)) 

                                        <tr class="table-danger" role="row"> 
                                            @else
                                        <tr>
                                        @endif
                                            <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                            <td>{{ $data->gender }}</td>
                                            <td>{{ $data->date_of_birth }}</td>
                                            <td>{{ $data->mobile_phone }}</td>
                                            <td>{{ $data->emg_name }} <br> {{ $data->emg_con_number }} <br> {{ $data->emg_relationship }}</td>

                                            <td>

                                                <a href="/admin/view/{{ $data->id }}"><button type="button" class="btn btn-primary btn-sm">View</button></a>
                                            </td>
                                            <td>{{ $data->updated_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#basic-datatables').DataTable({});

                $('#multi-filter-select').DataTable({
                    "pageLength": 10,
                    initComplete: function() {
                        this.api().columns().every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-control"><option value=""></option></select>'
                                    )
                                .appendTo($(column.footer()).empty())
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );

                                    column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });

                            column.data().unique().sort().each(function(d, j) {
                                select.append('<option value="' + d + '">' + d +
                                    '</option>')
                            });
                        });
                    }
                });
            });

        </script>

@endsection

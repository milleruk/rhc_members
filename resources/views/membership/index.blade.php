@extends('layouts.app', ['title' => 'Account'])

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap CSS -->
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <div class="row">
        <div class="col col-lg-12">
            <div class="card">
                <div class="card-header">RHC Membership</div>

                <div class="card-body">


                    <br>The following players are listed under your account<br><bR>
                        <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <td>Name</td>
                            <td>Date Of Birth</td>
                            <td>Emergency Details</td>
                            <td colspan=2>Actions</td>
                        </thead>
                        <tbody>

                            @foreach ($memberData as $data)

                                <tr>
                                    <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                    <td>{{ $data->date_of_birth }}</td>
                                    <td>{{ $data->emg_name }} <br> {{ $data->emg_con_number }}</td>
                                    <td><!-- <button type="button" class="btn btn-primary btn-sm">Edit</button>--></td>
                                    <td>


                                                <button class="btn btn-danger" onclick="deleteConfirmation({{$data->id}})">Delete</button>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                    <a href="/membership/addchild"><button type="button" class="btn btn-primary">Add Junior</button></a>
                    <a href="/membership/addsenior"><button type="button" class="btn btn-primary">Add
                            Senior</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        function deleteConfirmation(id) {
            swal({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'POST',
                        url: "{{url('/membership/remove')}}/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
                            if (results.success === true) {
                                swal("Done!", results.message, "success");
                                setTimeout(function(){location.reload()}, 3000);
                            } else {
                                swal("Error!", results.message, "error");
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            })
        }
    </script>


@endsection

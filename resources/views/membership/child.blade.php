@extends('layouts.app', ['title' => 'Under 18s Membership Form'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p>Parents / Guardians of all prospective junior members of Redditch Hockey Club are required to
                        complete this form.</p>
                    <p><b>Confidentiality:</b> Details on this form will be held securely by the Redditch Hockey Club
                        Membership Coordinator and will only
                        be shared with coaches or others who need this information in order to meet the specific needs
                        of your child.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 1 - U18 Participant Information</div>
            </div>
            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <select class="form-control" id="formGroupDefaultSelect">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 2 - Parent / Guardian / Emergency Contact Details</div>
            </div>
            <div class="card-body">
                <div class="form-group form-group-default form-show-validation row">
                    <label for="name">Title <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="emg_title" name="emg_title" placeholder="" required>
                </div>

                <div class="form-group form-group-default form-show-validation row">
                    <label for="name">Name <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="emg_name" name="emg_name" placeholder="" required>
                </div>
                <div class="form-group form-group-default form-show-validation row">
                    <label for="name">Address <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="emg_address" name="emg_address" placeholder="" required>
                </div>
                <div class="form-group form-group-default form-show-validation row">
                    <label for="name">Relationship <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="emg_relationship" name="emg_relationship" placeholder="" required>
                </div>
                <div class="form-group form-group-default form-show-validation row">
                    <label for="name">Contact Number <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="emg_con_number" name="emg_con_numner" placeholder="" required>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 3 - Medical Information</div>
            </div>
            <div class="card-body">
                <p>In case of emergency, and as part of the club’s responsibility to its membership, parents/guardians of ALL junior club members
are required to complete the medical information as accurately as possible.
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 4 - Membership Type</div>
            </div>
            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <select class="form-control" id="formGroupDefaultSelect">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 5 - Parent / Guardian / Emergency Contact Details</div>
            </div>
            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <select class="form-control" id="formGroupDefaultSelect">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 6 - Ethnicity</div>
            </div>
            <div class="card-body">
                <p>Whilst it is not compulsory for the following section to be completed, the paragraph below explains why
                    this personal
                    information is considered to be important.</p>
                <p>Sport can and does play a major role in promoting the inclusion of all groups in society. However
                    inequalities have existed
                    within sport particularly in relation to gender, race and disability. Sport England and England Hockey
                    are committed to
                    promoting and developing sports equity, which is about fairness in sport, equality of access,
                    recognizing inequalities and
                    taking steps to address them. By monitoring the profile of people in sports clubs, national governing
                    bodies of sport and Sport
                    England can identify any issues relating to under representation of different groups and can develop
                    strategies to ensure that
                    all people have the opportunity in the future to develop and progress in sport.</p>
                <p>England Hockey requests this data from clubs as part of the annual affiliation process and completing
                    this data accurately
                    enables the club to give an accurate picture to England Hockey on our membership.</p>

                <div class="form-group form-group-default form-show-validation row">
                    <fieldset>
                        <select class="form-control dropdown" id="ethnicity" name="ethnicity">
                            <option value="" selected="selected" disabled="disabled">-- select one --</option>
                            <optgroup label="White">
                                <option value="White English">English</option>
                                <option value="White Welsh">Welsh</option>
                                <option value="White Scottish">Scottish</option>
                                <option value="White Northern Irish">Northern Irish</option>
                                <option value="White Irish">Irish</option>
                                <option value="White Gypsy or Irish Traveller">Gypsy or Irish Traveller</option>
                                <option value="White Other">Any other White background</option>
                            </optgroup>
                            <optgroup label="Mixed or Multiple ethnic groups">
                                <option value="Mixed White and Black Caribbean">White and Black Caribbean</option>
                                <option value="Mixed White and Black African">White and Black African</option>
                                <option value="Mixed White Other">Any other Mixed or Multiple background</option>
                            </optgroup>
                            <optgroup label="Asian">
                                <option value="Asian Indian">Indian</option>
                                <option value="Asian Pakistani">Pakistani</option>
                                <option value="Asian Bangladeshi">Bangladeshi</option>
                                <option value="Asian Chinese">Chinese</option>
                                <option value="Asian Other">Any other Asian background</option>
                            </optgroup>
                            <optgroup label="Black">
                                <option value="Black African">African</option>
                                <option value="Black African American">African American</option>
                                <option value="Black Caribbean">Caribbean</option>
                                <option value="Black Other">Any other Black background</option>
                            </optgroup>
                            <optgroup label="Other ethnic groups">
                                <option value="Arab">Arab</option>
                                <option value="Hispanic">Hispanic</option>
                                <option value="Latino">Latino</option>
                                <option value="Native American">Native American</option>
                                <option value="Pacific Islander">Pacific Islander</option>
                                <option value="Other">Any other ethnic group</option>
                            </optgroup>
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 7 - Parent / Guardian / Emergency Contact Details</div>
            </div>
            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <select class="form-control" id="formGroupDefaultSelect">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 8 - Parent / Guardian / Emergency Contact Details</div>
            </div>
            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <select class="form-control" id="formGroupDefaultSelect">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Section 9 - Parent / Guardian / Emergency Contact Details</div>
            </div>
            <div class="card-body">
                <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <select class="form-control" id="formGroupDefaultSelect">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                            placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">School <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="" required>
                    </div>
            </div>
        </div>
    </div>
    </div>

@endsection

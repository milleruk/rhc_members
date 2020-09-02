@extends('layouts.app', ['title' => 'Under 18s Membership Form'])

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form method="post" action="/membership/addchild" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <p>Parents / Guardians of all prospective junior members of Redditch Hockey Club are  to
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
                        <div class="form-group form-group-default form-show-validation row">
                            <label>Gender</label>
                            <select class="form-control" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group form-group-default form-show-validation row">
                            <label for="name">First Name <span class="-label">*</span></label>
                            {!! Form::text('first_name', null, ['placeholder' => 'First Name', 'class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group form-group-default form-show-validation row">
                            <label for="name">Last Name <span class="-label">*</span></label>
                            {!! Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control' , 'required']) !!}
                        </div>
                        <div class="form-group form-group-default form-show-validation row">
                            <label for="name">Address <span class="-label">*</span></label>
                            {!! Form::text('address', null, ['placeholder' => 'Address', 'class' => 'form-control' , 'required']) !!}
                        </div>
                        <div class="form-group form-group-default form-show-validation row">
                            <label for="name">Date of Birth <span class="-label">*</span></label>
                            {!! Form::date('date_of_birth', null, ['placeholder' => 'Name', 'class' => 'form-control' , 'required']) !!}
                        </div>
                        <div class="form-group form-group-default form-show-validation row">
                            <label for="name">School <span class="-label">*</span></label>
                            {!! Form::text('school', null, ['placeholder' => 'School', 'class' => 'form-control' , 'required']) !!}
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
                        <label for="name">Title <span class="-label">*</span></label>
                        {!! Form::text('emg_title', null, ['placeholder' => 'Title', 'class' => 'form-control' , 'required']) !!}
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Name <span class="-label">*</span></label>
                        {!! Form::text('emg_name', null, ['placeholder' => 'First Name', 'class' => 'form-control' , 'required']) !!}
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="-label">*</span></label>
                        {!! Form::text('emg_address', null, ['placeholder' => 'Address', 'class' => 'form-control' , 'required']) !!}
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Relationship <span class="-label">*</span></label>
                        {!! Form::text('emg_relationship', null, ['placeholder' => 'Relationship', 'class' => 'form-control' , 'required']) !!}
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Contact Number <span class="-label">*</span></label>
                        {!! Form::number('emg_con_number', null, ['placeholder' => 'Contact Number', 'class' => 'form-control' , 'required']) !!}
                    </div>
                    <p>incase we cnnot contact you via the first method please provide a second contact</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Second Contact Name <span class="-label">*</span></label>
                                {!! Form::text('emg2_name', null, ['placeholder' => 'First Name', 'class' => 'form-control' , 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Second Contact Number <span class="-label">*</span></label>
                                {!! Form::number('emg2_con_number', null, ['placeholder' => 'Contact Number', 'class' => 'form-control' , 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Second Contact Relationship <span class="-label">*</span></label>
                                {!! Form::text('emg2_relationship', null, ['placeholder' => 'Relationship', 'class' => 'form-control' , 'required']) !!}
                            </div>
                        </div>
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
                    <p>In case of emergency, and as part of the club’s responsibility to its membership, parents/guardians
                        of ALL junior club members
                        are  to complete the medical information as accurately as possible.
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Surgery<span class="-label">*</span></label>
                                {!! Form::text('medical_surgery', null, ['placeholder' => 'Surgery', 'class' => 'form-control' , 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Doctor <span class="-label">*</span></label>
                                {!! Form::text('medical_doctor', null, ['placeholder' => 'Doctor', 'class' => 'form-control' , 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            Does your child have any allergies ?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_allergies', 1, false, ['id' => 'medical_allergies','placeholder' => 'Yes', 'class' => 'form-control']) }} Yes
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details
                                {!! Form::text('medical_allergies_details', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Does your child take any regular medication?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_regularmeds', 1, false, ['id' => 'medical_regularmeds','placeholder' => 'Yes', 'class' => 'form-control']) }} Yes
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details
                                {!! Form::text('medical_regularmeds_details', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Does your child have any long-term
                            conditions, illnesses or injuries?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_longterm', 1, false, ['id' => 'medical_longterm','placeholder' => 'Yes', 'class' => 'form-control']) }} Yes
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details
                                {!! Form::text('medical_longterm_details', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Does your child have any dietary
                            requirements?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_dietary', 1, false, ['id' => 'medical_dietary','placeholder' => 'Yes', 'class' => 'form-control']) }} Yes
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details
                                {!! Form::text('medical_dietary_details', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Are there any activities your child is
                            cannot participate in?

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_physical', 1, false, ['id' => 'medical_physical','placeholder' => 'Yes', 'class' => 'form-control']) }} Yes
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details
                                {!! Form::text('medical_physical_details', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}
                            </div>
                        </div>
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
DETAILS HERE SOON  <input type="text" class="form-control" id="membershiptype"
name="membershiptype" placeholder="1" value="1" >
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 5 - Under 18 Member Consent: please tick the boxes below</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <p>I give my consent that if an emergency medical situation arises, the organisation/club may act as loco parentis. If the
                                need arises for administration of first aid and/or other medical treatment which in the opinion of a qualified medical
                                practitioner may be necessary. I also understand that in such circumstances that all reasonable steps are made.</p>

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('under_medical_loco', 1, false, ['id' => 'under_medical_loco','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} Tick
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>Redditch Hockey Club aim to ensure that all members enjoy their participation in hockey. To help ensure that this is the case, we
                                adopt the following England Hockey Policies & Procedures whilst also putting further policies and procedures in place of our
                                own creation. Please take time to read these documents which are available on the website</p>
<p>I confirm that I have read, or have been made aware of the club policies concerning:
    England Hockey - Equality Policy, England Hockey - RESPECT - Code of Ethics and Behaviour, England Hockey -
    Safeguarding and Protecting Young People Policy, Redditch HC - Photography Policy, Redditch HC - Emergency
    Procedures</p>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_polcies', 1, false, ['id' => 'consent_polices','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} Tick
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>Photography / Recorded Image Consent – In some environments it is impossible to control photography by external parties,
                                however I am aware that that there may be times that photographs and/or footage may be taken during matches and training
                                sessions by approved agents and/or officers of Redditch HC. Such images shall be used only for training/publicity purpose in
                                accordance with Safeguarding and Protecting Young People in Hockey Policy</p>
                                <p>I give permission for my son/daughter to appear in photographic or recorded images of their hockey involvement and for
                                    approved agents to use the images from any photo/film shoots. This includes any reproductions or adaptations of the
                                    images for all general purposes i.e. local newspapers, magazines, other promotional material, social media and the club’s website.</p>

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_photograhpy', 1, false, ['id' => 'consent_photograhpy','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} Tick
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            Marketing Consent - I would love to keep updated with news, events and offers from Redditch Hockey Club

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_marketing', 1, false, ['id' => 'consent_marketing','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} Tick
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>I consent to my son/daughter travelling to venues for matches and training by transport provided by the club which may
                                include travelling in other players’ private cars</p>

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_transportation', 1, false, ['id' => 'consent_transportation','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} Tick
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>Privacy Notice - Redditch Hockey Club take the protection of the data that we hold about you as a member seriously and will
                                ensure that the data you provide is processed in accordance with data protection legislation. Please read the full privacy notice
                                attached carefully to see how the Club will treat the personal information that you provide to us.</p>
                                <p>By returning this completed form, I confirm that I have read and understood the permission statements on this membership
                                    form and the privacy notice attached.</p>

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_privacy_notice', 1, false, ['id' => 'consent_privacy_notice','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} Tick
                            </div>
                        </div>
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
                    <p>Whilst it is not compulsory for the following section to be completed, the paragraph below explains
                        why
                        this personal
                        information is considered to be important.</p>
                    <p>Sport can and does play a major role in promoting the inclusion of all groups in society. However
                        inequalities have existed
                        within sport particularly in relation to gender, race and disability. Sport England and England
                        Hockey
                        are committed to
                        promoting and developing sports equity, which is about fairness in sport, equality of access,
                        recognizing inequalities and
                        taking steps to address them. By monitoring the profile of people in sports clubs, national
                        governing
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 7 - - Disability</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <p>Do you have any physical or mental health conditions or illnesses
                                that have lasted or are expected to last 12 months or more?</p>

                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('disability_12months', 1, false, ['id' => 'disability_12months','placeholder' => 'Yes', 'class' => 'form-control']) }} Yes
                                <br><br>

                            </div>
                        </div>

                    </div>
                    {!! Form::text('disability_list', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 8 - Code of Conduct for Parents, Carers and Spectators</div>
                </div>
                <div class="card-body">
                    <p>All individuals involved in hockey will, at all times:
                        <ul>
                       <li>Respect the spirit of fair play in hockey. This is more than playing within the rules. It also incorporates the concepts of
                        friendship, respect for others and always participating with the right spirit.</li>
                        <li>Respect the rights, dignity and worth of others.</li>
                            <li>Conduct themselves in a manner that takes all reasonable measures to protect their own safety and the safety of others.</li>
                                <li>Promote the reputation of the sport and take all possible steps to prevent it from being brought into disrepute.</li>
                                    <li>Protect others involved in the game from verbal or physical abuse and threatening or intimidating behaviour.</li>
                                        <li>Never use inappropriate language or gestures.</li>
                                        </ul>
                        </p>
                        <div class="custom-control custom-checkbox">
                            {{ Form::checkbox('code_conduct', 1, false, ['id' => 'code_conduct','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }} I agreed to and understand to code of conduct
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
                    <p>I consider my child to be physically fit and capable of full participation and agree to notify the club of any changes to the medical information provided. Furthermore, I agree to abide by Redditch Hockey Club’s code of conduct for parents, carers
                        and spectators.</p>
                        <div class="custom-control custom-checkbox">
                            {{ Form::checkbox('declaration', 1, false, ['id' => 'declaration','placeholder' => 'Yes', 'class' => 'form-control', 'required']) }}By Ticking this box you agreed that all of the above is factualy accurate</label>
                        </div>
                        <input class="btn btn-success" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

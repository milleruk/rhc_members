@extends('layouts.app', ['title' => 'Under 18s Membership Form'])

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary bg-primary-gradient bubble-shadow">

                <div class="card-body">
                @foreach ($editAccountView as $data)
                
                {{ Form::model($data, array('route' => array('membership.update', $data->id), 'method' => 'PUT')) }}

                        {{ csrf_field() }}
                        <p>All prospective members of Redditch Hockey Club are required to complete this membership form.
                            </p>
                        <p><b>Confidentiality:</b> Details on this form will be held securely by the Redditch Hockey Club Membership Coordinator and will only
                            be shared with coaches or others who need this information in order to meet your specific needs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 1 - Participant Information</div>
                </div>
                <div class="card-body">
                    <div class="form-group form-group-default form-show-validation row">
                        <label>Gender</label>
                        <input type="text" class="form-control" id="name" value="{{$data->gender}}" placeholder="Enter name" name="gender" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">First Name <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" value="{{$data->first_name}}" placeholder="Enter name" name="first_name" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Last Name <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" value="{{$data->last_name}}" placeholder="Enter name" name="last_name" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Home Address <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="address" value="{{$data->address}}" placeholder="Enter name" name="address" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Mobile Number <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="mobile_phone" value="{{$data->mobile_phone}}" placeholder="Enter name" name="mobile_phone" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Date of Birth <span class="-label">*</span></label>
                        <input type="date" class="form-control" id="date_of_birth" value="{{$data->date_of_birth}}" placeholder="Enter name" name="date_of_birth" >

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 2 - Emergency Contact Details</div>
                </div>
                <div class="card-body">
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Title <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="emg_title" value="{{$data->emg_title}}" placeholder="Enter name" name="emg_title" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Name <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="emg_name" value="{{$data->emg_name}}" placeholder="Enter name" name="emg_name" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Address <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="emg_address" value="{{$data->emg_address}}" placeholder="Enter name" name="emg_address" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Relationship <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="emg_relationship" value="{{$data->emg_relationship}}" placeholder="Enter name" name="emg_relationship" >
                    </div>
                    <div class="form-group form-group-default form-show-validation row">
                        <label for="name">Contact Number <span class="-label">*</span></label>
                        <input type="text" class="form-control" id="emg_con_number" value="{{$data->emg_con_number}}" placeholder="Enter name" name="emg_con_number" >
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
                    <p>In case of emergency, and as part of the club’s responsibility to its membership, ALL club members are required to complete
                        the medical information as accurately as possible. Please indicate if you would like to discuss this privately with us</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Surgery<span class="-label">*</span></label>
                                <input type="text" class="form-control" id="medical_surgery" value="{{$data->medical_surgery}}" placeholder="Enter name" name="medical_surgery" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Doctor <span class="-label">*</span></label>
                                <input type="text" class="form-control" id="medical_doctor" value="{{$data->medical_doctor}}" placeholder="Enter name" name="medical_doctor" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            Do you have any allergies ?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {!! Form::select('medical_allergies', ["" => '--', 1 => 'Yes', 2 => 'No'], null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row @if ($errors->has('medical_allergies_details')) has-error @endif">
                                <label for="name">Details</label>
                                {!! Form::text('medical_allergies_details', null, ['placeholder' => 'Details', 'class'
                                    => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Do you take any regular medication?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {!! Form::select('medical_regularmeds', ["" => '--', 1 => 'Yes', 2 => 'No'], null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details</label>
                                {!! Form::text('medical_regularmeds_details', null, ['placeholder' => 'Details', 'class'
                                    => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Do you have any long-term
                            conditions, illnesses or injuries?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {!! Form::select('medical_longterm', ["" => '--', 1 => 'Yes', 2 => 'No'], null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details</label>
                                {!! Form::text('medical_longterm_details', null, ['placeholder' => 'Details', 'class' =>
                                    'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Do you have any dietary
                            requirements?
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {!! Form::select('medical_dietary', ["" => '--', 1 => 'Yes', 2 => 'No'], null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details</label>
                                {!! Form::text('medical_dietary_details', null, ['placeholder' => 'Details', 'class' =>
                                    'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Are there any activities you
                            cannot participate in?

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {!! Form::select('medical_physical', ["" => '--', 1 => 'Yes', 2 => 'No'], null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group form-group-default form-show-validation row">
                                <label for="name">Details</label>
                                {!! Form::text('medical_physical_details', null, ['placeholder' => 'Details', 'class' =>
                                    'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <p>I consent to my medical details to be shared with coaches/leaders for the purposes of the delivery of my safe participation in the hockey club activity</p>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_consent', 1, false, ['id' => 'medical_consent', 'class' => 'custom-control-input', 'required']) }}<label
                                    class="custom-control-label" for="medical_consent">Confirm</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>I agree to notify the club of any changes to the medical information provided.</p>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('medical_consent_update', 1, false, ['id' => 'medical_consent_update', 'class' => 'custom-control-input', 'required']) }}<label
                                    class="custom-control-label" for="medical_consent_update">Confirm</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p><b>Not providing consent will not affect your membership to the Club, however giving consent to share this information will help
                        club volunteers to know how to respond effectively in the case of any medical emergency</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 4 - Senior Member Consent: please tick the boxes below</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <p>Redditch Hockey Club aim to ensure that all members enjoy their participation in hockey. To
                                help ensure that this is the case, we
                                adopt the following England Hockey Policies & Procedures whilst also putting further
                                policies and procedures in place of our
                                own creation. Please take time to read these documents which are available on the website
                            </p>
                            <p>I confirm that I have read, or have been made aware of the club policies concerning:
                                England Hockey - Equality Policy, England Hockey - RESPECT - Code of Ethics and Behaviour,
                                England Hockey -
                                Safeguarding and Protecting Young People Policy, Redditch HC - Photography Policy, Redditch
                                HC - Emergency
                                Procedures</p>
                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_policies', 1, false, ['id' => 'consent_policies', 'class' => 'custom-control-input', 'required']) }}<label
                                    class="custom-control-label" for="consent_policies">Confirm</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>Photography / Recorded Image Consent – There may be times that photographs and/or footage may be taken during matches and training sessions by approved agents and/or officers of Redditch HC</p>
                            <p>I give permission to appear in photographic or recorded images of my hockey involvement and for approved agents to use
                                the images from any photo/film shoots. This includes any reproductions or adaptations of the images for all general
                                purposes i.e. local newspapers, magazines, other promotional material, social media and the club’s website.</p>

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_photography', 1, false, ['id' => 'consent_photography', 'class' => 'custom-control-input', 'required']) }}<label
                                    class="custom-control-label" for="consent_photography">Confirm</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            Marketing Consent - I would love to keep updated with news, events and offers from Redditch
                            Hockey Club

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_marketing', 1, false, ['id' => 'consent_marketing', 'class' => 'custom-control-input', 'required']) }}<label
                                    class="custom-control-label" for="consent_marketing">Confirm</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-10">
                            <p>Privacy Notice - Redditch Hockey Club take the protection of the data that we hold about you
                                as a member seriously and will
                                ensure that the data you provide is processed in accordance with data protection
                                legislation. Please read the full privacy notice
                                attached carefully to see how the Club will treat the personal information that you provide
                                to us.</p>
                            <p>By returning this completed form, I confirm that I have read and understood the permission
                                statements on this membership
                                form and the privacy notice attached.</p>

                        </div>
                        <div class="col-md-2">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('consent_privacy_notice', 1, false, ['id' => 'consent_privacy_notice', 'class' => 'custom-control-input', 'required']) }}<label
                                    class="custom-control-label" for="consent_privacy_notice">Confirm</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><b>Section 5 - Membership Type</b></div>
                </div>
                <div class="card-body">
                    Becoming a member of Redditch Hockey Club involves a single subscription fee which covers all Wednesday evening training
sessions for the Season (Sept – Mar).<br>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th width=20% scope="col">Membership Type</th>
            <th width=10% scope="col">Subs</th>
            <th width=10% scope="col">Match Fees</th>
            <th width=60% scope="col">Membership Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Full Senior</b></td>
            <td>£250<br>
                (aged 18-64)<br><bR>
                £120<br>
                (over 65)</td>
            <td>£10</td>
            <td>
                <ul>
                    <li>
                        Standing Order Option 1 - £32.50 per month. First
payment must be set-up before the 31st October and
run for 12 months (October to September inclusive).
This includes subscription, training and upto 22
winter season (Saturday) match fees. Extra matches
outside of this quota are to be paid for in cash</li>
                    <li>Standing Order Option 2 - £65.00 per month
                        running for 6 months (October to March inclusive)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><b>Under 18 Member<br>
                Student with valid
                student card<br>
                Senior Unemployed</td>
                <td>£140</td>
                <td>£5</td>
                <td>
                    <ul>
                        <li>
                            Standing Order Option 1 - - £20.00 per month. First
                            payment must be set-up before the 31st October and
                            run for 12 months (October to September inclusive).
                            This includes subscription, training and upto 22
                            winter season (Saturday) match fees. Extra matches
                            outside of this quota are to be paid for in cash</li>
                        <li>- £40.00 per month
                            running for 6 months (October to March inclusive)
                            </li>
                    </ul>
                </td>
        </tr>
        <tr>
            <td><b>Social
                Member
                (Back to Hockey /
                Midweek players)</td>
                <td>£50</td>
                <td>£10</td>
                <td>
                    <ul>
                        <li>
                            Aimed at players who are 'Back to Hockey' training or
                            only feature in a small number of games during the
                            season either at the weekend or mid-week e.g
                            Veterans XI.
                            </li>
                        <li>RHC ask for an increased donation should the member go on to play in more than 5 fixtures of £10
                            subscription per game and £10 match fee.
                            </li>
                            <li>Standing order is not available for this membership
                                type
                                </li>
                </td>
        </tr>
        <tr>
            <td><b>Goalkeeper with own kit</b></td>
                <td>£35</td>
                <td>£5</td>
                <td>
                    <ul>
                        <li>
                            This is only available for goalkeepers who purchase
and maintain their own kit to a standard that
Redditch Hockey Club finds acceptable</li>
                        <li>-Standing order is not available for this membership
                            type
                            </li>
                    </ul>
                </td>
        </tr>


    </tbody>
</table>

                {!! Form::select('membershiptype', 
                    [
                        "" => '--', 
                        '4' => 'Student with valid student card', 
                        '5' => 'Full Senior', 
                        '6' => 'Social Member (Back to Hockey / Midweek players)', 
                        '7' => 'Goalkeeper with own kit'
                    ], null, ['class' => 'form-control', 'required']) !!}

                    <br>
                    <p><b>Payment Options </b><br>Cash / Cheque made payable to Redditch C H & R Club Ltd (Hockey Section) /
                        Card Machine / Bank Transfer / SO
                        <br>
                        Santander - Redditch Hockey Club<br>
                        Sort Code – 09-01-29<br>
                        Account No. – 19134767</p>
                        <p><b>Please let us know how you are paying for your membership</b></p>

                {!! Form::select('paymenttype', 
                    [
                        "" => '--', 
                        '1' => 'Cash', 
                        '2' => 'Cheque', 
                        '3' => 'Card', 
                        '4' => 'Bank Transfer',
                        '5' => 'Standing Order'
                    ], null, ['class' => 'form-control', 'required']) !!}

                    </div>
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 6 - - Disability</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <p>Do you have any physical or mental health conditions or illnesses
                                that have lasted or are expected to last 12 months or more?</p>

                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-checkbox">
                                {{ Form::checkbox('disability_12months', 1, false, ['id' => 'disability_12months', 'class' => 'custom-control-input']) }}<label
                                    class="custom-control-label" for="disability_12months">Yes</label>
                                <br><br>

                            </div>
                        </div>

                    </div>
                    {!! Form::text('disability_list', null, ['placeholder' => 'Details', 'class' => 'form-control']) !!}

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 7 - Code of Conduct for Players and Spectators</div>
                </div>
                <div class="card-body">
                    <p>All individuals involved in hockey will, at all times:
                    <ul>
                        <li>Respect the spirit of fair play in hockey. This is more than playing within the rules. It also
                            incorporates the concepts of
                            friendship, respect for others and always participating with the right spirit.
                        <ul><li>
                            Focus on the young people’s efforts and enjoyment rather than winning or losing.</li><li>
Teach young people that honest effort and teamwork are as important as victory, so the result of each game is accepted
without undue disappointment.</li><li>
Remember that people learn best by example. Appreciate good performances and skilful play by all participants.</li>
Encourage people always to settle disagreements amicably without resorting to hostility or violence.
</li></ul></li>
                        <li>Respect the rights, dignity and worth of others.
                            <ul><li>Respect umpires, officials, coaches, players and spectators.</li><li>
                                Respect the decisions of officials and teach young people to do the same.</li><li>
                                Show an appreciation for volunteer coaches and administrators
                                </li></ul>
                        </li>
                        <li>Conduct themselves in a manner that takes all reasonable measures to protect their own safety
                            and the safety of others.
                        <ul><li>Inform the team coach, manager, captain or, if there is one, another member of a management team of any new or
                            changed injury, health or welfare issue which they consider is appropriate for them to know</li></ul></li>
                        <li>Promote the reputation of the sport and take all possible steps to prevent it from being brought
                            into disrepute.<ul><li>Remember that young people participate in sport for their enjoyment, not yours</li></ul></li>
                        <li>Protect others involved in the game from verbal or physical abuse and threatening or
                            intimidating behaviour.</li>
                        <li>Never use inappropriate language or gestures.</li>
                    </ul>
                    </p>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="code_conduct" value="1" {{$data->code_conduct ? "checked" : ""}}>
                        <label
                            class="custom-control-label" for="code_conductn">I agreed to and understand to code of
                            conduct</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Section 8 - Declaration</div>
                </div>
                <div class="card-body">
                    <p>I consider myself to be physically fit and capable of full participation and agree to notify the
                        club of any changes to the medical information provided. Furthermore, I agree to abide by Redditch
                        Hockey Club’s code of conduct for players
                        and spectators.</p>
                        <div class="custom-control custom-checkbox">
                        {{ Form::checkbox('declaration', 1, false, ['id' => 'declaration', 'class' => 'custom-control-input', 'required']) }}<label
                            class="custom-control-label" for="declaration">By Ticking this box you agreed that all of the
                            above is factualy accurate</label>
                    </div>
                    <input class="btn btn-success" type="submit" value="Update">
                </div>
            </div>
        </div>
    </div>
    </form>
    @endforeach
@endsection

<div class="header">
Enter personal information for <span class="teacher-name"></span>
</div>
<div class="content">
    {!! Form::open([
        'route' => 'teachers.update',
        'class' => 'ui small form',
        'id'=>'edit-form',
        'files'=>'true',
        'name'=>'myform'
        ])
    !!}
        <div class="fields">
            <div class="eight wide required fiel">
                <label for="name">Name</label>
                {!! Form::text('name', null, ['placeholder' => 'Full Name', 'id'=>'name', 'autocomplete' => 'off']) !!}
            </div>
            <div class="eight wide required field">
                <label for="gender">Gender</label>
                {!! Form::select('gender_id', $properties['genders'], null, ['class'=>'ui dropdown', 'id'=>'gender_id']) !!}
            </div>
        </div>
        <div class=" two fields">
            <div class="required field">
                <label for="father_name">Father's Name</label>
                {!! Form::text('father_name', null, ['placeholder' => 'Father\'s Name', 'id'=>'father_name', 'autocomplete' => 'off']) !!}
            </div>
            <div class="required field">
                <label for="mother_name">Mother's Name</label>
                {!! Form::text('mother_name', null, ['placeholder' => 'Mother\'s Name', 'id'=>'mother_name', 'autocomplete' => 'off']) !!}
            </div>
        </div>
        <div class=" two fields">
            <div class="field">
                <label for="phone_number">Phone Number</label>
                {!! Form::number('phone_number', null, ['placeholder' => 'Landline Number (if any)', 'id'=>'phone_number', 'autocomplete' => 'off']) !!}
            </div>
            <div class="field">
                <label for="mobile_number">Mobile Number</label>
                {!! Form::number('mobile_number', null, ['placeholder' => 'Mobile Number', 'id'=>'mobile_number', 'autocomplete' => 'off']) !!}
            </div>
        </div>
        <div class="fields">
            <div class="six wide field">
                <label for="email">Email Address</label>
                {!! Form::email('email', null, ['placeholder' => 'email', 'id'=>'email', 'autocomplete' => 'off']) !!}
            </div>
            <div class="four wide field">
                <label for="epic_number">EPIC Number</label>
                {!! Form::text('epic_number', null, ['placeholder' => 'EPIC Number', 'id'=>'epic_number', 'autocomplete' => 'off']) !!}
            </div>
            <div class="three wide required field">
                <label for="blood_group">Blood Group</label>
                {!! Form::select('blood_group',  ['O+'=>'O+','O-'=>'O-','A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-'], null, ['id'=>'blood_group'])!!}
            </div>
            <div class="three wide required field">
                <label for="dob">Date of Birth</label>
                {!! Form::text('date_of_birth', null, ['placeholder' => 'Date of Birth', 'readonly'=>'readonly', 'class'=>'datepicker', 'id'=>'date_of_birth']) !!}
            </div>
        </div>
        <div class="fields">
            <div class="eight wide required field">
                <label for="social_category_id">Social Category</label>
                {!! Form::select('social_category_id', $properties['social_categories'], null, ['class'=>'ui dropdown', 'id'=>'social_category_id']) !!}
            </div>
            <div class="eight wide required field">
                <label for="disability_id">Disability</label>
                {!! Form::select('disability_id', $properties['disabilities'], null, ['class'=>'ui dropdown', 'id'=>'disability_id']) !!}
            </div>
        </div>
        <div class="fields">
            <div class="ui six wide field">
                <label for="marital_status_id">Marital Status</label>
                {!! Form::select('marital_status_id', $properties['marital_statuses'], null, ['class'=>'ui dropdown', 'id'=>'marital_status_id', 'onchange'=>'maritalStatusChange(this);']) !!}
            </div>
            <div class="ten wide disabled field">
                <label for="spouse_name">Spouse Name</label>
                {!! Form::text('spouse_name', null, ['placeholder' => 'Spouse\'s Name', 'id'=>'spouse_name', 'disabled' => 'disabled', 'autocomplete' => 'off']) !!}
            </div>
        </div>
        <div class="fields">
            <div class="six wide required field">
                <label for="present_address">Present Address</label>
                {!! Form::textarea('present_address', null, ["rows"=>"4", "id"=>"present_address", "placeholder"=>"Present Address", 'autocomplete' => 'off']) !!}
            </div>
            <div class="six wide required field">
                <label for="permanent_address">Permanent Address</label>
                {!! Form::textarea('permanent_address', null, ["rows"=>"4", "id"=>"permanent_address", "placeholder"=>"Permanent Address", 'autocomplete' => 'off']) !!}
            </div>
            <div class="four wide field">
                <label for="photo">Picture</label>
                <img src="" alt="" id="photo-preview" class="ui tiny image">
                <div>
                    <label for="photo" class="ui icon blue button">
                        <i class="file icon"></i>
                        Open File</label>
                        {!! Form::file('photo', ['style'=>'display:none','id'=>'photo']) !!}
                </div>
            </div>
        </div>

        <div class="fields">
            <div class="eight wide required field">
                <label for="qualification">Qualification</label>
                {!! Form::select('qualification_id', $properties['qualifications'], null, ['class'=>'ui dropdown', 'id'=>'qualifications_id']) !!}
            </div>
            <div class="eight wide required field">
                <label for="math_science_upto">Math/Science upto</label>
                {!! Form::select('math_science_upto_id', $properties['qualifications'], null, ['class'=>'ui dropdown', 'id'=>'math_science_upto_id']) !!}
            </div>
        </div>
        <div class="fields">
            <div class="eight wide required field">
                <label for="english_language_upto">English/Language upto</label>
                {!! Form::select('english_language_upto_id', $properties['qualifications'], null, ['class'=>'ui dropdown', 'id'=>'english_language_upto_id']) !!}
            </div>
            <div class="eight wide required field">
                <label for="social_upto">Social Studies upto</label>
                {!! Form::select('social_upto_id', $properties['qualifications'], null, ['class'=>'ui dropdown', 'id'=>'social_upto_id']) !!}
            </div>
        </div>
        <div class="fields">
            <div class="seven wide required field">
                <label for="professional_qualification">Professional Qualification</label>
                {!! Form::select('professional_qualification_id', $properties['professional_qualifications'], null, ['class'=>'ui dropdown', 'id'=>'professional_qualification', 'onchange'=>'professionalQualificationChange(this)']) !!}
            </div>
            <div class="four wide field {{errorClass($errors, 'professional_qualification_year')}}">
                <label for="professional_qualification_year">Year of Passing</label>
                {!! Form::text('professional_qualification_year', null, ['class'=>'yearpicker', 'id'=>'professional_qualification_year', 'disabled'=>'disabled']) !!}
                {!! errorMessage($errors,'professional_qualification_year') !!}
            </div>
            <div class="five wide field">
                <label>&nbsp;</label>
                <div class="ui checkbox">
                    <input type="checkbox" name="trained_for_cwsn" id="trained_for_cwsn" />
                    <label for="trained_for_csw">
                        Trained for CWSN
                    </label>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>
<div class="actions">
    <div class="ui black deny button">
    Cancel
    </div>
    <div id="post-edit" class="ui positive right labeled icon button" data-tid="">
    Validate
    <i class="warning circle icon"></i>
    </div>
</div>
<div id="edit-modal" class="ui modal personal-wrapper education-wrapper">
    
</div>
<script id="edit-modal-content" type="text/x-handlebars-template">
    <div class="header">
    Enter personal information for @{{name}}
    </div>
    <div class="content">
        <form method="POST" 
            action="http://edu.dev/teachers/@{{id}}"
            accept-charset="UTF-8"
            class="ui small form"
            id="edit-form"
            name="myform"
            enctype="multipart/form-data">
            <div class="two fields">
                <div class="required field">
                    <label for="name">Name</label>
                    <input placeholder="Full Name" id="name" autocomplete="off" name="name" type="text" value="@{{name}}">
                </div>
                <div class="required field">
                    <label for="gender">Gender</label>
                    <select class="ui dropdown" id="gender_id" name="gender_id">
                        @{{#each properties.genders}}
                        <option value="@{{id}}" @{{propertyCheck ../gender_id id }} >
                            @{{name}}
                        </option>
                        @{{/each}}
                    </select>
                </div>
            </div>
            <div class=" two fields">
                <div class="required field">
                    <label for="father_name">Father&laquo;s Name</label>
                    <input placeholder="Father's Name" id="father_name" autocomplete="off" name="father_name" type="text" value="@{{father_name}}">
                </div>
                <div class="required field">
                    <label for="mother_name">Mother&laquo;s Name</label>
                    <input placeholder="Mother's Name" id="mother_name" autocomplete="off" name="mother_name" type="text"  value="@{{mother_name}}">
                </div>
            </div>
            <div class=" two fields">
                <div class="field">
                    <label for="phone_number">Phone Number</label>
                    <input placeholder="Landline Number (if any)" id="phone_number" autocomplete="off" name="phone_number" type="number" value="@{{phone}}">
                </div>
                <div class="field">
                    <label for="mobile_number">Mobile Number</label>
                    <input placeholder="Mobile Number" id="mobile_number" autocomplete="off" name="mobile_number" type="number"  value="@{{mobile}}">
                </div>
            </div>
            <div class="fields">
                <div class="six wide field">
                    <label for="email">Email Address</label>
                    <input placeholder="email" id="email" autocomplete="off" name="email" type="email" value="@{{email}}">
                </div>
                <div class="four wide field">
                    <label for="epic_number">EPIC Number</label>
                    <input placeholder="EPIC Number" id="epic_number" autocomplete="off" name="epic_number"  value="@{{epic_number}}" type="text">
                </div>
                <div class="three wide required field">
                    <label for="blood_group">Blood Group</label>
                    <select id="blood_group" name="blood_group">
                        <option value="O+" @{{propertyCheck blood_group 'O+' }}>O+</option>
                        <option value="O-" @{{propertyCheck blood_group 'O-' }}>O-</option>
                        <option value="A+" @{{propertyCheck blood_group 'A+' }}>A+</option>
                        <option value="A-" @{{propertyCheck blood_group 'A-' }}>A-</option>
                        <option value="B+" @{{propertyCheck blood_group 'B+' }}>B+</option>
                        <option value="B-" @{{propertyCheck blood_group 'B-' }}>B-</option>
                        <option value="AB+" @{{propertyCheck blood_group 'AB+' }}>AB+</option>
                        <option value="AB-" @{{propertyCheck blood_group 'AB-' }}>AB-</option>
                    </select>
                </div>
                <div class="three wide required field">
                    <label for="dob">Date of Birth</label>
                    <input placeholder="Date of Birth" readonly="readonly" class="datepicker" id="date_of_birth" name="date_of_birth" type="text" value="@{{date_of_birth}}">
                </div>
            </div>
            <div class="fields">
                <div class="eight wide required field">
                    <label for="social_category_id">Social Category</label>
                    <select class="ui dropdown" id="social_category_id" name="social_category_id">
                        @{{#each properties.social_categories}}
                        <option value="@{{id}}" @{{propertyCheck ../social_category_id id }} >@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
                <div class="eight wide required field">
                    <label for="disability_id">Disability</label>
                    <select class="ui dropdown" id="disability_id" name="disability_id">
                        @{{#each properties.disabilities}}
                        <option value="@{{id}}" @{{propertyCheck ../disability_id id }}>@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
            </div>
            <div class="fields">
                <div class="ui six wide field">
                    <label for="marital_status_id">Marital Status</label>
                    <select class="ui dropdown" id="marital_status_id" onchange="maritalStatusChange(this);" name="marital_status_id">
                        @{{#each properties.marital_statuses}}
                        <option value="@{{id}}" @{{propertyCheck ../marital_status_id id }}>@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
                <div class="ten wide disabled field">
                    <label for="spouse_name">Spouse Name</label>
                    <input placeholder="Spouse's Name" id="spouse_name" disabled="disabled" autocomplete="off" name="spouse_name" type="text" value="@{{spouse_name}}">
                </div>
            </div>
            <div class="fields">
                <div class="six wide required field">
                    <label for="present_address">Present Address</label>
                    <textarea rows="4" id="present_address" placeholder="Present Address" autocomplete="off" name="present_address" cols="50">@{{present_address}}</textarea>
                </div>
                <div class="six wide required field">
                    <label for="permanent_address">Permanent Address</label>
                    <textarea rows="4" id="permanent_address" placeholder="Permanent Address" autocomplete="off" name="permanent_address" cols="50">@{{permanent_address}}</textarea>
                </div>
                <div class="four wide field">
                    <label for="photo">Picture</label>
                    <img src="/uploads/teachers/@{{photo_url}}" alt="" id="photo-preview" class="ui tiny image">
                    <div>
                        <label for="photo" class="ui icon blue button">
                            <i class="file icon"></i>
                            Open File</label>
                            <input style="display:none" id="photo" name="photo" type="file">
                    </div>
                </div>
            </div>

            <div class="fields">
                <div class="eight wide required field">
                    <label for="qualification">Qualification</label>
                    <select class="ui dropdown" id="qualifications_id" name="qualification_id">
                        @{{#each properties.qualifications}}
                        <option value="@{{id}}" @{{propertyCheck ../qualification_id id }}>@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
            </div>
            
            <div class="fields">
                <div class="seven wide required field">
                    <label for="professional_qualification">Professional Qualification</label>
                    <select class="ui dropdown" id="professional_qualification_id" name="professional_qualification_id" onchange="professionalQualificationChange(this)">
                    @{{#each properties.professional_qualifications}}
                    <option value="@{{id}}"@{{propertyCheck ../professional_qualification_id id }}>@{{name}}</option>
                    @{{/each}}
                    </select>
                </div>
                <div class="four wide field {{errorClass($errors, 'professional_qualification_year')}}">
                    <label for="professional_qualification_year">Year of Passing</label>
                    <input type="number" name="professional_qualification_year" id="professional_qualification_year" disabled="disabled" value="@{{professional_qualification_year}}" class="yearpicker"/>
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
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
        Cancel
        </div>
        <div id="post-edit" class="ui positive right labeled icon button" data-tid="@{{id}}">
        Validate
        <i class="warning circle icon"></i>
        </div>
    </div>
</script>
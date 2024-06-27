<div id="promote-modal" class="ui modal">
</div>

<script id="promote-modal-content"  type="text/x-handlebars-template">
    <div class="header">
    Enter posting information for @{{name}}
    </div>
    <div class="content">

        <form method="POST" 
            action="http://edu.dev/posting/"
            accept-charset="UTF-8"
            class="ui small form service-wrapper"
            id="posting-form"
            name="myform"
            enctype="multipart/form-data">
            <input type="hidden" name="posting[teacher_id]" value="@{{id}}">
            <input type="hidden" name="status" value="0">
            <div class="field">
                <label>School</label>
                <input type="hidden" name="posting[school_id]" id="school_id" value="@{{lastPosting.school.id}}">
                <div class="ui search">
                    <div class="ui icon input">
                    <input type="text" name="school_name" class="prompt search-school" placeholder="Start typing school name" value="@{{lastPosting.school.name}}">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
            <div class="fields">
                <div class="three wide field">
                    <label>Place of post different?</label>
                    <div class="ui checkbox">
                        <input type="checkbox" name="posting[post_different_from_school]" id="post_different_from_school">
                    </div>
                </div>
                <div class="thirteen wide field">
                    <label for="place_of_post">Place of posting</label>
                    <input type="text" name="posting[place_of_post]" id="posting_place_of_post" disabled="disabled">
                </div>
            </div>
            <div class="fields">
                <div class="six wide field">
                    <label>Nature of appointment</label>
                    <select name="posting[nature_of_appointment_id]" id="nature_of_appointment_id" class="ui dropdown">
                        @{{#each properties.natures_of_appointment}}
                        <option value="@{{id}}" @{{propertyCheck ../current_nature_of_appointment_id id}}>@{{name}}</option>
                        @{{/each}}                    
                    </select>
                </div>
                <div class="six wide field new-regular">
                    <label>Appointing Authority</label>
                    <select disabled="disabled" name="service[appointing_authority_id]" class="ui dropdown">
                        @{{#each properties.appointing_authorities}}
                        <option value="@{{id}}">@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
                <div class="four wide field new-regular">
                    <label>Rank</label>
                    <input disabled="disabled" type="text" name="service[rank_in_recruitment]" />
                </div>
            </div>
            <div class="fields new-regular">
                <div class="six wide field">
                    <label for="pension_type">Pension Type</label>
                    <select disabled="disabled" name="service[pension_type_id]" class="ui dropdown">
                        @{{#each properties.pension_types}}
                        <option value="@{{id}}" @{{propertyCheck ../service.pension_type_id id}}>@{{name}}</option>
                        @{{/each}}                    
                    </select>
                </div>
                <div class="six wide field">
                    <label for="gpf_account_number">GPF Account Number</label>
                    <div class="fields">
                        <div  class="twelve wide field">
                            <select disabled="disabled" name="service[gpf_prefix]">
                                @{{#each properties.gpf_prefixes}}
                                <option value="@{{id}}" @{{propertyCheck ../service.gpf_prefix_id id}}>@{{name}}</option>
                                @{{/each}}                    
                            </select>
                        </div>
                        <div class="six wide field">
                            <input disabled="disabled" type="text" name="service[gpf_suffix]">
                        </div>
                    </div>
                </div>
                <div class="four wide field">
                    <label for="new_pension_scheme_number">NPS Number</label>
                    <input disabled="disabled" type="text" name="service[new_pension_scheme_number]">
                </div>
            </div>
            <div class="four fields new-regular hidden">
                <div class="field">
                    <label for="pension_type">Teacher Grade</label>
                    <select disabled="disabled" name="service[grade]" id="grade" class="ui dropdown">
                        <option value="None" @{{propertyCheck service.grade 'None' }}>None</option>
                        <option value="Senior" @{{propertyCheck service.grade 'Senior' }}>Senior</option>
                        <option value="Selection" @{{propertyCheck service.grade 'Selection' }}>Selection</option>
                    </select>
                </div>
                <div class="field">
                    <label for="date_of_appointment">Date of Appointment</label>
                    <input disabled="disabled" type="text" name="service[date_of_appointment]" class="datepicker" id="date_of_appointment" value="@{{service.date_of_appointment}}" onclick="changeDateOfAppointment(this)">
                </div>
                <div class="field">
                    <label for="date_of_joining">Date of Joining</label>
                    <input disabled="disabled" type="text" name="service[date_of_joining]" class="datepicker" id="date_of_joining" value="@{{service.date_of_joining}}">
                </div>
                <div class="field">
                    <label for="date_of_confirmation">Date of confirmation</label>
                    <input disabled="disabled" type="text" name="service[date_of_confirmation]" class="datepicker" id="date_of_confirmation" value="@{{service.date_of_confirmation}}">
                </div>
            </div>
            <div class="field">
                <label>Type of Teacher</label>
                <select name="posting[type_of_teacher_id]" class="ui dropdown">
                    @{{#each properties.types_of_teacher}}
                    <option value="@{{id}}" @{{propertyCheck ../lastPosting.type_of_teacher_id id}}>@{{name}}</option>
                    @{{/each}}
                </select>
            </div>
            <div class="field">
                <label>Subject of appointment</label>
                <select name="posting[subject_of_appointment_id]" class="ui dropdown">
                    @{{#each properties.subjects}}
                    <option value="@{{id}}" @{{propertyCheck ../lastPosting.subject_of_appointment_id id}}>@{{name}}</option>
                    @{{/each}}
                </select>
            </div>
            <div class="field">
                <label>Classes Taught</label>
                <select name="posting[classes_taught_id]" class="ui dropdown">
                    @{{#each properties.classes_taught}}
                    <option value="@{{id}}" @{{propertyCheck ../lastPosting.classes_taught_id id}}>@{{name}}</option>
                    @{{/each}}
                </select>
            </div>
            <div class="field">
                <label for="date">Date of posting</label>
                <input type="text" name="posting[date]" id="posting_date_of_appointment" value="" class="datepicker"> 
            </div>
        </form>
    </div>
    <div class="actions">
        <div class="ui black deny button">
        Cancel
        </div>
        <div id="post-posting" class="ui positive right labeled icon button">
        Validate
        <i class="warning circle icon"></i>
        </div>
    </div>
</script>

<div id="service-modal" class="ui modal">
    
</div>

<script id="service-modal-content" type="text/x-handlebars-template">
    <div class="header">
    Update Service Information @{{name}}
    </div>
    <div class="content">
        <form method="POST" 
            action="{{route('services.update')}}"
            accept-charset="UTF-8"
            class="ui small form"
            id="service-form">
            <input type="hidden" value="@{{id}}" name="service[teacher_id]" id="service_teacher_id">
            <div class="fields">
                <div class="six wide field">
                    <label for="current_nature_of_appointment_id">Current Nature of appointment</label>
                    <select name="service[current_nature_of_appointment_id]" id="" class="ui dropdown">
                        @{{#each properties.natures_of_appointment}}
                        <option value="@{{id}}" @{{propertyCheck ../current_nature_of_appointment_id id}}>@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
                <div class="seven wide field ">
                    <label for="appointing_authority_id">Appointment Authority</label>
                    <select name="service[appointing_authority_id]" class="ui dropdown">
                        @{{#each properties.appointing_authorities}}
                        <option value="@{{id}}" @{{propertyCheck ../service.appointing_authority_id id}}>@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
                <div class="three wide field ">
                    <label for="rank_in_recruitment">Rank</label>
                    <input type="text" name="service[rank_in_recruitment]" value="@{{service.rank_in_recruitment}}">
                </div>
            </div>
            <div class="fields">
                <div class="six wide field">
                    <label for="pension_type">Pension Type</label>
                    <select name="service[pension_type_id]" class="ui dropdown" onchange="pensionTypeChange(this)">
                        @{{#each properties.pension_types}}
                        <option value="@{{id}}" @{{propertyCheck ../service.pension_type_id id}}>@{{name}}</option>
                        @{{/each}}
                    </select>
                </div>
                <div class="six wide field ">
                    <label for="gpf_account_number">GPF Account Number</label>
                    <div class="fields">
                        <div  class="twelve wide field">
                            <select name="service[gpf_prefix_id]" @{{disabledIfNull service.gpf_prefix_id}}>
                                @{{#each properties.gpf_prefixes}}
                                <option value="@{{id}}" @{{propertyCheck ../service.gpf_prefix_id id}}>@{{name}}</option>
                                @{{/each}}
                            </select>
                        </div>
                        <div class="six wide field">
                            <input type="text" name="service[gpf_suffix]" @{{disabledIfNull service.gpf_suffix}} value="@{{service.gpf_prefix_id}}">
                        </div>
                    </div>
                </div>
                <div class="four wide field ">
                    <label for="new_pension_scheme_number">NPS Number</label>
                    <input type="text" name="service[new_pension_scheme_number]" value="@{{service.new_pension_scheme_number}}" @{{disabledIfNull service.new_pension_scheme_number}}>
                </div>
            </div>
            <div class="four fields">
                <div class="field">
                    <label for="pension_type">Teacher Grade</label>
                    <select name="service[grade]" class="ui dropdown">
                        <option value="None" @{{propertyCheck service.grade 'None' }}>None</option>
                        <option value="Senior" @{{propertyCheck service.grade 'Senior' }}>Senior</option>
                        <option value="Selection" @{{propertyCheck service.grade 'Selection' }}>Selection</option>
                    </select>
                </div>
                <div class="field ">
                    <label for="date_of_appointment">Date of Appointment</label>
                    <input type="text" name="service[date_of_appointment]" class="datepicker" value="@{{service.date_of_appointment}}">
                </div>
                <div class="field ">
                    <label for="date_of_joining">Date of Joining</label>
                    <input type="text" name="service[date_of_joining]" class="datepicker" value="@{{nullDate service.date_of_joining}}">
                </div>
                <div class="field ">
                    <label for="date_of_confirmation">Date of confirmation</label>
                    <input type="text" name="service[date_of_confirmation]" class="datepicker" value="@{{nullDate service.date_of_confirmation}}">
                </div>
            </div>
        </form>
    </div>
    <div class="actions">
        <div class="ui black deny button">
        Cancel
        </div>
        <div id="post-service" class="ui positive right labeled icon button" data-serviceid="@{{service.id}}">
        Validate
        <i class="warning circle icon"></i>
        </div>
    </div>
</script>
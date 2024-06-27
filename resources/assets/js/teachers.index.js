if(app.route == 'teachers.index'){

    var teacher; //tih dan dang ka hre tawh rih lo.

    Handlebars.registerHelper('propertyCheck', function(prop, val) {
        return prop == val ? 'selected="selected"' : '';
    });
    Handlebars.registerHelper('propertyCheckIn', function(props, val) {
        return ((typeof props == 'undefined') || props == null )? null : ( props.indexOf(val.toString()) != -1 ? 'selected="selected"' : '' );
    });
    Handlebars.registerHelper('disabledIfNull', function(prop) {
        return prop === null ? 'disabled="disabled"' : '';
    });
    Handlebars.registerHelper('nullDate', function(prop) {
        return prop === '0000-00-00' ? '' : prop;
    });
    Handlebars.registerHelper('postOrSchool', function(place_of_post, school) {
        return place_of_post === null ? school : place_of_post;
    });
    Handlebars.registerHelper('showIfAdvanced', function() {
        return app.isAdvancedSearch?'': 'display:none';
    });

    var properties = $('#teacher_cards').data('properties');

    $('#post_different_from_school').change(function(){
        postDifferentFromSchoolChange($(this));
    });

    /**
     * ADVANCED SEARCH
     */
    $(function(){
        var source   = $("#advanced_search_contents").html();
        var template = Handlebars.compile(source);
        properties.searchFilters = app.teacherSearchFilters;

        var html    = template(properties);
        $('#search_form').html(html);

        if(app.isAdvancedSearch){
            console.log('adv');
            $('#advanced_search_toggle').attr('checked', 'checked');
        }
        initLibraries();
    });
    function showSearchForm() {
        $('#search_form').toggle()
    }
    function toggleAdvanceSearch(el){
        if($(el).is(':checked'))
            $('.advanced-search-fields').show()
        else
            $('.advanced-search-fields').hide()
    }

    /** RETIRE TEACHER **/
    $('.retire-button').click(function(e){
        e.preventDefault();
        teacher = getTeacher($(this));
        teacher.properties = properties;

        var source   = $("#retire-modal-content").html();
        var template = Handlebars.compile(source);
        var html    = template(teacher);
        $('#retire-modal').html(html);

        initLibraries();

        $('#retire-modal')
            .modal('setting', 'closable', false)
            .modal('setting', 'focus', true)
            .modal('setting', 'onApprove', function(){return false})
            .modal('show');

        var retirementRules = {
            retired_on: {
                identifier  : 'retired_on',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter date'
                    }
                ]
            },
        };

        $(document).on('click','#post-retirement',function(){
            $('#retirement-form').form({
                on:'blur',
                inline:true,
                fields: retirementRules,
                onSuccess: function(){
                    $('#post-retirement').html('Submit <i class="checkmark icon"></i>');
                    $('#post-retirement').api({
                        action:'retire teacher',
                        method: 'POST',
                        data: $('#retirement-form').serialize(),
                        onSuccess: function(response){
                            showAlert(response.messages);
                            $('#retire-modal').modal('hide');
                            $('.single.teacher#teacher-' + response.data.teacher.id).addClass('red').find('.posting-button, .retire-button').addClass('disabled');
                        },
                        onFailure: function(response){
                            showAlert(response.messages);
                            $('#retire-modal').modal('hide');
                        }
                    });
                    console.log('retirement success');
                }
            })
            .form('validate form');
            
        });
    });


    /**
    Promotion modal
    **/

    $(document).on('click', '.posting-button', function(e){
        e.preventDefault();
        teacher = getTeacher($(this));
        var lastPosting = teacher.postings[teacher.postings.length - 1];
        teacher.lastPosting = lastPosting;
        teacher.properties = properties;

        var source   = $("#promote-modal-content").html();
        var template = Handlebars.compile(source);
        var html    = template(teacher);
        $('#promote-modal').html(html);

        // /** reset the select **/
        initLibraries();


        $('#promote-modal')
            .modal('setting', 'closable', false)
            .modal('setting', 'focus', true)
            .modal('setting', 'onApprove', function(){return false})
            .modal('setting', 'onShow', function(){
                $(document).on('change','select[name=posting\\[nature_of_appointment_id\\]]', function(){
                    
                    if(teacher.current_nature_of_appointment_id != 1 && $(this).val() == 1){
                        $('.new-regular.fields').css('display','flex'); 
                        $('.new-regular.field').css('display','block'); 
                        $('.new-regular')
                            .find('input,select')
                            .not('[name=service\\[gpf_prefix\\]],\
                                [name=service\\[gpf_suffix\\]],\
                                [name=service\\[new_pension_scheme_number\\]]'
                            )
                            .removeAttr('disabled'); 

                        postingRules.date_of_appointment = {
                                identifier  : 'date_of_appointment',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter date'
                                    }
                                ]
                            }
                        $('#post-posting')
                            .addClass('red')
                            .removeClass('positive')
                            .html('Please check the form and revalidate <i class="warning sign icon"></i>')
                            .api('destroy');
                        // $('#posting-form').form('validate form');
                    }else{
                        $('.new-regular').hide().find('input, select').attr('disabled');
                        delete postingRules.date_of_appointment;
                    }
                });

                if(teacher.current_nature_of_appointment_id == 1){
                    $('#promote-modal').find('select[name=posting\\[nature_of_appointment_id\\]]').attr('readonly','readonly').closest('.field').hide();
                }else{
                    $('#promote-modal').find('select[name=posting\\[nature_of_appointment_id\\]]').removeAttr('readonly').closest('.field').show();
                }
            })
            .modal('show');



        $('.ui.search')
            .search({
                type: 'standard',
                apiSettings: {
                    url: '/search-school/{query}'
                },
                onSelect:function(result, response){
                    $('#school_id').val(result.school_id);
                },
                minCharacters: 5
            })
         ;
        var postingRules = {
            posting_date_of_appointment: {
                identifier  : 'posting_date_of_appointment',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter date'
                    }
                ]
            },
        };

        $(document).on('click','#post-posting', function(){
            $('#posting-form')
            .form({
                on:'blur',
                inline:true,
                fields: postingRules,
                onSuccess: function(){
                    $('#post-posting')
                        .addClass('positive')
                        .removeClass('red')
                        .html('Submit <i class="checkmark icon"></i>');
                    $('#post-posting').api({
                        action:'update teacher posting',
                        method: 'POST',
                        data: $('#posting-form').serialize(),
                        onSuccess: function(response){
                            finishEdit(response);
                            $('#promote-modal').modal('hide');
                            $('#post-posting').api('destroy');
                        },
                        onFailure: function(response){
                            finishEdit(response);
                            $('#promote-modal').modal('hide');
                            $('#post-posting').api('destroy');
                        }
                    });
                },
                onFailure: function(){
                    $('#post-posting')
                        .addClass('red')
                        .removeClass('positive')
                        .html('Please check the form and revalidate <i class="warning sign icon"></i>');
                }
            })
            .form('validate form');
        });
        
    });


    /**
     * EDIT PERSONAL INFORMATION
     */
    $(document).on('click','.edit-button',function(e){
        e.preventDefault();

        teacher = getTeacher($(this));
        var source   = $("#edit-modal-content").html();
        var template = Handlebars.compile(source);
        teacher.properties = properties;
        var html    = template(teacher);
        $('#edit-modal').html(html);

        $('#edit-modal')
            .modal('setting', 'closable', false)
            .modal('setting', 'focus', true)
            .modal('setting', 'onApprove', function(){return false})
            .modal('show');
        
        initLibraries();
        $(document).on('click','#post-edit', function(){
            var form = document.forms.namedItem("myform"); //document.getElementById("edit-form");
            var fd = new FormData(form);
            $('#edit-form')
            .form({
                on:'blur',
                inline:true,
                fields: teacherPersonalFields,
                onSuccess: function(){
                    $('#post-edit')
                        .html('Submit <i class="checkmark icon"></i>')
                        .removeClass('negative')
                        .addClass('positive')
                        .api({
                            action:'update teacher personal',
                            method: 'PUT',
                            data: $('#edit-form').serialize(),
                            onSuccess: function(response){
                                finishEdit(response);

                                $('#edit-modal').modal('hide');
                                $('#post-edit').api('destroy');
                                $('#post-edit').html('Validate <i class="checkmark icon"></i>');
                            },
                            onFailure: function(response){
                                showAlert(response.messages);
                                $('#edit-modal').modal('hide');
                            }
                        });
                },
                onFailure: function(){
                    $('#post-edit')
                        .addClass('red')
                        .removeClass('positive')
                        .html('Please check the form and revalidate <i class="warning sign icon"></i>');
                }
            })
            .form('validate form');
            
        });
    });

    /**
     * EDIT SERVICE INFORMATION 
     * asd
     */
    $(document).on('click','.service-button',function(e){
        e.preventDefault();
        
        teacher = getTeacher($(this));
        teacher.properties = properties;

        var source   = $("#service-modal-content").html();
        var template = Handlebars.compile(source);
        var html    = template(teacher);
        $('#service-modal').html(html);

        if(teacher.service != null && teacher.service.new_pension_scheme_number != null){
            $('#service_new_pension_scheme_number').removeAttr('disabled');
        }

        /**
         * Get the gpf_prefix using the data_gpfprefixes attribute.
         */
        
        $('.ui.dropdown').dropdown();

        $('#service-modal')
            .modal('setting', 'closable', false)
            .modal('setting', 'focus', true)
            .modal('setting', 'onApprove', function(){return false})
            .modal('show');

        initLibraries();

        /**
         * Submit the form
         */
        $(document).on('click', '#post-service', function(){
            $('#post-service')
                .html('Submit <i class="checkmark icon"></i>');
            $('#post-service').api({
                action:'update teacher service',
                method: 'PUT',
                data: $('#service-form').serialize(),
                onSuccess: function(response){
                    showAlert(response.messages);
                    finishEdit(response);
                    $('#service-modal').modal('hide');
                    $('#post-service').api('destroy');
                },
                onFailure: function(response){
                    showAlert(response.messages);
                    $('#service-modal').modal('hide');
                }
            });
        });

     });

    $(document).on('click', '.history-button', function(e){
        e.preventDefault();
        teacher = getTeacher($(this));
        var lastPosting = teacher.postings[teacher.postings.length - 1];
        teacher.lastPosting = lastPosting;
        teacher.properties = properties;

        var source   = $("#history-modal-content").html();
        var template = Handlebars.compile(source);
        var html    = template(teacher);
        $('#history-modal').html(html);
        $('#history-modal')
            .modal('setting', 'closable', false)
            .modal('setting', 'focus', true)
            .modal('show');

    });
    /** Helper functions **/
    var getTeacher = function($el){
        return $el.closest('.single.teacher').data('teacher');
    }
    var getTeacherId = function ($el){
        return $el.closest('.single.teacher').data('teacherid');
    }
    var getTeacherName = function ($el){
        return $el.closest('.single.teacher').data('teachername');
    }

    var postDifferentFromSchoolChange = function(el) {
        if($(el).is(':checked')) {
            $('#place_of_post').removeAttr('disabled').closest('.field').removeClass('disabled');
        }else{
            $('#place_of_post').attr('disabled','disabled').closest('.field').addClass('disabled');
        }
    }

    var finishEdit = function(response){
        teacher = response.data.teacher;
        showAlert(response.messages);
        
        var index = $('div#teacher-' + teacher.id).index();
        $('div#teacher-' + teacher.id).remove();

        if(index == 0){
            $('#teacher_cards').prepend(createTeacherCard(teacher));
        }
        else{
            $('#teacher_cards .single.teacher:nth-child('+index+')').after(createTeacherCard(teacher));
        }
        // .append(createTeacherCard(teacher));
    }
}
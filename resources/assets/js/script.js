/**
SEMANTIC API ACTIONS
**/
$.fn.api.settings.api = {
	'get teacher properties' : '/teacher-properties/',
	'retire teacher' : '/retirements/',
	'update teacher posting' : '/postings',
	'update teacher personal' : '/teachers/{tid}',
	'update teacher service' : '/services/{serviceid}',
	'search school'  : '/search-school/{query}'
};

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': app.token
    }
});
$(function(){

	initLibraries();

	// $('.datetimepicker').datetimepicker({
	// 	format: 'yyyy-mm-dd'
	// });

	

	$('.ui.search.school')
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

});

$('.pageload-wrap').remove();
$('.loading-hidden').removeClass('loading-hidden');

function initLibraries () {
	/**
	Libraries
	**/
	$('.ui.dropdown').dropdown();
	
	$('.ui.multiple.dropdown').dropdown({
		allowAddition:true
	});

	$('.checkbox').checkbox();
	$('.popup-toggle').popup({
		hoverable: true,
	});
	
	if($('.datepicker').length > 0){
		$('.datepicker').datetimepicker({
			format: 'yyyy-mm-dd',
			minView: 2,
			startView: 4,
			todayBtn: true
		});
	}

	if($('.yearpicker').length > 0){
		$('.yearpicker').datetimepicker({
			format: 'yyyy',
			minView: 4,
			startView: 4
		});
	}
}

function readImage(input, $previewElement) {
	console.log('readImage Starts');

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$previewElement.attr('src', e.target.result).removeClass('hidden');
		}

		reader.readAsDataURL(input.files[0]);
		console.log(reader);
	}
}

function showAlert(alerts) {
	a = alerts;
	$(alerts).each(function(key,alert){
		var html = $('<div />').addClass('ui ' + alert.status + ' message');
		var content = $('<div />').addClass('content');

		if(typeof alert.closable != 'undefined')
			html.append('<i class="close icon"></i>');

		if(typeof alert.icon !== 'undefined')
			html.append('<i class="'+alert.icon+' icon"></i>')
		
		if(typeof alert.header !== 'undefined')
			content.append($('<div />').addClass('header').text(alert.header));
		
		content.append($('<p>').text(alert.content)).appendTo(html);
		html.appendTo($('#message-wrapper')).transition('fade', '300ms').transition('fade',2000)
	});
}

function chunk_split (body, chunklen, end) {
    chunklen = parseInt(chunklen, 10) || 76;
    end = end || '\r\n';

    if (chunklen < 1) {
        return false;
    }

    return body.match(new RegExp(".{0," + chunklen + "}", "g")).join(end);
}

/**
 * TEACHER GLOBAL FUNCTIONS
 */

function createTeacherCard (teacher) {
	var html = '<div id="teacher-'+teacher.id+'" class="primary ' + ( teacher.status == 'inactive' ? 'red' : '') + ' card single teacher" data-teacher=\'' + JSON.stringify(teacher).replace(/'/g, "&#39;") + '\'>';
		html+= '<div class="content">';
		html+= '<img class="right floated mini ui image" src="/uploads/teachers/' + teacher.photo_url + '">';
		html+= '<h4 class="header">' + teacher.name + '</h4>';
		html+= '<div class="meta">';
		html+= '<span class="">'+ teacher.qualification + '(' + teacher.professional_qualification + ')' + '<br>' + teacher.postings[0].type_of_teacher + '</span>';
		html+= '</div>';
		html+= '<div class="description">';
		html+= '<p>' + teacher.postings[0].school_name + '</p>';
		// html+= '<p>' + teacher.postings[0].management + '</p>';
		html+= '</div>';
		html+= '</div>';
		html+= '<div class="ui bottom attached six buttons"> \
					<a href="#" class=" ui basic icon button popup-toggle" data-content="View Posting History" data-variation="inverted">\
						<i class="history icon"></i>\
					</a>\
					<a href="http://edu.dev/teachers/8" class=" ui basic icon button popup-toggle" data-content="View Details" data-variation="inverted">\
						<i class="list icon"></i>\
					</a>\
					<a href="http://edu.dev/teachers/8/edit" class="ui basic edit-button icon button popup-toggle enabled" data-content="Update personal information for this teacher" data-variation="inverted">\
						<i class="edit icon"></i>\
					</a>\
					<a href="http://edu.dev/teachers/service/8" class="ui basic ' + (teacher.service == null || teacher.status == 'inactive' ? 'disabled' : 'service-button' ) + ' icon button popup-toggle enabled" data-content="Update service information for this teacher" data-variation="inverted">\
						<i class="info icon"></i>\
					</a>\
					<a href="http://edu.dev/teachers/promote/8" class="ui basic '+ (teacher.status == 'inactive' ? 'disabled' : 'posting-button') + ' icon button popup-toggle enabled" data-content="Promote/transfer this teacher" data-variation="inverted">\
						<i class="exchange icon"></i>\
					</a>\
					<a href="" class="ui basic icon button popup-toggle '+ (teacher.status == 'inactive' ? 'disabled' : 'retire-button') + ' enabled" data-content="Retire this teacher" data-variation="inverted">\
						<i class="remove arrow icon"></i>\
					</a>\
				</div>\
			</div>';
	return html;
}

function pensionTypeChange (el) {
	console.log(el)
	var $form = $(el).closest('form');
	if($(el).val() == 2){
		$form.find('[name=service\\[new_pension_scheme_number\\]]').removeAttr('disabled').closest('.field').removeClass('disabled');
		$form.find('[name=service\\[gpf_prefix_id\\]], [name=service\\[gpf_suffix\\]]').attr('disabled', 'disabled').closest('.six.field').addClass('disabled');
	}else if($(el).val() == 3){
		$form.find('[name=service\\[new_pension_scheme_number\\]]').attr('disabled','disabled').closest('.field').addClass('disabled');
		$form.find('[name=service\\[gpf_prefix_id\\]], [name=service\\[gpf_suffix\\]]').removeAttr('disabled').closest('.six.field').removeClass('disabled');
	}else{
		$form.find('[name=service\\[new_pension_scheme_number\\]]').attr('disabled','disabled').closest('.field').addClass('disabled');
		$form.find('[name=service\\[gpf_prefix_id\\]], [name=service\\[gpf_suffix\\]]').attr('disabled', 'disabled').closest('.six.field').addClass('disabled');
	}
}


/**
 * Disable service inputs when the nature of appointment is Contract or Part time
 * If the nature of aapointment is regular, enable them
 * @param  {DOMobject} el the select element used for choosing the nature of appointment 
 * @return {null} 
 */
function natureOfAppointmentChange (el) {
	$(app).trigger('natureOfAppointmentChanged', el);
	var $form = $(el).closest('.service-wrapper');
	if($(el).val() == 1){
		var pensionInfo = $('[name=service\\[new_pension_scheme_number\\]], [name=service\\[gpf_prefix_id\\]], [name=service\\[gpf_suffix\\]]');
		$form.find('input, select').not(el).not(pensionInfo).removeAttr('disabled').closest('.field').removeClass('disabled');	
	}else{
		$form.find('input, select').not(el).attr('disabled','disabled').closest('.field').addClass('disabled');
		$form.find('[name=service\\[gpf_prefix_id\\]]').closest('.six.field').addClass('disabled');
	}
}

/**
 * Enable spouse name field if marital status is married.
 * @param  {DOMObject} el dropdwn element used for choosing marital status
 * @return {null}
 */
function maritalStatusChange (el) {
	$wrapper = $(el).closest('.personal-wrapper');
	if($(el).val() == 2){
		$wrapper.find('[name=spouse_name]').removeAttr('disabled').closest('.field').removeClass('disabled');
	}else{
		$wrapper.find('[name=spouse_name]').closest('.field').addClass('disabled');
	}
}

/**
 * Enable passing year if there's a professional qualification
 * @param  {DOMObject} el the dropdown for professional qualification
 * @return {null}
 */
function professionalQualificationChange (el) {
	$wrapper = $(el).closest('.education-wrapper');
	if($(el).val() != 1){
		$wrapper.find('[name=professional_qualification_year]').removeAttr('disabled');
	}else{
		$wrapper.find('[name=professional_qualification_year]').attr('disabled','disabled');
	}
}

function changeDateOfAppointment (el) {
	$wrapper = $(el).closest('.service-wrapper');
	$wrapper.find('[name=service\\[date_of_confirmation\\]], [name=service\\[date_of_joining\\]]').val($(el).val());
	$('.posting-wrapper').find('[name=posting\\[date\\]]').val($(el).val());
}


function postDifferentFromSchoolChange (el) {
	$wrapper = $(el).closest('.posting-wrapper');
	if($(el).is(':checked')) {
		$wrapper.find('[name=posting\\[place_of_post\\]]').removeAttr('disabled').closest('.field').removeClass('disabled');
	}else{
		$wrapper.find('[name=posting\\[place_of_post\\]]').attr('disabled','disabled').closest('.field').addClass('disabled');
	}
}

var teacherPersonalFields = {
			name: {
				identifier  : 'name',
				rules: [
					{
						type   : 'empty',
						prompt : 'Please enter name'
					}
				]
			},
			father_name: {
				identifier  : 'father_name',
				rules: [
					{
						type   : 'empty',
						prompt : 'Please enter Father\'s name'
					}
				]
			},
			mother_name: {
				identifier  : 'mother_name',
				rules: [
					{
						type   : 'empty',
						prompt : 'Please enter Mother\'s name'
					}
				]
			},
			phone_number: {
				identifier  : 'phone_number',
				optional	: 'true',
				rules: [
					{
						type   : 'minLength[10]',
						prompt : 'Phone number should be 10-11 digits'
					},
					{
						type   : 'maxLength[11]',
						prompt : 'Phone number should be 10-11 digits'
					},
				]
			},
			mobile_number: {
				identifier  : 'mobile_number',
				optional	: 'true',
				rules: [
					{
						type   : 'minLength[10]',
						prompt : 'Please enter 10 digit mobile number (E.g 9862986266)'
					}
				]
			},
			email: {
				identifier  : 'email',
				optional	: 'true',
				rules: [
					{
						type   : 'email',
						prompt : 'Please enter valid email address'
					}
				]
			},
			present_address: {
				identifier  : 'present_address',
				rules: [
					{
						type   : 'empty',
						prompt : 'Permanent address is required'
					}
				]
			},
			permanent_address: {
				identifier  : 'permanent_address',
				rules: [
					{
						type   : 'empty',
						prompt : 'Permanent address is required'
					}
				]
			}
		};

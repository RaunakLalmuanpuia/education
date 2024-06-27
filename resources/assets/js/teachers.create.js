if(app.route == 'teachers.create'){


	$(function(){
		
		$("#photo").change(function(){
			readImage(this, $('#photo-preview'));
		});

		maritalStatusChange($('#marital_status_id'));
		natureOfAppointmentChange($('#nature_of_appointment_id'));
		pensionTypeChange($('#pension_type'));
		professionalQualificationChange($('#professional_qualification'));
		postDifferentFromSchoolChange($('#post_different_from_school'));

		$('#current_nature_of_appointment_id').change(function(){
			$('#nature_of_appointment_id').val($(this).val());
		})
		
		$('#teacher-form')
			.form({
				on:'blur',
				inline:true,
				fields: teacherPersonalFields
			});
	});
	
	function refreshForm () {
		$('#teacher-form')
			.form({
				on:'blur',
				inline:true,
				fields: teacherPersonalFields
			})
		// $('#teacher-form').form('validate form');
	}
}
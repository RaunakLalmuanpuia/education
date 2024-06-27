<?php 

namespace TIST\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use Excel;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;
use TIST\Models\Posting;
use TIST\Models\School;
use TIST\Models\School\Category;
use TIST\Models\School\Management;
use TIST\Models\Teacher;
use TIST\Models\Teacher\ServiceInformation as Service;
use TIST\Models\Teacher\Qualification;
use TIST\Models\Teacher\Subject;
use TIST\Models\Teacher\NatureOfAppointment;

class ReportsController extends Controller
{

	public function school(Request $request, Teacher $teacherModel, School $schoolModel)
	{
		if($request->get('submitted')){
			$school_id = $request->get('school_id');
			
			if($school_id)
				$school = $schoolModel->find($school_id);

			$postings = $teacherModel->getReportBySchool($school_id);
			$title = $school_id ? 'Teachers in ' . $school->name : 'Teachers by school';

			$headers = [
				'Name',
				'Father\s Name',
				'School',
				'Current Place of Work',
				'Nature of Appointment',
				'Type of Teacher',
				'Present Address',
				'Permanent Address',
				'Mobile',
				'Landline',
				'Date Of Birth',
				'Date Of Pension',
				'Selection Grade',
				'Senior Grade',
			];

			$data = [];

			foreach ($postings as $posting) {
				$teacher = [
					$posting->teacher->name,
					$posting->teacher->father_name,
					$posting->school->name,
					$posting->place_of_work ? : $posting->school->name,
					isset($posting->nature_of_appointment) ? $posting->nature_of_appointment->name:'n/a',
					isset($posting->type_of_teacher) ? $posting->type_of_teacher->name : 'n/a',
					$posting->teacher->present_address,
					$posting->teacher->permanent_address,
					$posting->teacher->mobile_number,
					$posting->teacher->phone_number,
					formatDate($posting->teacher->date_of_birth, true, false),
					getPensionDate($posting->teacher->date_of_birth, true, false),
					getSelectionGradeDate($posting->teacher->date_of_birth, true, false),
					getSeniorGradeDate($posting->teacher->date_of_birth, true, false),
				];
				$data[] = $teacher;
			}

			generateReport($title, $headers, $data);

		}

		return view('reports.school');
	}

	public function category(Request $request, Teacher $teacherModel, Category $categoryModel, School $schoolModel)
	{
		$categories = $categoryModel->lists('name', 'id');
		if($request->get('submitted')){
			$category_id = $request->get('category_id');
			$postings = $teacherModel->getReportByCategory($category_id);
			$title = $categoryModel->name . ' Teachers';
			$headers = [
				'ID',
				'Name',
				'School',
				'Qualification',
				'Place of Work',
				'Designation',
				'Nature of Appointment',
				'Father\'s Name',
				'Mobile',
				'Landline',
				'Present Address',
				'Permanent Address',
				'School Code',
				'District',
				'School Category',
			];
			// dd($headers);
			generateReport($title, $headers, $postings);
		}
		return view('reports.category', compact('categories'));
	}

	public function qualification(Request $request, Teacher $teacherModel, Qualification $qualificationModel)
	{
		$qualification_id = $request->get('qualification_id');
		if($qualification_id){
			$teachers = $teacherModel->getReportByQualification($qualification_id);
			$qualification = $qualificationModel->find($qualification_id);
			$title = 'Teachers with qualification ' . $qualification->name;
			$headers = [
				'ID',
				'Name',
				'School',
				'Qualification',
				'Place of Work',
				'Designation',
				'Nature of Appointment',
				'Father\'s Name',
				'Mobile',
				'Landline',
				'Present Address',
				'Permanent Address',
				'School Code',
				'District',
				'School Category',
			];
			generateReport($title, $headers, $teachers);
		}
		$qualifications = $qualificationModel->lists('name', 'id');
		return view('reports.qualification', compact('qualifications'));
	}
	public function management(Request $request, Teacher $teacherModel, Management $managementModel)
	{
		$management_id = $request->get('management_id');
		if($management_id){
			$teachers = $teacherModel->getReportByManagement($management_id);
			$management = $managementModel->find($management_id);
			$title = 'Teachers working in schools with management ' . $management->name;
			$headers = [
				'ID',
				'Name',
				'School',
				'Qualification',
				'Place of Work',
				'Designation',
				'Nature of Appointment',
				'Father\'s Name',
				'Mobile',
				'Landline',
				'Present Address',
				'Permanent Address',
				'School Code',
				'District',
				'School Category',
			];
			generateReport($title, $headers, $teachers);
		}
		$managements = $managementModel->lists('name', 'id');
		return view('reports.management', compact('managements'));
	}

	public function subject(Request $request, Teacher $teacherModel, Subject $subjectModel)
	{
		$subject_id = $request->get('subject_id');
		if($subject_id){
			$teachers = $teacherModel->getReportBySubject($subject_id);
			$subject = $subjectModel->find($subject_id);

			$title = 'Teachers teaching ' . $subject->name;

			$headers = $this->getHeaders();

			generateReport($title, $headers, $teachers);
		}

		$subjects = $subjectModel->lists('name','id');

		return view('reports.subject', compact('subjects'));
	}

	public function appointment(Request $request, Teacher $teacherModel, NatureOfAppointment $appointmentModel)
	{
		$appointment_id = $request->get('appointment_id');
		if($appointment_id){
			$teachers = $teacherModel->getReportByAppointment($appointment_id);
			$appointment = $appointmentModel->find($appointment_id);

			$title = 'Teachers by appointment - ' . $appointment->name;

			$headers = $this->getHeaders();
			generateReport($title, $headers, $teachers);
		}

		$appointments = $appointmentModel->lists('name','id');

		return view('reports.appointment', compact('appointments'));
	}

	public function grade(Request $request, Teacher $teacherModel)
	{
		$grade = $request->get('grade');

		$grades = ['senior'=>'Senior','selection'=>'Selection'];

		if($grade){
			$teachers = $teacherModel->getReportByGrade($grade);

			$title = 'Teachers - ' . $grades[$grade];

			$headers = $this->getHeaders();
			generateReport($title, $headers, $teachers);
		}

		return view('reports.grade', compact('grades'));
	}

	public function training(Request $request, Teacher $teacherModel)
	{
		$training_status = $request->get('training_status');

		$trainingStatuses = ['trained'=>'Trained', 'untrained'=>'Untrained'];

		if($training_status){
			$teachers = $teacherModel->getReportByTrainingStatus($training_status);
			$title = 'Teachers - ' . ucfirst($training_status);
			$headers = $this->getHeaders();
			$headers[] = 'Training';
			generateReport($title, $headers, $teachers);
		}

		return view('reports.training', compact('trainingStatuses'));
	}

	public function getHeaders()
	{
		return [
			'ID',
			'Name',
			'School',
			'Qualification',
			'Place of Work',
			'Designation',
			'Nature of Appointment',
			'Father\'s Name',
			'Mobile',
			'Landline',
			'Present Address',
			'Permanent Address',
			'School Code',
			'District',
			'School Category',
			'Date Of Birth',
			'Date Of Appointment',
		];
	}
}
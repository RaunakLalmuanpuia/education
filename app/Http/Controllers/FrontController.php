<?php

namespace TIST\Http\Controllers;

use Illuminate\Http\Request;

use TIST\Http\Requests;
use TIST\Http\Controllers\Controller;

use Endroid\QrCode\QrCode;
use TIST\Models\Teacher;
use TIST\Models\School;
use DB;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function welcome(){
		$teachers 		= Teacher::count();
		$schools 		= School::count();
		$catWiseSchools	= DB::table('schools')
							->join('school_categories','schools.school_category_id','=','school_categories.id')
							->select(
								DB::Raw("COUNT(*) AS countRows"),
								DB::Raw("school_category_id AS catCode"),
								"school_categories.name AS catName"
							)
							->groupBy('school_category_id')
							->where('school_category_id', '!=', '0')->get();

		$distWiseSchoolsCats= DB::table('schools')
							->join('school_categories','schools.school_category_id','=','school_categories.id')
							->join('districts','schools.district_code','=','districts.code')
							->select(
								DB::Raw("COUNT(*) AS countRows"),
								DB::Raw("school_category_id AS catCode"),
								"school_categories.name AS catName",
								"districts.name AS districtName"
							)
							->groupBy('district_code')
							->groupBy('school_category_id')
							->where('school_category_id', '!=', '0')->get();
		$distWiseSchoolsCats = collect($distWiseSchoolsCats)->groupBy('districtName');
		$distWiseSchools= DB::table('schools')
							->join('districts','schools.district_code','=','districts.code')
							->select(
								DB::Raw('COUNT(id) AS countRows'),
								DB::Raw("district_code AS districtCode"),
								"districts.name AS districtName"
							)
							->groupBy('district_code')
							->where('district_code', '!=', '')->get();


		return view('welcome',compact('teachers','schools','distWiseSchools','catWiseSchools', 'distWiseSchoolsCats'));
	}

	public function qr($name, $address,$phone, $email)
	{
		$name = urldecode($name);
		$address = urldecode($address);
		$phone = urldecode($phone);
		$email = urldecode($email);

		//comma separated address. PO box, room number, house number, city, prefecture, zip code and country, in order.
		header('Content-Type: image/png');
		$string = "MECARD:N:{$name};ADR:{$address};" . ( $phone == '-' ? '' : "TEL:{$phone};" ) . ( $email == '-' ? '' : "EMAIL:{$email};" ) . ";";
		
		$qr = new QrCode();
		$qr
			->setText($string)
			->setSize(300)
			->setPadding(10)
			->setErrorCorrection('high')
			->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
			->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
			->setLabel('My label')
			->setLabelFontSize(16)
		;
		$qr->render();
	}

	public function contact()
	{
		return view('contact');
	}
}

<?php

use Illuminate\Support\Debug\Dumper;
use Endroid\QrCode\QrCode;
use Illuminate\Support\Str;

function qrImage($name, $address,$phone, $email, $size)
{
    return '<img class="ui centered '.$size.' image" src="/qr/' . $name .'/' . $address .'/' . $phone .'/'. $email . '">';
}

function qrSample($size = 'tiny')
{
    $name = urlencode('Liana Rarlte');
    $address = urlencode("Q-32, Kulikawn\nAizawl, Mizoram");
    $phone = urlencode('+918974005472');
    $email = urlencode('liana@gfail.com');
    return '<img class="ui centered '.$size.' image" src="/qr/' . $name .'/' . $address .'/' . $phone .'/'. $email . '">';
}

if(!function_exists('d')){
	function d(){
		array_map(function($x) { (new Dumper)->dump($x); }, func_get_args());
	}
}

function getCurrentRoute()
{
	return Route::current()->getName();
}

function errorClass($errors, $field)
{
	return $errors->has($field) ? 'error' : '';
}

function errorMessage($errors, $field)
{
	return $errors->has($field) ? '<div class="ui red pointing prompt label transition visible">' . $errors->first($field) . '</div>' : ''; 
	
}

function teacherImage($teacher)
{
	return $teacher->photo ? '/uploads/teachers/' . chunk_split(md5($teacher->id), 2, '/') . '/' . $teacher->photo : '/images/no-image.png';
}

function getTeacherInput($name, $teacher){
	$arr = explode('.', $name);
	$meta = $arr[0];
	$field = $arr[1];
	return Input::old($name, (isset($teacher->$meta) ? ($teacher->$meta->$field?:null) : null) );
}

function getTotalsForSchool($school)
{
    if(!$school){
        return [
            'totals' => 0,
            'total' => 0,
            'totalBoys' => 0,
            'totalGirls' => 0,
            'totalStudents' => 0,
        ];
    }
	$total = $school->cpp_b + $school->cpp_g + $school->c1_b + $school->c1_g + $school->c2_b + $school->c2_g + $school->c3_b + $school->c3_g + $school->c4_b + $school->c4_g + $school->c5_b + $school->c5_g + $school->c6_b + $school->c6_g + $school->c7_b + $school->c7_g + $school->c8_b + $school->c8_g + $school->c9_b + $school->c9_g + $school->c10_b + $school->c10_g + $school->c11_b + $school->c11_g + $school->c12_b + $school->c12_g ;
	$totalBoys = $school->cpp_b + $school->c1_b + $school->c2_b + $school->c3_b + $school->c4_b + $school->c5_b + $school->c6_b + $school->c7_b + $school->c8_b + $school->c9_b + $school->c10_b + $school->c11_b + $school->c12_b;;
	$totalGirls = $school->cpp_g + $school->c1_g + $school->c2_g + $school->c3_g + $school->c4_g + $school->c5_g + $school->c6_g + $school->c7_g + $school->c8_g + $school->c9_g + $school->c10_g + $school->c11_g + $school->c12_g;
	$totalStudents = $totalBoys + $totalGirls;

	$totals = [];
	        
    $categoryClasses = [
        1 => ['pp', '1', '2', '3', '4'],
        2 => ['pp', '1', '2', '3', '4', '5', '6', '7', '8'],
        3 => ['pp', '1', '2', '3', '4', '5', '6', '7', '8', '9','10', '11', '12'],
        4 => ['5', '6', '7', '8'],
        5 => ['5', '6', '7', '8', '9', '10', '11', '12'],
        6 => ['pp', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
        7 => ['5', '6', '7', '8', '9', '10'],
        8 => ['9', '10'],
        9 => [],
        10 => ['9','10', '11', '12'],
        11 => ['11', '12'],
    ];

    $names = [
        'pp' => 'Pre',
        '1' => 'I',
        '2' => 'II',
        '3' => 'III',
        '4' => 'IV',
        '5' => 'V',
        '6' => 'VI',
        '7' => 'VII',
        '8' => 'VIII',
        '9' => 'IX',
        '10' => 'X',
        '11' => 'XI',
        '12' => 'XII',
    ];

    foreach ($categoryClasses[$school->school_category_id] as $classNumber) {
        $classGirls = 'c' . $classNumber . '_g';
        $classBoys = 'c' . $classNumber . '_b';

        $totals[$classNumber] = [
            'name' => $names[$classNumber],
            'boys' => $school->$classBoys,
            'girls' => $school->$classGirls,
            'total' => $school->$classBoys + $school->$classGirls,
        ];
    }

    return compact(
    	'totals',
    	'total',
		'totalBoys',
		'totalGirls',
		'totalStudents'
    	);
}

function my_own_elixir($file, $path = null )
{

    if($path == null)
        $path = public_path();
    static $manifest = null;

    if (is_null($manifest))
    {
        $manifest = json_decode(file_get_contents($path.'/build/rev-manifest.json'), true);
    }

    if (isset($manifest[$file]))
    {
        return '/build/'.$manifest[$file];
    }

    throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
}


function formatDate($dateString, $fullYear = true, $html = true)
{
    if($html)
        $format = 'j\<\s\u\p\>S\</\s\u\p\> M, ' .( $fullYear ? 'Y':'y');
    else
        $format = 'jS M, ' .( $fullYear ? 'Y':'y');

    if(is_object($dateString))
        return $dateString->format($format);
    $date = new DateTime($dateString);
    return $date->format($format);
}

function getPensionDate($dateOfBirth, $fullYear = true, $html = true)
{
    $date = new DateTime($dateOfBirth);
    $newDate = $date->add(new DateInterval('P60Y'));
    return formatDate($newDate, $fullYear, $html);
}
function getSelectionGradeDate($dateOfJoining, $fullYear = true, $html = true)
{
    $date = new DateTime($dateOfJoining);
    $newDate = $date->add(new DateInterval('P16Y'));
    return formatDate($newDate, $fullYear, $html);
}
function getSeniorGradeDate($dateOfJoining, $fullYear = true, $html = true)
{
    $date = new DateTime($dateOfJoining);
    $newDate = $date->add(new DateInterval('P8Y'));
    return formatDate($newDate, $fullYear, $html );
}

function generateReport($title, $headers, $data){
    $title = Str::slug($title) . date('Y-m-d-hjs');
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=' . $title . '.csv');
    header("Expires: 0");

    $output = fopen('php://output', 'w');
    fputcsv($output, $headers);
    foreach ($data as $row) {
        fputcsv($output, (array)$row);
    }
    fclose($output);
    exit();
}
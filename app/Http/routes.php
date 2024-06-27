<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', "FrontController@welcome");
Route::get('contact',['as' => 'contact', 'uses'=>'FrontController@contact']);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...

Route::group(
	[
		'namespace' => 'All',
		'prefix' => 'public'
	],
	function(){
		Route::get('teachers', ['as'=>'public.teachers.index', 'uses'=>'TeachersController@index']);
		Route::get('teachers/{id}', ['as'=>'public.teachers.show', 'uses'=>'TeachersController@show']);

		Route::get('schools', ['as'=>'public.schools.index','uses'=>'SchoolsController@index']);
		Route::get('schools/{id}', ['as'=>'public.schools.show', 'uses'=>'SchoolsController@show']);

	}
);

Route::group(['middleware' => ['auth.basic']], function () {
	Route::get('schools/map', ['as'=>'schools.map', 'uses'=>'SchoolsController@map']);
	Route::get('schools/map/district/{code}', ['as'=>'schools.map-district', 'uses'=>'SchoolsController@mapDistrict']);
	Route::get('ajax/get-schools-by-location', ['as'=>'ajax.get-schools-by-location', 'uses'=>'AjaxController@getSchoolsByLocation']);
	Route::get('ajax/get-school-detail', ['as'=>'ajax.get-school-detail', 'uses'=>'AjaxController@getSchoolDetail']);
	Route::get('ajax/get-school-history/{school_id}', ['as'=>'ajax.get-school-history', 'uses'=>'AjaxController@getSchoolHistory']);
});

Route::group(['middleware' => 'auth'], function () {

	Route::get('qr/{name}/{address}/{phone}/{email}', ['uses'=>'FrontController@qr']);

	/**
	 * Teacher routes
	 */
	Route::post('teachers/search', ['as'=>'teachers.search', 'uses'=>'TeachersController@search']);
	Route::get('teachers-reset-search', ['as'=>'teachers.reset-search', 'uses'=>'TeachersController@resetSearch']);
	Route::get('teachers/promote/{id}', ['as'=>'teachers.promote', 'uses'=>'TeachersController@getPromote']);
	Route::post('teachers/promote/{id}', ['as'=>'teachers.promote.post', 'uses'=>'TeachersController@postPromote']);
	Route::post('teachers/service/{id}', ['as'=>'teachers.service.post', 'uses'=>'TeachersController@postService']);

	Route::get('teachers/list', ['as' => 'teachers.list', 'uses' => 'TeachersController@abstractList']);

	Route::resource('teachers', 'TeachersController');

	/**
	 * School routes
	 */
	Route::get('schools/import', ['as'=>'schools.import.get', 'uses'=>'SchoolsController@getImport']);
	Route::post('schools/import', ['as'=>'schools.import.post', 'uses'=>'SchoolsController@postImport']);

	Route::resource('schools', 'SchoolsController');

	Route::get('search-school/{term}', ['as'=>'search-school', 'uses'=>'SchoolsController@searchSchool']);

	/**
	 * Retirement routes
	 */
	Route::resource('retirements', 'RetirementController');

	/**
	 * Posting routes
	 */

	Route::get('postings', 'PostingController@index');
	Route::post('postings', 'PostingController@store');

	/**
	 * Service routes
	 */

	Route::resource('services', 'ServiceController');


	/** Ajax routes **/
	Route::get('teacher-properties', ['as'=>'ajax.teacher-properties', 'uses'=>'AjaxController@getTeacherProperties']);
	Route::get('import-progress', ['as'=>'ajax.import-progress', 'uses'=>'AjaxController@importProgress']);
	Route::get('import-status/{id}', ['as'=>'import-status', 'uses'=>'SchoolsController@importStatus']);
	/** Reports Routes **/
	Route::get(
		'reports/school',
		[
			'as'=>'reports.school',
			'uses'=>'ReportsController@school'
		]
	);
	Route::get(
		'reports/category',
		[
			'as'=>'reports.category',
			'uses'=>'ReportsController@category'
		]
	);
	Route::get(
		'reports/qualification',
		[
			'as'=>'reports.qualification',
			'uses'=>'ReportsController@qualification'
		]
	);
	Route::get(
		'reports/management',
		[
			'as'=>'reports.management',
			'uses'=>'ReportsController@management'
		]
	);
	Route::get(
		'reports/subject',
		[
			'as'=>'reports.subject',
			'uses'=>'ReportsController@subject'
		]
	);
	Route::get(
		'reports/appointment',
		[
			'as'=>'reports.appointment',
			'uses'=>'ReportsController@appointment'
		]
	);
	Route::get(
		'reports/grade',
		[
			'as'=>'reports.grade',
			'uses'=>'ReportsController@grade'
		]
	);
	Route::get(
		'reports/retirement',
		[
			'as'=>'reports.retirement',
			'uses'=>'ReportsController@retirement'
		]
	);
	Route::get(
		'reports/training',
		[
			'as'=>'reports.training',
			'uses'=>'ReportsController@training'
		]
	);



});
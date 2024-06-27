<?php

namespace TIST\Models\School\Statistics;

use Illuminate\Database\Eloquent\Model;

class PhysicalFacility extends Model
{
    public function getColumnsFromUdise()
    {
    	return [
	    	'building_status_id'=>'bldstatus',
	    	
	    	'classrooms_used_elementary'=>'udise_field',
	    	'classrooms_under_construction_elementary'=>'udise_field',
	    	'furniture_availability_elementary'=>'udise_field',
	    	
	    	'classrooms_used_nine'=>'udise_field',
	    	'classrooms_under_construction_nine'=>'udise_field',
	    	'furniture_availability_nine'=>'furn_yn9',
	    	
	    	'classrooms_used_ten'=>'udise_field',
	    	'classrooms_under_construction_ten'=>'udise_field',
	    	'furniture_availability_ten'=>'furn_yn10',

	    	'classrooms_used_eleven'=>'udise_field',
	    	'classrooms_under_construction_eleven'=>'udise_field',
	    	'furniture_availability_eleven'=>'furn_yn11',

	    	'classrooms_used_twelve'=>'udise_field',
	    	'classrooms_under_construction_twelve'=>'udise_field',
	    	'furniture_availability_twelve'=>'furn_yn12',

	    	'total_other_rooms'=>'udise_field',

	    	'no_of_rooms_elementary_pucca_good'=>'udise_field',
	    	'no_of_rooms_elementary_pucca_minor_repair'=>'udise_field',
	    	'no_of_rooms_elementary_pucca_major_repair'=>'udise_field',
	    	'no_of_rooms_elementary_partial_pucca_good'=>'udise_field',
	    	'no_of_rooms_elementary_partial_pucca_minor_repair'=>'udise_field',
	    	'no_of_rooms_elementary_partial_pucca_major_repair'=>'udise_field',
	    	'no_of_rooms_elementary_kuchcha_good'=>'udise_field',
	    	'no_of_rooms_elementary_kuchcha_minor_repair'=>'udise_field',
	    	'no_of_rooms_elementary_kuchcha_major_repair'=>'udise_field',
	    	'no_of_rooms_elementary_tent_good'=>'udise_field',
	    	'no_of_rooms_elementary_tent_minor_repair'=>'udise_field',
	    	'no_of_rooms_elementary_tent_major_repair'=>'udise_field',

	    	'no_of_rooms_secondary_good'=>'udise_field',
	    	'no_of_rooms_secondary_minor_repair'=>'udise_field',
	    	'no_of_rooms_secondary_major_repair'=>'udise_field',
	    	'no_of_rooms_higher_secondary_good'=>'udise_field',
	    	'no_of_rooms_higher_secondary_minor_repair'=>'udise_field',
	    	'no_of_rooms_higher_secondary_major_repair'=>'udise_field',

	    	'land_for_expansion'=>'udise_field',
	    	'separate_room_for_head'=>'udise_field',
	    	'toilet_available_boys'=>'udise_field',
	    	'toilet_available_girls'=>'udise_field',
	    	'toilet_functional_boys'=>'udise_field',
	    	'toilet_functional_girls'=>'udise_field',
	    	'toilet_water_available_boys'=>'toiletwater_b',
	    	'toilet_water_available_girls'=>'toiletwater_g',

	    	'hand_washing_available'=>'udise_field',
	    	'cwsn_friendly_toilet'=>'udise_field',

	    	'source_of_drinking_water_id'=>'udise_field',
	    	'source_of_drinking_water_functional'=>'udise_field',
	    	'electricity'=>'udise_field',

	    	'type_of_boundary_wall_id'=>'udise_field',

	    	'library_available'=>'udise_field',
	    	'number_of_books'=>'udise_field',
	    	'librarian_avalable'=>'udise_field',
	    	
	    	'newspaper_subscription_available'=>'udise_field',
	    	'playground_available'=>'udise_field',
	    	'land_available_for_playground'=>'udise_field',

	    	'number_of_computers_available'=>'udise_field',
	    	'number_of_computers_functional'=>'udise_field',

	    	'cal_lab_available'=>'udise_field',
	    	'medical_checkup_conducted'=>'udise_field',
	    	'ramp_needed'=>'udise_field',
	    	'ramp_available'=>'udise_field',
	    	'hand_rails_for_ramp_available'=>'udise_field',
    	];
    }
}

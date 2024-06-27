<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SchoolMetaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school_metas = [];

        // TOBE DELETED
        // DB::table('schools')->insert([
        //         [
        //             'code' => '1',
        //             'name' => 'Liana High School',
        //             'established_year' => '1992',
        //             'village_id' => '1',
        //             'district_id' => '1',
        //             'block_id' => '1',
        //             'management_id' => '1',
        //             'category_id' => '1',
        //             'information_id' => '1',
        //             'instruction_medium_id' => '1',
        //             'building_status_id' => '1',
        //         ],
        //         [
        //             'code' => '1',
        //             'name' => 'Mawia High School',
        //             'established_year' => '1992',
        //             'village_id' => '1',
        //             'district_id' => '1',
        //             'block_id' => '1',
        //             'management_id' => '1',
        //             'category_id' => '1',
        //             'information_id' => '1',
        //             'instruction_medium_id' => '1',
        //             'building_status_id' => '1',
        //         ],
        //         [
        //             'code' => '1',
        //             'name' => 'Thanga High School',
        //             'established_year' => '1992',
        //             'village_id' => '1',
        //             'district_id' => '1',
        //             'block_id' => '1',
        //             'management_id' => '1',
        //             'category_id' => '1',
        //             'information_id' => '1',
        //             'instruction_medium_id' => '1',
        //             'building_status_id' => '1',
        //         ],
        //         [
        //             'code' => '1',
        //             'name' => 'Khuma High School',
        //             'established_year' => '1992',
        //             'village_id' => '1',
        //             'district_id' => '1',
        //             'block_id' => '1',
        //             'management_id' => '1',
        //             'category_id' => '1',
        //             'information_id' => '1',
        //             'instruction_medium_id' => '1',
        //             'building_status_id' => '1',
        //         ],
        //     ]);

        /**
         * Building Statuses
         */
        DB::table('building_statuses')->insert($this->getBuildingStatuses());

        /**
         * Mediums of Instruction
         */

        DB::table('instruction_mediums')->insert($this->getMediumsOfInstruction());

        /**
         * Categories
         */

        DB::table('school_categories')->insert($this->getCategories());

        /**
         * Categories
         */

        DB::table('managements')->insert($this->getManagements());

        /**
         * Drinking Water
         */

        DB::table('source_of_drinking_waters')->insert($this->getWaterSources());

        /**
         * Type of wall
         */

        DB::table('type_of_boundary_walls')->insert($this->getBoundaryType());

        /**
         * Social Categories
         */

        DB::table('school_social_categories')->insert($this->getSocialCategories());

    }

    public function getSocialCategories()
    {
        return [
            [
                'code' => '3',
                'name' => 'Scheduled Tribe'
            ],
            [
                'code' => '1',
                'name' => 'General'
            ],
            [
                'code' => '2',
                'name' => 'Scheduled Caste'
            ],
            [
                'code' => '4',
                'name' => 'Other Backward Class'
            ],
            [
                'code' => '5',
                'name' => 'Minority'
            ],
            [
                'code' => '6',
                'name' => 'Christian'
            ],
            [
                'code' => '7',
                'name' => 'Sikhs'
            ],
            [
                'code' => '8',
                'name' => 'Buddist'
            ],
            [
                'code' => '9',
                'name' => 'Parsi'
            ],
            [
                'code' => '10',
                'name' => 'Jain'
            ],
        ];

    }

    public function getBoundaryType()
    {
        return [
            [
                'name' => 'Not Applicable',
                'code' => '0'
            ],
            [
                'name' => 'Pucca but broken',
                'code' => '1'
            ],
            [
                'name' => 'Barbed Wire fencing',
                'code' => '2'
            ],
            [
                'name' => 'Hedges',
                'code' => '3'
            ],
            [
                'name' => 'No boundary walls',
                'code' => '4'
            ],
            [
                'name' => 'Others',
                'code' => '5'
            ],
            [
                'name' => 'Partial',
                'code' => '6'
            ],
            [
                'name' => 'Under construction',
                'code' => '7'
            ],
        ];
    }

    public function getWaterSources()
    {
        return [
            [
                'name' => 'Hand Pump',
                'code' => '1'
            ],
            [
                'name' => 'Well',
                'code' => '2'
            ],
            [
                'name' => 'Tap Water',
                'code' => '3'
            ],
            [
                'name' => 'None',
                'code' => '4'
            ],
            [
                'name' => 'None',
                'code' => '5'
            ],
        ];
    }

    private function getManagements()
    {
        return [
            [
                'id' => '1',
                'name' => 'Department of Education'
            ],
            [
                'id' => '2',
                'name' => 'Tribal/Social Welfare Dept.'
            ],
            [
                'id' => '3',
                'name' => 'Local body'
            ],
            [
                'id' => '4',
                'name' => 'Pvt. Aided'
            ],
            [
                'id' => '5',
                'name' => 'Pvt. Unaided'
            ],
            [
                'id' => '6',
                'name' => 'Others'
            ],
            [
                'id' => '7',
                'name' => 'Central Govt.'
            ],
            [
                'id' => '8',
                'name' => 'Un-Recognised'
            ],
            [
                'id' => '9',
                'name' => 'No Response'
            ],
            [
                'id' => '14',
                'name' => 'RMSA'
            ],
            [
                'id' => '10',
                'name' => 'SSA'
            ],
            [
                'id' => '11',
                'name' => 'Deficit'
            ],
            [
                'id' => '12',
                'name' => 'Church'
            ],
            [
                'id' => '13',
                'name' => 'Army'
            ],
            [
                'id' => '15',
                'name' => 'Council Deficit'
            ],
            [
                'id' => '16',
                'name' => 'Council Aided'
            ],
            [
                'id' => '17',
                'name' => 'Lumpsum Aided'
            ],
            [
                'id' => '18',
                'name' => 'Adhoc Aided'
            ],
            [
                'id' => '97',
                'name' => 'Madarsa recognized (by Wakf board/Madarsa Board)'
            ],
            [
                'id' => '98',
                'name' => 'Madarsa unrecognized'
            ],
            [
                'id' => '99',
                'name' => 'Not Applicable'
            ],

        ];
    }

    private function getCategories()
    {
        return [
            [
                'id' =>'1',
                'name' => 'Primary',
            ],
            [
                'id' =>'2',
                'name' => 'Primary with Upper Primary',
            ],
            [
                'id' =>'3',
                'name' => 'Pr. with Up.Pr. sec. and H.Sec.',
            ],
            [
                'id' =>'4',
                'name' => 'Upper Primary only',
            ],
            [
                'id' =>'5',
                'name' => 'Up. Pr. Secondary and Higher Sec',
            ],
            [
                'id' =>'6',
                'name' => 'Pr. Up Pr. and Secondary Only',
            ],
            [
                'id' =>'7',
                'name' => 'Upper Pr. and Secondary',
            ],
            [
                'id' =>'8',
                'name' => 'Secondary Only',
            ],
            [
                'id' =>'9',
                'name' => 'No Response',
            ],
            [
                'id' =>'10',
                'name' => 'Secondary with Higher Secondary',
            ],
            [
                'id' =>'11',
                'name' => 'Higher Secondary only/Jr. College',
            ]
        ];

    }

    private function getMediumsOfInstruction()
    {
        return [
            [
                'id' => '1',
                'language' => 'Assamese',
            ],
            [
                'id' => '2',
                'language' => 'Bengali',
            ],
            [
                'id' => '3',
                'language' => 'Gujarati',
            ],
            [
                'id' => '4',
                'language' => 'Hindi',
            ],
            [
                'id' => '5',
                'language' => 'Kannada',
            ],
            [
                'id' => '6',
                'language' => 'Kashmiri',
            ],
            [
                'id' => '7',
                'language' => 'Konkani',
            ],
            [
                'id' => '8',
                'language' => 'Malayalam',
            ],
            [
                'id' => '9',
                'language' => 'Manipuri',
            ],
            [
                'id' => '10',
                'language' => 'Marathi',
            ],
            [
                'id' => '11',
                'language' => 'Nepali',
            ],
            [
                'id' => '12',
                'language' => 'Oriya',
            ],
            [
                'id' => '13',
                'language' => 'Punjabi',
            ],
            [
                'id' => '14',
                'language' => 'Sanskrit',
            ],
            [
                'id' => '15',
                'language' => 'Sindhi',
            ],
            [
                'id' => '16',
                'language' => 'Tamil',
            ],
            [
                'id' => '17',
                'language' => 'Telugu',
            ],
            [
                'id' => '18',
                'language' => 'Urdu',
            ],
            [
                'id' => '19',
                'language' => 'English',
            ],
            [
                'id' => '20',
                'language' => 'Bodo',
            ],
            [
                'id' => '21',
                'language' => 'Mising',
            ],
            [
                'id' => '22',
                'language' => 'Dogri',
            ],
            [
                'id' => '23',
                'language' => 'Khasi',
            ],
            [
                'id' => '24',
                'language' => 'Garo',
            ],
            [
                'id' => '25',
                'language' => 'Mizo',
            ],
            [
                'id' => '26',
                'language' => 'Bhutia',
            ],
            [
                'id' => '27',
                'language' => 'Lepcha',
            ],
            [
                'id' => '28',
                'language' => 'Limboo',
            ],
            [
                'id' => '29',
                'language' => 'French',
            ]
        ];

    }

    public function getBuildingStatuses()
    {
        return [
            [
                'id' => 1,
                'name' =>  'Private',
            ],
            [
                'id' => 2,
                'name' =>  'Rented',
            ],
            [
                'id' => 3,
                'name' =>  'Government',
            ],
            [
                'id' => 4,
                'name' =>  'Govt. school in rent free building',
            ],
            [
                'id' => 5,
                'name' =>  'No Building',
            ],
            [
                'id' => 6,
                'name' =>  'Dilapidated',
            ],
            [
                'id' => 7,
                'name' =>  'Under Construction',
            ],
            [
                'id' => 9,
                'name' =>  'No Response',
            ],
            [
                'id' => 10,
                'name' =>  'Dilapilated',
            ],
            [
                'id' => 11,
                'name' =>  'Under Construction',
            ],
            [
                'id' => 12,
                'name' =>  'SSA',
            ],
            [
                'id' => 13,
                'name' =>  'RMSA',
            ]
        ];
    }
}
<?php
use Illuminate\Database\Seeder;

class TeacherMetaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Qualifications
         */
        DB::table('qualifications')->insert($this->getQualifications());
        

        /**
         * Category
         */
        DB::table('types_of_teacher')->insert($this->getTypeOfTeacher());

        /**
         * Category
         */
        DB::table('classes_taught')->insert($this->getClassesTaught());

        /**
         * Category
         */
        DB::table('professional_qualifications')->insert($this->getProfessionalQualifications());


        /**
         * Subjects
         */
        DB::table('subjects')->insert($this->getSubjects());

        /**
         * Social Categories
         */
        DB::table('social_categories')->insert($this->getSocialCategories());

        /**
         * Disabilities
         */
        DB::table('disabilities')->insert($this->getDisabilities());

        /**
         * Nature of Appointment
         */
        DB::table('natures_of_appointment')->insert($this->getNatureOfAppointment());

        /**
         * Nature of Appointment
         */
        DB::table('gpf_prefixes')->insert($this->getGpfPrefixes());

        /**
         * Pension Types
         */
        DB::table('pension_types')->insert($this->getPensionTypes());

        /**
         * Gender
         */
        DB::table('genders')->insert($this->getGenders());

        /**
         * Gender
         */
        DB::table('marital_statuses')->insert($this->getMaritalStatuses());

        /**
         * Grades
         */
        DB::table('teacher_grades')->insert($this->getTeacherGrades());

        /**
         * Grades
         */
        DB::table('retirement_types')->insert($this->getRetirementTypes());

        /**
         * Appointing authorities
         */
        DB::table('appointing_authorities')->insert($this->getAppointingAuthorities());

    }

    private function getAppointingAuthorities()
    {
        return [
            [
                'name' => 'Government of Mizoram'
            ],
            [
                'name' => 'Chakma Autonomous District Council'
            ],
            [
                'name' => 'Lai Autonomous District Council'
            ],
            [
                'name' => 'Mara Autonomous District Council'
            ],
        ];
    }

    private function getRetirementTypes()
    {
        return [
            [
                'name' => 'Super attenuation'
            ],
            [
                'name' => 'Voluntary retirement'
            ],
            [
                'name' => 'Resign'
            ],
            [
                'name' => 'Death'
            ],
        ];
    }


    private function getTeacherGrades()
    {
        return [
            [
                'name' => 'None'
            ],
            [
                'name' => 'Senior'
            ],
            [
                'name' => 'Selection'
            ],
        ];
    }

    private function getMaritalStatuses()
    {
        return [
            [
                'name' => 'Single'
            ],
            [
                'name' => 'Married'
            ],
        ];
    }

    private function getGenders()
    {
        return [
            [
                'name' => 'Male'
            ],
            [
                'name' => 'Female'
            ],
        ];
    }

    private function getPensionTypes()
    {
        return [
            [
                'id' => 1,
                'name' => 'No Pension'
            ],
            [
                'id' => 2,
                'name' => 'New Pension'
            ],
            [
                'id' => 3,
                'name' => 'Old Pension'
            ]
        ];
    }

    private function getGpfPrefixes()
    {
        return [
            [
                'id' => 1,
                'name' => 'MZ(EDN)'
            ],
            [
                'id' => 2,
                'name' => 'PME(MZ)'
            ],
            [
                'id' => 3,
                'name' => 'MST(MZ)'
            ],
            [
                'id' => 4,
                'name' => 'HSE(MZ)'
            ],
        ];
    }
    private function getNatureOfAppointment()
    {
        return [
            [
                'name'=>"Government",
            ],
            [
                'name'=>"Contract",
            ],
            [
                'name'=>"Deficit",
            ],
            [
                'name'=>"CSS",
            ],
            [
                'name'=>"RMSA",
            ],
            [
                'name'=>"SSA",
            ],
            [
                'name'=>"Officiating",
            ],
            [
                'name'=>"Adhoc Aided",
            ],
            [
                'name'=>"Local Body",
            ],
            [
                'name'=>"Lumpsum Aided",
            ],
            [
                'name'=>"Private",
            ],
            [
                'name'=>"Fixed Pay",
            ],
        ];
    }

    private function getDisabilities()
    {
        return [
            [
                'code' => '1',
                'name' => 'Not Applicabale'
            ],

            [
                'code' => '2',
                'name' => 'Locomotor'
            ],

            [
                'code' => '3',
                'name' => 'Visual'
            ],

            [
                'code' => '4',
                'name' => 'Others'
            ],

            [
                'code' => '9',
                'name' => 'No response'
            ],
        ];
    }

    private function getAppointmentNatures(){
        return [
            [
                'name' => 'Regular',
            ],
            [
                'name' => 'Contract'
            ],
            [
                'name' => 'Part Time'
            ]
        ];
    }

    private function getSubjects()
    {
        return [
            [
                'code' => 1,
                'name' => 'All Subjects',
            ],
            [
                'code' => 2,
                'name' => 'Languages',
            ],
            [
                'code' => 3,
                'name' => 'Mathematics',
            ],
            [
                'code' => 4,
                'name' => 'Environment Studies',
            ],
            [
                'code' => 5,
                'name' => 'Sports',
            ],
            [
                'code' => 6,
                'name' => 'Music',
            ],
            [
                'code' => 7,
                'name' => 'Science',
            ],
            [
                'code' => 8,
                'name' => 'Social studies',
            ],
            [
                'code' => 9,
                'name' => 'No Response',
            ],
            [
                'code' => 10,
                'name' => 'Accountancy',
            ],
            [
                'code' => 11,
                'name' => 'Biology',
            ],
            [
                'code' => 12,
                'name' => 'Business Studies',
            ],
            [
                'code' => 13,
                'name' => 'Chemistry',
            ],
            [
                'code' => 14,
                'name' => 'Computer Science',
            ],
            [
                'code' => 15,
                'name' => 'Economics',
            ],
            [
                'code' => 16,
                'name' => 'Engineering Drawing',
            ],
            [
                'code' => 17,
                'name' => 'Fine Arts',
            ],
            [
                'code' => 18,
                'name' => 'Geography',
            ],
            [
                'code' => 19,
                'name' => 'History',
            ],
            [
                'code' => 20,
                'name' => 'Home Science',
            ],
            [
                'code' => 21,
                'name' => 'Philosophy',
            ],
            [
                'code' => 22,
                'name' => 'Physics',
            ],
            [
                'code' => 23,
                'name' => 'Political Science',
            ],
            [
                'code' => 24,
                'name' => 'Psychology',
            ],
            [
                'code' => 25,
                'name' => 'Foreign Language',
            ],
            [
                'code' => 26,
                'name' => 'Botany',
            ],
            [
                'code' => 27,
                'name' => 'Zoology',
            ],
            [
                'code' => 91,
                'name' => 'Art Education',
            ],
            [
                'code' => 92,
                'name' => 'Health & physical education',
            ],
            [
                'code' => 93,
                'name' => 'Work education',
            ],
            [
                'code' => 28,
                'name' => 'Hindi',
            ],
            [
                'code' => 29,
                'name' => 'English',
            ],
            [
                'code' => 30,
                'name' => 'Regional Language',
            ],
            [
                'code' => 99,
                'name' => 'Only upto State Level',
            ],
            [
                'code' => 41,
                'name' => 'Hindi',
            ],
            [
                'code' => 42,
                'name' => 'Marathi',
            ],
            [
                'code' => 43,
                'name' => 'Sanskrit',
            ],
            [
                'code' => 44,
                'name' => 'Sindhi',
            ],
            [
                'code' => 45,
                'name' => 'Urdu',
            ],
            [
                'code' => 46,
                'name' => 'English',
            ],
            [
                'code' => 47,
                'name' => 'Regional Language',
            ],
            [
                'code' => 48,
                'name' => 'Tamil',
            ],
            [
                'code' => 49,
                'name' => 'Telugu',
            ],
            [
                'code' => 50,
                'name' => 'Kannada',
            ],
            [
                'code' => 51,
                'name' => 'Malayalam',
            ]
        ];

    }

    public function getProfessionalQualifications()
    {
        return [
            [
                'code' => '6',
                'name' =>  'None'
            ],
            [
                'code' => '1',
                'name' =>  'Diploma/certificate in BTT of >= 2 years'
            ],
            [
                'code' => '2',
                'name' =>  'Bachelor of Elementary Education (B.El. Ed.)'
            ],
            [
                'code' => '3',
                'name' =>  'B.Ed. or equivalent'
            ],
            [
                'code' => '4',
                'name' =>  'M. Ed. or equivalent'
            ],
            [
                'code' => '5',
                'name' =>  'Others'
            ],
            [
                'code' => '7',
                'name' =>  'Diploma/degree in special education'
            ],
            [
                'code' => '9',
                'name' =>  'No Response'
            ],
            [
                'code' => '10',
                'name' => 'HINDI SHIKSHAN DIPLOMA'
            ],
            [
                'code' => '11',
                'name' => 'HINDI SHIKSHAN PRAVEEN'
            ],
            [
                'code' => '12',
                'name' => 'PARANGAT'
            ],
            [
                'code' => '13',
                'name' => 'NISHNAT'
            ],
            [
                'code' => '14',
                'name' => 'D.L. Ed. (Ignou)'
            ],
            [
                'code' => '15',
                'name' => 'D.T.Ed (Diet)'
            ],
            [
                'code' => '16',
                'name' => 'DPE'
            ],
            [
                'code' => '17',
                'name' => 'Undergoing B.Ed.'
            ],
            [
                'code' => '18',
                'name' => 'Undergoing D.L. Ed. (Ignou)'
            ],
            [
                'code' => '19',
                'name' => 'Undergoing D.T.Ed (Diet)'
            ],
            [
                'code' => '20',
                'name' => 'Undergoing Hindi B.Ed'
            ],
            [
                'code' => '99',
                'name' => 'Only upto state level'
            ]
        ];

    }

    public function getClassesTaught()
    {
        return [
            [
                'code' => '1',
                'name' => 'Primary Only',
            ],
            [
                'code' => '2',
                'name' => 'Upper Primary Only',
            ],
            [
                'code' => '3',
                'name' => 'Primary and Upper Primary',
            ],
            [
                'code' => '4',
                'name' => 'Primary and Upper Primary',
            ],
            [
                'code' => '5',
                'name' => 'Secondary only',
            ],
            [
                'code' => '99',
                'name' => 'Only upto state level',
            ]
        ];

    }

    public function getQualifications()
    {
        return [
            [
                'code'=> '4',
                'name' => 'Graduate',
            ],
            [
                'code'=> '1',
                'name' => 'Below Secondary',
            ],
            [
                'code'=> '2',
                'name' => 'Secondary',
            ],
            [
                'code'=> '3',
                'name' => 'Higher Secondary',
            ],
            [
                'code'=> '5',
                'name' => 'Post Graduate',
            ],
            [
                'code'=> '6',
                'name' => 'M. Phil.',
            ],
            [
                'code'=> '7',
                'name' => 'Ph. D.',
            ],
            [
                'code'=> '8',
                'name' => 'Post Doctoral',
            ],
            [
                'code'=> '9',
                'name' => 'No Response',
            ],
            [
                'code' => '99',
                'name' => 'Only upto state level'
            ]
        ];
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

    public function getTypeOfTeacher()
    {
        return [
            ['name' => 'Principal'],
            ['name' => 'Vice Principal'],
            ['name' => 'Headmaster'],
            ['name' => 'Lecturer'],
            ['name' => 'Teacher'],
            ['name' => 'IT Teacher'],
            ['name' => 'H&P Instructor'],
            ['name' => 'Hindi Teacher'],
            ['name' => 'Art Instructor'],
            ['name' => 'Resource Teacher'],
            ['name' => 'WE Teacher'],
            ['name' => 'Aided Teacher'],
            ['name' => 'H&P Instructor'],
            ['name' => 'Special Educator'],
            ['name' => 'Laica Teacher'],
        ];
    }
}
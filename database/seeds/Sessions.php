<?php

use Illuminate\Database\Seeder;
use App\Models\Session;
class Sessions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['title'=>'MISS CAREER AFRICA (Eastern Africa)',
            'session'=>'2019',
            'country'=>'RWANDA',
            'image'=>'RW.jpg',
            'date'=>'Wednesday,25 Sept, 2019',
            'numbering'=>1,
            'is_current_applying'=>1
        ],
        ['title'=>'MISS CAREER AFRICA (West Africa)',
        'session'=>'2019',
        'country'=>'NIGERIA',
        'image'=>'NG.jpg',
        'numbering'=>2,
        'date'=>'Satarday,30 November, 2019',
        'is_current_applying'=>0
        ],
                ['title'=>'MISS CAREER AFRICA (Central Africa)',
                    'session'=>'2020',
                    'country'=>'ANGOLA',
                    'image'=>'ANGOLA.jpg',
                    'numbering'=>2,
                    'date'=>'Satarday,04 Match, 2020',
                    'is_current_applying'=>0
                ],
                ['title'=>'MISS CAREER AFRICA (Southern Africa)',
                'session'=>'2020',
                'country'=>'BOTSWANA',
                'image'=>'BOTS.jpg',
                'numbering'=>2,
                'date'=>'Sunday,07 June, 2020',
                'is_current_applying'=>0
            ],
            ['title'=>'MISS CAREER AFRICA (Northern Africa)',
            'session'=>'2020',
            'country'=>'MOROCCO',
            'image'=>'M.jpg',
            'numbering'=>2,
            'date'=>'Sunday,05 Sept, 2020',
            'is_current_applying'=>0
            ]
        ];
        foreach($data as $d){
            Session::create($d);
        }
        
    }
}

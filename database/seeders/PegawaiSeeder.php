<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
        	[	
                'nama' => 'Puji Nasyiah',
        		'alamat' => 'Dk. Babah No. 461, Cirebon 10251, NTB',
        	],
            [	
                'nama' => 'Darsirah Pangestu',
        		'alamat' => 'Jln. Lumban Tobing No. 195, Bontang 57526, KepR',
        	],
            [	
                'nama' => 'Jail Setiawan',
        		'alamat' => 'Jr. Laksamana No. 25, Batu 33393, Papua',
        	],
            [	
                'nama' => 'Vega Utama',
        		'alamat' => 'Dk. Baiduri No. 232, Salatiga 31266, Lampung',
        	],
            [	
                'nama' => 'Oman Sitompul',
        		'alamat' => 'Dk. Bakau No. 129, Sungai Penuh 57523, Maluku',
        	],
            [	
                'nama' => 'Ajiman Maryadi',
        		'alamat' => 'Gg. Pacuan Kuda No. 910, Pontianak 10307, MalUt',
        	],
            [	
                'nama' => 'Cengkal Anggriawan',
        		'alamat' => 'Dk. Bagonwoto No. 361, Padangsidempuan 85566, Bali',
        	],
            [	
                'nama' => 'Dodo Budiyanto',
        		'alamat' => 'Jr. Rajawali Timur No. 328, Banjarbaru 33056, KalTeng',
        	],
            [	
                'nama' => 'Bambang Ardianto',
        		'alamat' => 'Dk. Badak No. 693, Serang 45177, SulTra',
        	],
            [	
                'nama' => 'Jamal Prabowo',
        		'alamat' => 'Gg. Bakin No. 300, Administrasi Jakarta Pusat 92101, SulSel',
                // 'create_at' => NULL,
                // 'update_at' => NULL
        	],
        ]);
    }
}

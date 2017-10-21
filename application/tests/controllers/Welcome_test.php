<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{       
        public function setup(){
		$this->resetInstance();

		//$this->CI->load->model('Fungsi_model');
		//$this->obj = $this->CI->Fungsi_model;

		//$this->CI->load->model('Welcome');
		//$this->obj1 = $this->CI->Welcome;
	}
        public function test_index()
	{
            $output = $this->request('GET', 'welcome/index');
            $this->assertContains('<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">', $output);
            $this->assertContains('<h1>website Traveller</h1>', $output);
            $this->assertContains('<h2>Akomodasi dan Penginapan</h2>', $output);
            $this->assertContains('<p>Pilihlah akomodasi dan penginapan disini.</p>', $output);
            $this->assertContains('<span class="icon-bar"></span>', $output);
            $this->request('GET', 'welcome/index');
            $this->assertResponseCode(200);             
      }

        public function test_header_index()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains('<title>Home | Traveller</title>', $output);
	}
        
        public function test_menu_header()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains('<a href="http://localhost:8080/kppl/index.php/Welcome/pricing">Paket Wisata</a>', $output);
	}
        
	public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
        
        public function test_pricing(){
                $output = $this->request('GET', 'Welcome/pricing');
//		$this->assertContains('<a href="http://localhost:8080/kppl/index.php/Welcome">Home</a>', $output);
                $this->assertContains('<title>Pricing Table | SAGOE</title>', $output);
                                                 
	}
        public function test_services(){
            $output = $this->request('GET', 'Welcome/services');
            //$this->assertContains('<td>Paket 3 hari Bali</td>', $output);
            //$this->assertContains('<td>Kode_Paket</td>', $output);
            //$this->assertContains('<a href="http://localhost:8080/kppl/index.php/Welcome/services">Paket Wisata</a>', $output);
            $this->assertContains('<link href="http://localhost:8080/kppl/gambar/css/animate.min.css" rel="stylesheet">', $output); 
        }
       
        
        public function test_verif(){
                $output = $this->request('GET', 'Welcome/verif');
		$this->assertContains('<link href="http://localhost:8080/kppl/gambar/css/font-awesome.min.css" rel="stylesheet">', $output);	
	}
        
        /*public function test_tambah(){
		$output = $this->request('POST', 'welcome/tambah', [	
                         'Kode_Paket' => '004',
                         'Nama_Paket' => 'Paket Pulau Sabang',
                         'NO_KTP' => '00001223',
                         'Request_Tambahan' => 'tidakada'
			]);	
		$this->assertRedirect('Welcome/thanks');
	}*/
        
        public function test_Create(){		
//		$mula = $this->obj->getCurrentRow();
		$output = $this->request(
			'POST',
			'welcome/tambah',
			[
			'Kode_Paket' => '004',
			'Nama_Paket' => 'Paket Pulau Sabang',
			'NO_KTP' => '12345',
			'Request_Tambahan' => 'tidakada',
			]
			);
//		$akhir = $this->obj->getCurrentRow();
//        $expected = $akhir - $mula;
//        $this->assertEquals(1, $expected);  
                $this->assertRedirect('welcome/thanks');
                $this->request('GET', 'welcome/destroy/12345');
	}
        
        
                public function test_thanks(){
                $output = $this->request('GET', 'Welcome/thanks');
                //$this->assertContains('<h1>Terima kasih telah melakukan reservasi</h1>', $output);
                $this->assertContains('<a href="http://localhost:8080/kppl/index.php/Welcome/pricing">Paket Wisata</a>', $output);
//             
	}    
}

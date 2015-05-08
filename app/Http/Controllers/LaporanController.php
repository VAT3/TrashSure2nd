<?php 
namespace App\Http\Controllers;
use Request;
use DB;

	class LaporanController extends Controller {
		public function __construct()
		{
			$this->middleware('login', ['except' => ['index']]);
		}
		public function createLaporan(){
			return view('laporan');
			
		}
		/*public function DelTPA($id){
			$tpa = TPA::find($id);
			$tpa->delete();
			return redirect('inventoryTPA');	
		}

		public function DelTPS($id){
			$tps = TPS::find($id);
			$tps->delete();
			return redirect('inventoryTPS');	
		}

		public function DelSarana($id){
			$sarana = Sarana::find($id);
			$sarana->delete();
			return redirect('inventorySarana');	
		}

		public function DelPetugas($id){
			$petugas = Petugas::find($id);
			$petugas->delete();
			return redirect('inventoryPetugas');	
		}*/
	}
?>
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LaporanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
	public function getLaporanPenjualan(Request $request)
	{
		$company_id=$request->company_id;
		$awal=$request->awal;
		$akhir=$request->akhir;
		$jenis=$request->jenis;
		$search=$request->search;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		$data = LaporanModel::GetLaporanPenjualan($company_id,$awal,$akhir,$jenis,$search,$order_col,$order_type,$limit,$length,$count_stats);	
		return response()->json($data, 200);
	}
	public function getLaporanPembelian(Request $request)
	{
		$company_id=$request->company_id;
		$awal=$request->awal;
		$akhir=$request->akhir;
		$jenis=$request->jenis;
		$search=$request->search;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		$data = LaporanModel::GetLaporanPembelian($company_id,$awal,$akhir,$jenis,$search,$order_col,$order_type,$limit,$length,$count_stats);	
		return response()->json($data, 200);
	}
	public function getLaporanHutang(Request $request)
	{
		$company_id=$request->company_id;
		$kd_supplier=$request->kd_supplier;
		$periode=$request->periode;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		// echo $order_type;
		$data = LaporanModel::GetLaporanHutang($company_id,$kd_supplier,$periode,$order_col,$order_type,$limit,$length,$count_stats);	
		return response()->json($data, 200);
	}

	public function getLaporanPiutang(Request $request)
	{
		$company_id=$request->company_id;
		$kd_customer=$request->kd_customer;
		$periode=$request->periode;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		$data = LaporanModel::GetLaporanPiutang($company_id,$kd_customer,$periode,$order_col,$order_type,$limit,$length,$count_stats);
		return response()->json($data, 200);
	}

	public function getLaporanStok(Request $request)
	{
		$company_id=$request->company_id;
		$kd_barang=$request->kd_barang;
		$kd_divisi=$request->kd_divisi;
		$periode=$request->periode;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		$data = LaporanModel::GetLaporanStok($company_id,$kd_barang,$kd_divisi,$periode,$order_col,$order_type,$limit,$length,$count_stats);
		return response()->json($data, 200);
	}

	public function getLaporanBiaya(Request $request)
	{
		$company_id=$request->company_id;
		$awal=$request->awal;
		$akhir=$request->akhir;
		$jenis=$request->jenis;
		$search=$request->search;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		$data = LaporanModel::GetLaporanBiaya($company_id,$awal,$akhir,$jenis,$search,$order_col,$order_type,$limit,$length,$count_stats);	
		return response()->json($data, 200);		
	}

	public function getLaporanPendapatan(Request $request)
	{
		$company_id=$request->company_id;
		$awal=$request->awal;
		$akhir=$request->akhir;
		$jenis=$request->jenis;
		$search=$request->search;
		$order_col=$request->order_col;
		$order_type=$request->order_type;
		$limit=$request->limit;
		$length=$request->length;
		$count_stats=$request->count_stats;
		$data = LaporanModel::GetLaporanPendapatan($company_id,$awal,$akhir,$jenis,$search,$order_col,$order_type,$limit,$length,$count_stats);	
		return response()->json($data, 200);		
	}

}
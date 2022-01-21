<?php

namespace App\Http\Controllers\frontend;
use App\models\DanhMuc;
use App\models\BatDongSan;
use App\models\TinTuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Provinces;
use DB;
class IndexController extends Controller
{
    //

    function Index(){
         return view('frontend.index');
    }

    public function danh_muc(){
         $danhmuccha=DanhMuc::query()->fromSub(function($query){
             $query->from('danh_muc')->where('idDanhMucCha','=',-1);
         },'danhmuc')->where('HienThiTrenMainMenu','=','1')->orderBy('ViTriTrenMainMenu','ASC')->get();

         $danhmuccon=DanhMuc::query()->fromSub(function($query){
            $query->from('danh_muc')->where('idDanhMucCha','<>','-1');
        },'danhmucs')->where('HienThiTrenHeadMenu','=','1')->orderBy('ViTriTrenHeadMenu','ASC')->get();

        $arr=array();
        foreach($danhmuccha as $row){
            $idDanhMuc=$row->idDanhMuc;
            $count=DanhMuc::query()->fromSub(function($query) use($idDanhMuc){
                $query->from('danh_muc')->where('idDanhMucCha','=',$idDanhMuc);
            },'danhmucs')->count();

            $arr[$idDanhMuc]=$count;
        }
     
        return response()->json([
            'danhmuccha'=>$danhmuccha,
            'danhmuccon'=>$danhmuccon,
            'idDanhmuc'=>$idDanhMuc,
            'arr'=>$arr,
        ],200);
    }

    public function featured_estate(){
        $batdongsan=BatDongSan::query()->fromSub(function($query){
            $query->from('bat_dong_san')->join('provinces','provinces.id','=','bat_dong_san.id_TinhThanh')->where('HinhThuc',12);
        },'batdongsan')->where('HienThi',1)->orderBy('idBDS','ASC')->get();

        $tintuc=TinTuc::orderBy('idTinTuc','ASC')->get();

        //$count=BatDongSan::groupBy('id_TinhThanh')->count();
        $count=BatDongSan::select('id_TinhThanh',DB::raw("count(*) as BDS "))
                    ->groupBy('id_TinhThanh')->orderBy('BDS','DESC')->paginate(8);

        $arr=array();
         foreach($count as $row){
             $id=$row->id_TinhThanh;
             $name_provice=Provinces::select('name')->join('bat_dong_san','provinces.id','=','bat_dong_san.id_TinhThanh')->where('id',$id)->groupBy('name')->get();
             $arr[$id]=$name_provice;
         }

        return response()->json([
            'batdongsan'=>$batdongsan,
            'tintuc'=>$tintuc,
            'count'=>$count,
            'id'=>$arr,
        ],200);
    }

   
}

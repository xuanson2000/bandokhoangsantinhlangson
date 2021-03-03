<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\toaDo;
use App\duLieuMo;
use App\xaPhuong;
use App\quanHuyen;

class map extends Controller
{
    //

  public  function index(){

//   	$mapss=toado::select('toaDoX','toaDoY','idMo')->get();
//     $idmos=toado::select('idMo')->distinct()->get();
//     $array0=[];
//     $d=0;
//     $k=0;
//     $t=1;
// //phần thêm,


// $TBCS=DB::table("toado")
// ->select(DB::raw("avg(toaDoX) tdx, avg(toaDoY) tdy,idMo"))
// ->groupBy("idMo")
// // ->havingRaw("COUNT(cntr) > 1")
// ->get();


// $tenmoTBS=DB::table('mo')->get();

//     $array=[];
//     $i=0;

//     foreach ($TBCS as $TBC) {
//       foreach ($tenmoTBS as $tenmoTB) {
//         if( $TBC->idMo ==$tenmoTB->id )
//         {
//          $array[$i][0]=$TBC->tdx;
//          $array[$i][1]=$TBC->tdy;
//          $array[$i][2]= "$tenmoTB->ten";
//        }
//      }
//      $i++;
//    }


// dd($array);









// end phần thêm
    foreach ($idmos as $idmoi) {

//dd($idmoi->idMo);

      $array=[];
      $string=[];
      $i=0;
      $j=0;
    
      foreach ($mapss as $maps) {

        if($maps->idMo==$idmoi->idMo)
        {
       // dd($idmoi->idMo);
          $array[$i][0]=$maps->toaDoX;
          $array[$i][1]=$maps->toaDoY;
          

          $i++;
         
        }
// dd($array);
       
      }

      $array0[$d][$k]=$array;
      $array0[$d][$t]=$idmoi->mo->ten;
      $d++;
      $k++;
       $t++;
      
    }
 

    return view ('map.index',['mapss'=>$mapss,'idmos'=>$idmos,'array0'=>$array0]);
  }




public  function indexID(){

   $TBCS=DB::table("toaDo")
   ->select(DB::raw("avg(toaDoX) tdx, avg(toaDoY) tdy,id_hoso"))
   ->groupBy("id_hoso")
   ->get();


   $tenmoTBS=duLieuMo::get();


   $array=[];
   $i=0;

   foreach ($TBCS as $TBC) {
    foreach ($tenmoTBS as $tenmoTB) {
      if( $TBC->id_hoso ==$tenmoTB->id )
      {
        $vitrihc=$tenmoTB->xaPhuong->tenXaPhuong."-".$tenmoTB->xaPhuong->quanHuyen->tenQuanHuyen."-"."Tỉnh Lạng Sơn";
        $loaiks=$tenmoTB->loaiHinhKhoangSan->tenLoaiHinhKS;
        $toadomos=DB::table("toaDo")->where('id_hoso',$tenmoTB->id)->get();
                
              $x='';
              $y=1;
              foreach ($toadomos as $toadomo ) {
                $x=$x."X:".$toadomo->toadox."-"."Y:".$toadomo->toadoy." Góc số ".$y." ";
                $y++;
              }

           
       $array[$i][0]=$TBC->tdx;
       $array[$i][1]=$TBC->tdy;
       $array[$i][2]= "$tenmoTB->tenMo";
       $array[$i][3]= $vitrihc;
       $array[$i][4]= $loaiks;
       $array[$i][5]= $x;
     }
   }
   $i++;
 }


  // dd($array);

 return view ('map.indexID',['array'=>$array]);


}


}



<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class NurseryController extends Controller
{
	public function Dashboard(){
    	return view ('index');
    }
    public function Register(){
    	return view ('register');

    }
    public function Information(){
    	$profile = DB::SELECT ("SELECT * FROM `tblchildren`");
   		return view('information',['profile' => $profile]);
    }
      public function insertData(Request $request){
      //initialization for tblChildren
      $ChildID = $request ->input('ChildID');
      $fname = $request ->input('fname');
      $lname = $request ->input('lname');
      $dobday =$request ->input('dobday');
      $dobmonth =$request ->input('dobmonth');
      $dobyear =$request ->input('dobyear');
      $admitday =$request ->input('admitday');
      $admitmonth =$request ->input('admitmonth');
      $admityear =$request ->input('admityear');
      $gender =$request ->input('gender');
      $childnotes =$request ->input('childnotes');
      $guardian_fname1 =$request->input('guardian_fname1');
      $guardian_lname1 =$request->input('guardian_lname1');
      $guardian_rel1 =$request->input('guardian_rel1');
      $guardian_Phone1 =$request->input('guardian_Phone1');
      $guardian_fname2 =$request->input('guardian_fname2');
      $guardian_lname2 =$request->input('guardian_lname2');
      $guardian_rel2 =$request->input('guardian_rel2');
      $guardian_Phone2 =$request->input('guardian_Phone2');
      //insertion of data in tbldata
      $ParentID =$request ->input('ParentID');
	    $ParentTitle =$request ->input('ParentTitle');
      $father_fname = $request ->input('father_fname');
      $father_lname = $request ->input('father_lname');
      $mother_fname = $request ->input('mother_fname');
      $mother_lname = $request ->input('mother_lname');
      $streetAddress = $request ->input('streetAddress');
      $town_city = $request ->input('town_city');
      $postalCode = $request ->input('postalCode');
      $province_states = $request ->input('province_states');
      $homePhone = $request ->input('homePhone');
      $workPhone = $request ->input('workPhone');
     $isInsertData= DB::INSERT("INSERT into tblchildren(ChildID,fname,lname,dobday,dobmonth,dobyear,admitday,admitmonth,admityear,gender,childnotes,guardian_fname1,guardian_lname1,guardian_rel1,guardian_Phone1,guardian_fname2,guardian_lname2,guardian_rel2,guardian_Phone2) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [$ChildID,$fname,$lname,$dobday,$dobmonth,$dobyear,$admitday,$admitmonth,$admityear,$gender,$childnotes,$guardian_fname1,$guardian_lname1,$guardian_rel1,$guardian_Phone1,$guardian_fname2,$guardian_lname2,$guardian_rel2,$guardian_Phone2]);
      $isInsertParents=	DB::INSERT("INSERT INTO tblparents (ParentID,ParentTitle,father_fname,father_lname,mother_fname,mother_lname,streetAddress,town_city,postalCode,province_states,homePhone,workPhone) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)",[$ParentID,$ParentTitle,$father_fname,$father_lname,$mother_fname,$mother_lname,$streetAddress,$town_city,$postalCode,$province_states,$homePhone,$workPhone]);
        if ($isInsertData == true && $isInsertParents == true) {
         $msg="Record Successfully Added";
        }
        else{
          $msg="Record not Successfully Added";
        }
      return view('register',['msg' => $msg]);
   }
   public function deleteDataNursery($ChildID){
   	DB::DELETE("DELETE FROM tblchildren where ChildID=?",[$ChildID]);
   	$profile = DB::SELECT("SELECT * FROM tblchildren");
   	return view('information',['profile' => $profile]);
   }
   public function editDataNursery($ChildID){
   	$profile = DB::SELECT ("SELECT * FROM tblchildren WHERE ChildID=?",[$ChildID]);
   	$isUpdate="";
   	return view('edit',['profile' => $profile]);
   }
    public function updateDataChildren(Request $request,$ChildID){
      $fname = $request ->input('fname');
      $lname = $request ->input('lname');
      $dobday =$request ->input('dobday');
      $dobmonth =$request ->input('dobmonth');
      $dobyear =$request ->input('dobyear');
      $admitday =$request ->input('admitday');
      $admitmonth =$request ->input('admitmonth');
      $admityear =$request ->input('admityear');
      $gender =$request ->input('gender');
      $childnotes =$request ->input('childnotes');
      $guardian_fname1 =$request->input('guardian_fname1');
      $guardian_lname1 =$request->input('guardian_lname1');
      $guardian_rel1 =$request->input('guardian_rel1');
      $guardian_Phone1 =$request->input('guardian_Phone1');
      $guardian_fname2 =$request->input('guardian_fname2');
      $guardian_lname2 =$request->input('guardian_lname2');
      $guardian_rel2 =$request->input('guardian_rel2');
      $guardian_Phone2 =$request->input('guardian_Phone2');
   	$isUpdate = DB::UPDATE("UPDATE tblchildren set fname=?,lname=?,dobday=?,dobmonth=?,dobyear=?,admitday=?,admitmonth=?,admityear=?,gender=?,childnotes=?,guardian_fname1=?,guardian_lname1=?,guardian_rel1=?,guardian_Phone1=?,guardian_fname2=?,guardian_lname2=?,guardian_rel2=?,guardian_Phone2=? WHERE ChildID=?",[$fname,$lname,$dobday,$dobmonth,$dobyear,$admitday,$admitmonth,$admityear,$gender,$childnotes,$guardian_fname1,$guardian_lname1,$guardian_rel1,$guardian_Phone1,$guardian_fname2,$guardian_lname2,$guardian_rel2,$guardian_Phone2,$ChildID,]); 
   	$profile = DB::SELECT ("SELECT * FROM tblchildren WHERE ChildID=?",[$ChildID]);
   	if ($isUpdate==true) {
   		$msg="Record Updated";
   	}
   	else{
   		$msg="Record Not Updated";
   	}
   	return view('edit',['profile' => $profile],['msg' => $msg]);
   }
   public function editChildView(){
   	return view ('edit');
   }

   //updating for parents info
  public function Parents(){
    	$parents = DB::SELECT ("SELECT * FROM `tblparents`");
   		return view('parents',['parents' => $parents]);
    }
   public function deleteDataParents($ParentID){
   	DB::DELETE("DELETE FROM tblparents where ParentID=?",[$ParentID]);
   	$parents = DB::SELECT("SELECT * FROM tblparents");
   	return view('parents',['parents' => $parents]);
   }
   public function editDataParents($ParentID){
   	$parents = DB::SELECT ("SELECT * FROM tblparents WHERE ParentID=?",[$ParentID]);
   	$isUpdateParents="";
   	return view ('updateParents', ['parents' => $parents],['isUpdateParents' => $isUpdateParents]);
   }
   public function updateDataParents(Request $request,$ParentID){
      $ParentTitle =$request ->input('ParentTitle');
      $father_fname = $request ->input('father_fname');
      $father_lname = $request ->input('father_lname');
      $mother_fname = $request ->input('mother_fname');
      $mother_lname = $request ->input('mother_lname');
      $streetAddress = $request ->input('streetAddress');
      $town_city = $request ->input('town_city');
      $postalCode = $request ->input('postalCode');
      $province_states = $request ->input('province_states');
      $homePhone = $request ->input('homePhone');
      $workPhone = $request ->input('workPhone');
   	$isUpdateParents = DB::UPDATE("UPDATE tblparents set ParentTitle=?,father_fname=?,father_lname=?,mother_fname=?,mother_lname=?,streetAddress=?,town_city=?,postalCode=?,province_states=?,homePhone=?,workPhone=? WHERE ParentID=?",[$ParentTitle,$father_fname,$father_lname,$mother_fname,$mother_lname,$streetAddress,$town_city,$postalCode,$province_states,$homePhone,$workPhone,$ParentID]);
   	$parents = DB::SELECT ("SELECT * FROM tblparents WHERE ParentID=?",[$ParentID]);
   	if ($isUpdateParents==true) {
   		$msg="Record Updated";
   	}
   	else{
   		$msg="Record Not Updated";
   	}
   	return view('updateParents',['parents' => $parents],['msg' => $msg]);
   }
   public function editParentsView(){
   	return view('updateParents');
   }
   //viewing the records
   public function viewChildren($ChildID){
   		$profile = DB::SELECT("SELECT tblchildren.ChildID,tblchildren.fname,tblchildren.lname,tblchildren.dobday,tblchildren.dobmonth,tblchildren.dobyear,tblchildren.admitday,tblchildren.admitmonth,tblchildren.admityear,tblchildren.gender,tblchildren.childnotes,tblchildren.guardian_fname1,tblchildren.guardian_lname1,tblchildren.guardian_rel1,tblchildren.guardian_Phone1,tblchildren.guardian_fname2,tblchildren.guardian_lname2,tblchildren.guardian_rel2,tblchildren.guardian_Phone2,tblparents.ParentID,tblparents.ParentTitle,tblparents.father_fname,tblparents.father_lname,tblparents.mother_fname,tblparents.mother_lname,tblparents.streetAddress,tblparents.town_city,tblparents.postalCode,tblparents.postalCode,tblparents.province_states,tblparents.province_states,tblparents.homePhone,tblparents.workPhone FROM tblchildren INNER JOIN tblparents ON tblchildren.ChildID=tblparents.ParentID WHERE ChildID=?",[$ChildID]);

   return view ('viewChildrenInfo',['profile' => $profile]);
   }
   public function Search(Request $request){
    $search = $request -> get('search');
    $profile = DB::table('tblchildren')->WHERE('fname','like','%'.$search.'%')->paginate(5);
    return view ('information',['profile'=>$profile]);
   }
   public function SearchParents(Request $request){
    $SearchParents = $request -> get('searchParents');
     $parents = DB::table('tblparents')->WHERE('father_fname','like','%'.$SearchParents.'%')->paginate(5);
    return view ('parents',['parents'=>$parents]);
   }

}

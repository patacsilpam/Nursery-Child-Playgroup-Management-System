<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SessionController extends Controller
{
   public function Session(){
   	$session=DB::SELECT("SELECT * FROM tblsessions");
   	return view ('session',['session'=>$session]);
   }
   public function insertSessionData(Request $request){
   	$sessionID =$request->input('sessionID');
   	$session_fname =$request->input('session_fname');
   	$session_lname =$request->input('session_lname');
      $startMon =$request->input('startMon');
      $endMon =$request->input('endMon');
      $startTue =$request->input('startTue');
      $endTue =$request->input('endTue');
      $startWed =$request->input('startWed');
      $endWed =$request->input('endWed');
      $startThu =$request->input('startThu');
      $endThu =$request->input('endThu');
      $startFri =$request->input('startFri');
      $endFri =$request->input('endFri');
      $totalMon=$endMon-$startMon;
      $totalTue=$endTue-$startTue; 
      $totalWed=$endWed-$startWed;
      $totalThu=$endThu-$startThu;
      $totalFri=$endFri-$startFri;
      $totalHours=$endMon-$startMon+$endTue-$startTue+$endWed-$startWed+$endThu-$startThu+$endFri-$startFri;
      $perHour=150;
      $fee=$totalHours*$perHour;
   	$sessionResult=DB::SELECT("INSERT into tblsessions(sessionID,session_fname,session_lname,startMon,endMon,totalMon,startTue,endTue,totalTue,startWed,endWed,totalWed,startThu,endThu,totalThu,startFri,endFri,totalFri,totalHours,fee) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[$sessionID,$session_fname,$session_lname,$startMon,$endMon,$totalMon,$startTue,$endTue,$totalTue,$startWed,$endWed,$totalWed,$startThu,$endThu,$totalThu,$startFri,$endFri,$totalFri,$totalHours,$fee]);
      $session=DB::SELECT("SELECT * FROM tblsessions");
    return view('session',['session' => $session]);
   }
   
   public function displaySession(){
   	$session=DB::SELECT("SELECT * FROM tblsessions");
   	return view('session',['session' => $session]);
   }
   public function deleteSession($sessionID){
   	 	$session="";
   	DB::DELETE("DELETE FROM tblsessions WHERE sessionID=?",[$sessionID]);
      $session=DB::SELECT("SELECT * FROM tblsessions");
   	return view('session',['session' => $session]);
   }
   public function editDisplaySessions(){
      return view ('updateSession');
   }
    public function editSession($sessionID){
      $session=DB::SELECT("SELECT * FROM tblsessions WHERE sessionID=?",[$sessionID]);
      return view ('updateSession',['session'=>$session]);
   }
   public function updateSession(Request $request,$sessionID){
      $session_fname =$request->input('session_fname');
      $session_lname =$request->input('session_lname');
      $startMon =$request->input('startMon');
      $endMon =$request->input('endMon');
      $startTue =$request->input('startTue');
      $endTue =$request->input('endTue');
      $startWed =$request->input('startWed');
      $endWed =$request->input('endWed');
      $startThu =$request->input('startThu');
      $endThu =$request->input('endThu');
      $startFri =$request->input('startFri');
      $endFri =$request->input('endFri');
      $totalMon=$endMon-$startMon;
      $totalTue=$endTue-$startTue;
      $totalWed=$endWed-$startWed;
      $totalThu=$endThu-$startThu;
      $totalFri=$endFri-$startFri;
      $totalHours=$endMon-$startMon+$endTue-$startTue+$endWed-$startWed+$endThu-$startThu+$endFri-$startFri;
      $perHour=150;
      $fee=$totalHours*$perHour;
      $sessionResult=DB::UPDATE("UPDATE tblsessions set session_fname=?,session_lname=?,startMon=?,endMon=?,totalMon=?,startTue=?,endTue=?,totalTue=?,startWed=?,endWed=?,totalWed=?,startThu=?,endThu=?,totalThu=?,startFri=?,endFri=?,totalFri=?,totalHours=?,fee=? WHERE sessionID=?",[$session_fname,$session_lname,$startMon,$endMon,$totalMon,$startTue,$endTue,$totalTue,$startWed,$endWed,$totalWed,$startThu,$endThu,$totalThu,$startFri,$endFri,$totalFri,$totalHours,$fee,$sessionID]);
      $session=DB::SELECT("SELECT * FROM tblsessions WHERE sessionID=?",[$sessionID]);
      return view ('updateSession',['session'=>$session]);
   }
}

<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoang
 * Date: 5/30/2018
 * Time: 10:43 AM
 */

namespace App\Http\Controllers;


use App\attendance_slots;
use App\Students;
use App\Timeslots;
use Illuminate\Support\Facades\DB;

class AttendanceController
{
    public function index(){

//        $slot = attendance_slots::all();

        $attSlot = DB::table('attendance_slots')
            ->join('timeslots', 'attendance_slots.slotId', '=', 'timeslots.id')
            ->get();
//        return $attSlot;
        return view('attendance.list') ->with('slot', $attSlot);
    }
}

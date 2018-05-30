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

class AttendanceController
{
    public function index(){

        $slot = attendance_slots::all();
        return view('attendance.list') ->with('slot', $slot);
    }
}

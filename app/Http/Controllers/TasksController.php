<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TasksController extends Controller
{
    public function index()
    {

    $tasks = DB::table('tasks')
        ->get();

        return view('Tasks.index', compact('tasks'));
    }

    public function task($id)
    {
        $tasks = DB::table('tasks')
        ->get();

        $task = DB::table('tasks')
        ->where('id','=',$id)
        ->get();

        if($id == 10) 
        {
            $max_price = DB::table('bids')->max('price');
        $bids = DB::table('bids')
            ->select('name')
            /*->orderBy('price', 'desc')
            ->take(1)*/
            ->where('price','=', $max_price)
            ->get();
        $no_events = DB::table('events')
            ->leftJoin('bids', 'events.id', '=', 'bids.id_event')
            ->whereNull('bids.id_event')
            ->get();
        $tcap = DB::select(
            'SELECT bids.id_event,
            events.caption,
            COUNT(bids.id_event) AS evnts
            FROM bids
            INNER JOIN events
                ON events.id = bids.id_event
            GROUP BY 
                bids.id_event
            HAVING evnts > 3'
            );
        $maxcap = DB::select(
            'SELECT bids.id_event,
            events.caption,
             COUNT(id_event) AS count 
            FROM bids
            INNER JOIN events
                ON events.id = bids.id_event 
            GROUP BY id_event 
            ORDER BY count DESC
            LIMIT 1'
        );
        return view('Tasks.task', compact('no_events','bids', 'max_price', 'tcap', 'maxcap','task','tasks'));
        }
        return view('Tasks.task', compact('task', 'tasks'));
    }
}

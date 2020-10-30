<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalesRepresentative;

class SalesRepresentativeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $team = \App\SalesRepresentative::select('users.*', 'salse_routes.name as current_route')->where('role_id', 2)->join('salse_routes', 'salse_routes.id', 'users.salse_route_id')->get();
        // dd($team);
        return view('sales-representative/index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $salseRoutes = \App\SalesRoute::all()->pluck('name', 'id');
        return view('sales-representative/create', compact('salseRoutes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, \App\SalesRepresentative::$rules);

        $salesR = new \App\SalesRepresentative();
        $salesR->name      = $request->name;
        $salesR->email     = $request->email;
        $salesR->telephone = $request->telephone;
        $salesR->joined_on = $request->joined_on;
        $salesR->salse_route_id = $request->salse_route_id;
        $salesR->role_id   = 2;
        $salesR->status    = $request->status;
        // dd($salesR);
        if ($salesR->save()) {
            // 
            return redirect('admin/sales-team')->with('flash_message_success', 'Sales representative created successfully!');
        }
        
        return redirect()->back()->withInput()->with('flash_message_error', 'Sales representative couldn`t create successfully! Please chack entered data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $representative = \App\SalesRepresentative::find($id);
        
        if($representative)
            $representative->current_route = \App\SalesRoute::find($representative->salse_route_id);

        return view('sales-representative/view', compact('representative'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $representative = \App\SalesRepresentative::find($id);
        $salseRoutes = \App\SalesRoute::all()->pluck('name', 'id');
        return view('sales-representative/edit', compact('representative', 'salseRoutes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // change validation rule for ignore current user with the same email
        \App\SalesRepresentative::$rules['email'] = 'required|email|unique:users,email,'.$id;

        $this->validate($request, \App\SalesRepresentative::$rules);

        \DB::beginTransaction();
            try { 
                $salesR = \App\SalesRepresentative::find($id);
                $salesR->name      = $request->name;
                $salesR->email     = $request->email;
                $salesR->telephone = $request->telephone;
                $salesR->joined_on = $request->joined_on;
                $salesR->salse_route_id = $request->salse_route_id;
                $salesR->status    = $request->status;
                $salesR->save();
                // 
            } catch (Exception $e) { 
                \DB::rollBack(); 
                return redirect('')->back()->withInput()->with('flash_message_error', 'Sales representative update unsuccessful, Please tey again!');
            }
        \DB::commit();
        return redirect('admin/sales-team')->with('flash_message_success', 'Sales representative updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $representative = \App\SalesRepresentative::find($id);
        \DB::beginTransaction();
            try {
                if($representative)
                    $representative->delete();
            } 
            catch (Exception $e) { 
                \DB::rollBack(); 
                return redirect('admin/sales-team')->back()->withInput()->with('flash_message_error', 'Sales representative delete unsuccessful, Please tey again!');
            }
        \DB::commit();
        return redirect('admin/sales-team')->with('flash_message_success', 'Sales representative deleted successfully!');
    }
}

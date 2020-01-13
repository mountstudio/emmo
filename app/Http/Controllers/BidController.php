<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bid = new Bid();
        $bid->width = $request->width;
        $bid->profile = $request->profile;
        $bid->diameter = $request->diameter;
        $bid->zip_code = $request->zip_code;
        $bid->phone_number = $request->phone_number;
        $bid->save();
        return view('response_for_bid', ['bid' => $bid]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }

    public function datatable(Request $request)
    {
        return view('admin.bid.index');
    }
    public function datatableData(Request $request)
    {
        return DataTables::of(Bid::query())->make(true);
    }
}

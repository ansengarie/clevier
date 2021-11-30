<?php

namespace App\Http\Controllers;

use App\Models\TransactionItem;
use App\Http\Requests\StoreTransactionItemRequest;
use App\Http\Requests\UpdateTransactionItemRequest;

class TransactionItemController extends Controller
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
     * @param  \App\Http\Requests\StoreTransactionItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionItem  $transactionItem
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionItem $transactionItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionItem  $transactionItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionItem $transactionItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionItemRequest  $request
     * @param  \App\Models\TransactionItem  $transactionItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionItemRequest $request, TransactionItem $transactionItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionItem  $transactionItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionItem $transactionItem)
    {
        //
    }
}

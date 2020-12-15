<?php

namespace App\Http\Controllers\Api;

use App\Model\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Order\OrderService;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(
        OrderService $orderService
    ) {
        $this->orderService = $orderService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 1;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = json_decode(trim($request->getContent()),true);
        $validation = Validator::make($data, [
            'userId' => ['required'],
            'list' => ['required'],
        ]);
        $errors = $validation->errors()->all();
        if(!empty($errors)){
            return response()->json($errors, 400);
        }
        $result = $this->orderService->create($data);
        $status = ($result===true)?200:400;
        return response()->json($result, $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }
    public function orders(Request $request, int $user_id)
    {
        $page=$request->get('page')??1;
        $data = $this->orderService->orders($user_id, $page);
        return response()->json($data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

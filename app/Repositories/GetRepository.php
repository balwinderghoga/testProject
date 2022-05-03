<?php

namespace App\Repositories;

use App\Interfaces\Ori as InterfacesOri;
use App\Models\AccessDataBase as t;
use Illuminate\Support\Facades\DB;

class GetRepository implements InterfacesOri
{
    public function AllOrders()
    {
        return t::all();
    }

    public function OrderById($OrderId)
    {
        return t::findOrFail($OrderId);
    }

    public function deleteOrder($orderId)
    {
        t::destroy($orderId);
    }

    function createOrder($model, $orderDetails)
    {
        return $model::create($orderDetails);

        // return DB::table($model)->create($orderDetails);
    }

    public function updateOrder($orderId, array $newDetails)
    {
        return t::whereId($orderId)->update($newDetails);
    }

    public function getFulfilledOrders()
    {
        return t::where('is_fulfilled', true);
    }
}

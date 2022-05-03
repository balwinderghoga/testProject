<?php 

namespace App\Interfaces;

interface Ori
{
    public function AllOrders();
    public function OrderById($OrderId);
    public function deleteOrder($orderId);
    public function updateOrder($orderId, array $newDetails);
    public function getFulfilledOrders();
    public function createOrder($model,$orderDetails);
}
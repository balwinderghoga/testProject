<?php

namespace App\Http\Controllers;

use App\Interfaces\Ori;
use Illuminate\Http\Request;
use App\Models\AccessDataBase as oppo;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    private Ori $getRepo;
    public function __construct(Ori $getRepo)
    {
        $this->getRepo = $getRepo;
    }

    public function index()
    {
        $data = $this->getRepo->AllOrders();
        //$data = DB::table('access_data_bases')->get();

        //$data = AccessDataBase::all();
        return view('index', ['data' => $data]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $req = $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:access_data_bases'],
            'address' => 'required'
        ]);
        $model = new oppo();
        $this->getRepo->createOrder($model, $req);

        return redirect('index')
            ->with('success', 'Custom has been created successfully.');
    }

    public function edit($id)
    {
        $data = oppo::find($id);
        //$data = $this->getRepo->getOrderById($orderId);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request, $orderId)
    {
        $orderDetails = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $this->getRepo->updateOrder($orderId, $orderDetails);
        
        return redirect('index')
            ->with('success', 'Custom Has Been updated successfully');
    }

    public function delete($orderId)
    {
        $this->getRepo->deleteOrder($orderId);
        return redirect('index')
            ->with('success', 'Custom has been deleted successfully');
    }
}

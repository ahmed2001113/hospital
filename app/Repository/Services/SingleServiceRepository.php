<?php


namespace App\Repository\Services;

use App\Models\Service;
use App\Http\Requests\StoreSingleServiceRequest;

class SingleServiceRepository implements \App\Interfaces\Services\SingleServiceRepositoryInterface
{

    public function index()
    {
        $services = Service::all();
        return view('Dashboard.Services.Single Service.index',compact('services'));
    }

    public function store($request)
    {
        try {
            $SingleService = new Service();
            $SingleService->price = $request->price;
            $SingleService->description = $request->description;
            $SingleService->status = 1;
            $SingleService->name = $request->name;
            $SingleService->name_en = $request->name_en;
            $SingleService->save();
            session()->flash('add');
            return redirect()->route('Service.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try {

            $SingleService = Service::findOrFail($request->id);
            $SingleService->price = $request->price;
            $SingleService->description = $request->description;
            $SingleService->status = $request->status;
            $SingleService->name = $request->name;
            $SingleService->name_en = $request->name_en;
            $SingleService->save();

            session()->flash('edit');
            return redirect()->route('Service.index');

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        Service::destroy($request->id);
        session()->flash('delete');
        return redirect()->route('Service.index');
    }
}
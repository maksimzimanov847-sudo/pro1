<?php



namespace App\Http\Controllers;

use App\Enums\ServicesTypeEnum;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $services = Service::all();
        return view('services.index', compact('services'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = ServicesTypeEnum::options();

        return view('services.create', compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateServiceRequest $request): RedirectResponse
    {
        Service::create($request->validated());
        return redirect()->route('services.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Service $service):View
    {
        return view('services.show', compact('service'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service  $service): View
    {
        $roles = ServicesTypeEnum::options();

        return view('services.edit', compact('service', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {
        $service->update($request->validated());
        return redirect()->route('services.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}

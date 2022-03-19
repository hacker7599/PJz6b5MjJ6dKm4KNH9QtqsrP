<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserPermissions\CreatePermissionRequest;
use App\Http\Requests\Admin\UserPermissions\DeletePermissionRequest;
use App\Http\Requests\Admin\UserPermissions\EditPermissionRequest;
use App\Http\Requests\Admin\UserPermissions\IndexPermissionRequest;
use App\Http\Requests\Admin\UserPermissions\StorePermissionRequest;
use App\Http\Requests\Admin\UserPermissions\UpdatePermissionRequest;
use App\Http\Requests\Admin\UserPermissions\ViewPermissionRequest;
use App\Models\UserPermission;

class UserPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  IndexPermissionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(IndexPermissionRequest $request)
    {
        $userPermissions = UserPermission::search()->paginate(10);

        return view('admin.user-permission.index', compact('userPermissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreatePermissionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePermissionRequest $request)
    {
        return view('admin.user-permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePermissionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
    {
        $sanitized = $request->validated();
        $userPermission = UserPermission::create($sanitized);

        if ($request->ajax()) {
            return response()->json([
                'variant' => 'success',
                'message' => 'Permission (' . $userPermission->name . ') created successfully!',
                'icon' => 'check',
            ]);
        }

        return redirect()->back()->withInput()->with('message', 'Permission (' . $userPermission->name . ') created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  ViewPermissionRequest $request
     * @param  UserPermission  $userPermission
     * @return \Illuminate\Http\Response
     */
    public function show(ViewPermissionRequest $request, UserPermission $userPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  EditPermissionRequest $request
     * @param  UserPermission  $userPermission
     * @return \Illuminate\Http\Response
     */
    public function edit(EditPermissionRequest $request, UserPermission $userPermission)
    {
        return view('admin.user-permission.edit', ['userPermission' => $userPermission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePermissionRequest $request
     * @param  UserPermission  $userPermission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRequest $request, UserPermission $userPermission)
    {
        $userPermission->name = $request->name ?? $userPermission->name;
        $userPermission->slug = $request->slug ?? $userPermission->slug;
        !$request->has('enabled') ?: ($userPermission->enabled = filter_var($request->enabled, FILTER_VALIDATE_BOOLEAN));

        $userPermission->update();

        if ($request->ajax()) {
            return response()->json([
                'variant' => 'success',
                'message' => 'Permission (' . $userPermission->name . ') updated successfully!',
                'icon' => 'check',
            ]);
        }

        return redirect()->back()->withInput()->with('message', 'Permission (' . $userPermission->name . ') updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeletePermissionRequest $request
     * @param  UserPermission $userPermission
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeletePermissionRequest $request, UserPermission $userPermission)
    {
        $userPermission->delete();
        if ($request->ajax()) {
            return response()->json([
                'variant' => 'success',
                'message' => 'Permission (' . $userPermission->name . ') deleted successfully!',
                'icon' => 'check',
            ]);
        }

        return redirect()->back()->withInput()->with('message', 'Permission (' . $userPermission->name . ') deleted successfully!');
    }
}

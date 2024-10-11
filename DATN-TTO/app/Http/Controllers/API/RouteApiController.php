<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RouteResource;
use App\Models\Module;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $routes = Route::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Dữ liệu được lấy thành công',
                'data' => RouteResource::collection($routes),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => null,
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validate = $request->validate([
                'name_route' => 'required|max:255',
                'img_route' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'discription_route' => 'required',
                'status' => 'sometimes|string' // Thêm xác thực cho status
            ]);

            $imgPath = $request->file('img_route')->store('images', 'public');

            // Đảm bảo status luôn có giá trị, nếu không thì gán giá trị mặc định
            $routeCreate = Route::create([
                'name_route' => $request->name_route,
                'img_route' => $imgPath,
                'discription_route' => $request->discription_route,
                'status' => $request->status ?? 'default' // Thêm giá trị mặc định cho status nếu không có
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Thêm thành công',
                'data' => new RouteResource($routeCreate),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => null,
            ], 400);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            // $route = Route::with('modules.course')findOrFail($id);
            $route = Route::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Dữ liệu được lấy thành công',
                'data' => new RouteResource($route),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => null,
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validate = $request->validate([
                'name_route' => 'required|max:255',
                'img_route' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
                'discription_route' => 'required',
                'status' => 'sometimes|string' // Thêm xác thực cho status
            ], [
                'name_route.required' => 'Vui lòng nhập tên lộ trình',
                'name_route.max' => 'Vui lòng không nhập quá 255 kí tự',
                'img_route.image' => 'Tệp tải lên phải là hình ảnh',
                'img_route.mimes' => 'Ảnh phải có định dạng: jpg, jpeg, png, gif',
                'img_route.max' => 'Kích thước ảnh không được vượt quá 2MB',
                'discription_route.required' => 'Vui lòng nhập mô tả'
            ]);

            $route = Route::findOrFail($id);
            if ($request->hasFile('img_route')) {
                $imgPath = $request->file('img_route')->store('images', 'public');
            } else {
                $imgPath = $route->img_route; // Sử dụng ảnh cũ nếu không có ảnh mới
            }

            // Đảm bảo status luôn có giá trị, nếu không thì gán giá trị mặc định
            $route->update([
                'name_route' => $request->name_route,
                'img_route' => $imgPath,
                'discription_route' => $request->discription_route,
                'status' => $request->status ?? 'default'
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Thêm thành công',
                'data' => new RouteResource($route),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => null,
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $route = Route::find($id);
            $route->delete();
            return response()->json([
                'status' => "success",
                'message' => 'Xóa thành công',
                'data' => null,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "success",
                'message' => 'Xóa thành công',
                'data' => null,
            ], 500);
        }
    }
}

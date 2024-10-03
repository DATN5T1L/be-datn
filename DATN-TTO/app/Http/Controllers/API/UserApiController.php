<?php

namespace App\Http\Controllers\API;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::all();
            return response()->json([
            'status' => 'success',
            'message' => 'Dữ liệu được lấy thành công',
            'data' => UserResource::collection($users),
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
        $validatedData = $request -> validate([
            'fullname' => 'required|max:150',
            'username' => 'required|max:150|min:3',
            'password' => 'required|min: 8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',            
            'comfirm_password' => 'required|same:password',
            'email'=> 'required|email|unique:users,email',
        ],[
            'fullname.required' => 'Vui lòng nhập họ và tên.',
            'fullname.max' => 'Họ và tên không quá 150 ký tự.',
            'username.required'=> 'Vui lòng nhập tên người dùng.',
            'username.max' => 'Tên người dùng không quá 150 ký tự',
            'username.min' => 'Tên người dùng phải có ít nhất 3 ký tự.',
            'password.required'=> 'Vui lòng nhập mật khẩu.',
            'password.min'=> 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.regex'=> 'Mật khẩu phải bao gồm ít nhất một chữ cái in hoa, một chữ cái thường, một số, và một ký tự đặc biệt.',
            'confirm_password.required' => 'Vui lòng nhập lại mật khẩu.',
            'confirm_password.same' => 'Mật khẩu nhập lại không khớp.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email này đã được sử dụng, vui lòng dùng email khác.',
        ]);
        try {
            $users = User::Store([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'email' => $request->email,
            ]);
            return response()->json([
            'status' => 'success',
            'message' => 'Dữ liệu được lấy thành công',
            'data' => new UserResource($users),
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\UserResource;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        try {
            $validatedData = $request->validate([
                'fullname' => 'required|max:150',
                'username' => 'required|max:150|min:3',
                'password' => 'required|min: 8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
                'confirm_password' => 'required|same:password',
                'email' => 'required|email|unique:users,email',
            ], [
                'fullname.required' => 'Vui lòng nhập họ và tên.',
                'fullname.max' => 'Họ và tên không quá 150 ký tự.',
                'username.required' => 'Vui lòng nhập tên người dùng.',
                'username.max' => 'Tên người dùng không quá 150 ký tự',
                'username.min' => 'Tên người dùng phải có ít nhất 3 ký tự.',
                'password.required' => 'Vui lòng nhập mật khẩu.',
                'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
                'password.regex' => 'Mật khẩu phải bao gồm ít nhất một chữ cái in hoa, một chữ cái thường, một số, và một ký tự đặc biệt.',
                'confirm_password.required' => 'Vui lòng nhập lại mật khẩu.',
                'confirm_password.same' => 'Mật khẩu nhập lại không khớp.',
                'email.required' => 'Vui lòng nhập email.',
                'email.email' => 'Email không hợp lệ.',
                'email.unique' => 'Email này đã được sử dụng, vui lòng dùng email khác.',
            ]);
            $users = User::Create([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'password' => bcrypt($request->confirm_password),
                'email' => $request->email,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Dữ liệu được lấy thành công',
                'data' => new UserResource($users),
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
            $user = User::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Lấy dữ liệu thành công',
                'data' => new UserResource($user),
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
            $validatedData = $request->validate([
                'fullname' => 'required|max:150',
                'username' => 'required|max:150|min:3',
                'password' => 'required|min: 8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
                'confirm_password' => 'required|same:password',
                'email' => 'required|email|unique:users,email',
            ], [
                'fullname.required' => 'Vui lòng nhập họ và tên', // fullname required
                'fullname.max' => 'Vui lòng nhập không quá 150 kí tự', // fullname max
                'username.required' => 'Vui lòng nhập tên', // username required
                'username.max' => 'Vui lòng nhập không quá 150 kí tự', // username max
                'username.min' => 'Vui lòng nhập nhiều hơn 3 kí tự', // username min
                'password.required' => 'Vui lòng nhập password', // password required
                'password.min' => 'Vui lòng nhập password 6 kí tự trở lên', // password min
                'password.regex' => 'Mật khẩu phải chứa ít nhất 1 chữ cái thường, 1 chữ cái in hoa, 1 chữ số và 1 ký tự đặc biệt (@$!%*?&#)', // password đúng định dạng 1 chữ cái in hoa, 1 chữ số, 1 kí tự đặc biệt
                'confirm_password.required' => 'Vui lòng nhập lại lại mật khẩu', // confirm_password required
                'confirm_password.same' => 'Mật khẩu không trùng', // mật khẩu không trùng
                'email.required' => 'Vui lòng nhập email', // email required
                'email.email' => 'Vui lòng nhập đúng định dạng email', // email định dạng
                'email.unique' => 'Gmail này đã được dùng', // email duy nhất

            ]);
            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User updated successfully',
                'data' => new UserResource($user),
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
        //
    }

    //FORGOT PASSWORD 
    public function forgotPassword(Request $request)
    {
        // Kiểm tra xem email có tồn tại không
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Email không tồn tại'], 404);
        }

        // Tạo mã xác thực (OTP)
        $token = Str::random(6);

        // Kiểm tra xem email đã tồn tại trong bảng password_reset_tokens hay chưa
        $existingToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if ($existingToken) {
            // Nếu tồn tại, cập nhật token mới
            DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->update([
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
        } else {
            // Nếu chưa tồn tại, tạo mới token
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        // Gửi email chứa mã xác thực
        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return response()->json(['message' => 'Mã xác thực đã được gửi đến email'], 200);
    }
    //RESET PASSWORD
    public function verifyToken(Request $request)
    {
        $request->validate([
            'token' => 'required|size:6',
        ], [
            'token.required' => 'Vui lòng nhập mã xác nhận',
            'token.size' => 'Mã phải đúng 6 kí tự',
        ]);

        // Kiểm tra mã xác thực
        $passwordReset = DB::table('password_resets')->where('token', $request->token)->first();

        if (!$passwordReset) {
            return response()->json(['message' => 'Mã xác thực không hợp lệ'], 400);
        }

        // Kiểm tra thời gian mã
        if (Carbon::parse($passwordReset->created_at)->addMinutes(10)->isPast()) {
            return response()->json(['message' => 'Mã xác thực đã hết hạn'], 400);
        }

        // Tìm người dùng dựa trên email từ bảng `password_resets`
        $user = User::where('email', $passwordReset->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Người dùng không tồn tại'], 404);
        }

        // Trả về ID của người dùng để dùng trong bước tiếp theo
        return response()->json(['message' => 'Mã xác thực hợp lệ', 'user_id' => $user->id], 200);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
            'confirm_password' => 'required|same:password',
            'user_id' => 'required|exists:users,id',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Vui lòng nhập mật khẩu có ít nhất 8 kí tự',
            'password.regex' => 'Mật khẩu phải chứa ít nhất 1 chữ cái thường, 1 chữ cái in hoa, 1 chữ số và 1 ký tự đặc biệt (@$!%*?&#)',
            'confirm_password.required' => 'Vui lòng nhập lại mật khẩu',
            'confirm_password.same' => 'Mật khẩu không trùng',
            'user_id.required' => 'Thiếu ID người dùng',
            'user_id.exists' => 'Người dùng không tồn tại',
        ]);

        // Tìm người dùng bằng ID
        $user = User::find($request->user_id);

        if (!$user) {
            return response()->json(['message' => 'Người dùng không tồn tại'], 404);
        }

        // Đổi mật khẩu
        $user->password = Hash::make($request->password);
        $user->save();

        // Xóa mã xác thực sau khi đổi mật khẩu thành công
        DB::table('password_resets')->where('email', $user->email)->delete();

        return response()->json(['message' => 'Mật khẩu đã được thay đổi thành công'], 200);
    }
}

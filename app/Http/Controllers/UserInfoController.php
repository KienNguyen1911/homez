<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserInfoRequest;
use App\Mail\NewUserRegistered;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserInfoController extends Controller
{
    public function index()
    {
        $userInfos = UserInfo::query()->orderBy('created_at', 'desc')->paginate(20);
        foreach ($userInfos as $item) {
            $item->province = \Kjmtrue\VietnamZone\Models\Province::find($item->province_id)->name;
            $districts = \Kjmtrue\VietnamZone\Models\District::whereIn('id', $item->district_ids)->get();
            $districts->pluck('name');
            $item->districts = $districts->implode('name', ', ');
        }

        return view('pages.admin.users.index', compact('userInfos'));
    }

    public function store(StoreUserInfoRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $userInfo = UserInfo::create($data);
            DB::commit();
            toastr()->success('Cảm ơn bạn đã đăng ký');

            \Mail::to(config('mail.to.address'))->send(new NewUserRegistered($userInfo));

            return redirect()->route('home');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            toastr()->error('Có lỗi xảy ra, vui lòng thử lại sau.');

            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}

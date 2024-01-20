<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function UpdatePassword(Request $request)
    {
        $validatedata = $request->validate([
            "oldPassword" => 'required',
            "newPassword" => "required",
            "confirm_password" => "required|same:newPassword"
        ]);

        $hashPassword = Auth::user()->password;


        if (Hash::check($request->oldPassword, $hashPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->newPassword);

            $user->save();

            session()->flash("message", "Password Updated Successfully");

            return redirect()->back();
        } else {
            session()->flash("message", "Password is not match");

            return redirect()->back();
        }





    }

    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function UpdatePass()
    {
        return view("admin.updatepass");
    }


    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editAdmin = User::find($id);
        return view('admin.admin_edit_profile', compact('editAdmin'));
    }
    public function UpdatedEditProfile(Request $request)
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        $editData->name = $request->name;
        $editData->email = $request->email;
        $editData->username = $request->username;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date("Ymdhi") . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images/'), $filename);
            $editData["profile_image"] = $filename;
        }

        $editData->save();

        return redirect()->route("admin.profile");
    }
}

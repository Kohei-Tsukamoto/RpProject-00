<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.user.create');
    }

    public function create()
    {
        return redirect('admin/user/create');
    }

    public function edit()
    {
        $user = Auth::user();



        return view('admin.user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->user()->id);

        $form = $request->all();


        if (isset($form['profile_img'])) {
            $path = $request->file('profile_img')->store('public/img');
            $user->profile_img = basename($path);
        } else {
            $user->profile_img = null;
        }
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['profile_img']);

        // データベースに保存する
        $user->name = $form['name'];
        $user->comment = $form['comment'];
        $user->email = $form['email'];
        $user->update();

        return redirect('admin/user/edit');
    }

    public function show(Request $request)
    {
        $user = \App\User::find($request->id);

        return view('user/show', ['user' => $user]);
    }

    public function showChangePasswordForm()
    {
        return view('auth.passwords.changepassword');
    }

    public function changePassword(Request $request)
    {
        //現在のパスワードが正しいかを調べる
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with('change_password_error', '現在のパスワードが間違っています。');
        }

        //現在のパスワードと新しいパスワードが違っているかを調べる
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            return redirect()->back()->with('change_password_error', '新しいパスワードが現在のパスワードと同じです。違うパスワードを設定してください。');
        }

        //パスワードのバリデーション。新しいパスワードは6文字以上、new-password_confirmationフィールドの値と一致しているかどうか。
        $validated_data = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //パスワードを変更
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with('change_password_success', 'パスワードを変更しました。');
    }
}

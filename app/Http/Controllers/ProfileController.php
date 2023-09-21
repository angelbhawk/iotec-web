<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function getDevices(Request $r){

        $userId = 1;//$request->input('id'); // Valor variable del parámetro

$results = DB::table('devices AS dev')
    ->join('application_devices AS adv', 'dev.id', '=', 'adv.device_id')
    ->join('applications AS app', 'adv.application_id', '=', 'app.id')
    ->join('user_applications AS uap', 'app.id', '=', 'uap.application_id')
    ->join('users AS usr', 'uap.user_id', '=', 'usr.id')
    ->where('usr.id', '=', $userId)
    ->select('dev.*')
    ->get();

        return response()->json($results);
    }

    public function getDevice(){
        return Redirect::route('device');
    }
}

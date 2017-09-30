<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Update contact-information
     *
     * @author Jonna Hedlund
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function editContactInformation(ContactForm $request)
    {
        $user = Auth::user();

        $user->phone    =   $request->phone;
        $user->email    =   $request->email;
        $user->save();

        return back()
            ->with([
                'success' => 'Dina kontakt-uppgifter är sparade',
            ]);
    }

    /**
     * Update social-information
     *
     * @author Jonna Hedlund
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function editSocialInformation(SocialForm $request)
    {
        return back()
            ->with([
                'success' => 'Dina ändringar är sparade',
            ]);
    }
}

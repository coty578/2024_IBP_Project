<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class UserAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('user.announcements.index', compact('announcements'));
    }
}

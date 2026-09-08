<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    // User dashboard home
    public function index()
    {
        $user = Auth::user();

        $course = Course::first();
        $isEnrolled = false;
        if ($course) {
            $isEnrolled = Enrollment::where('user_id', $user->id)
                ->where('course_id', $course->id)
                ->where('status', 'completed')
                ->exists();
        }
        $courseClasses = $isEnrolled
            ? CourseClass::where('status', true)->orderBy('order_id')->get()
            : collect();

        return view('user.dashboard', compact('user', 'course', 'isEnrolled', 'courseClasses'));
    }

    // Profile view
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    // Profile update
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];

        // Validate into a named error bag so auth modal doesn't auto-open
        $data = $request->validateWithBag('profile', $rules);

        try {
            if ($request->hasFile('profile') && $request->file('profile')->isValid()) {
                $uploaded = $request->file('profile');
                $extension = $uploaded->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $destination = public_path('uploads/profile');

                if (!is_dir($destination)) {
                    mkdir($destination, 0755, true);
                }

                $uploaded->move($destination, $filename);
                
                if (!empty($user->image)) {
                    $oldPaths = [
                        public_path($user->image),
                        public_path('storage/' . ltrim($user->image, '/')),
                        storage_path('app/public/' . ltrim($user->image, '/')),
                    ];
                    foreach ($oldPaths as $old) {
                        if (file_exists($old) && is_file($old)) {
                            try {
                                @unlink($old);
                            } catch (\Throwable $e) {
                                Log::warning('Failed to delete old profile image via public path', ['user_id' => $user->id, 'path' => $old, 'error' => $e->getMessage()]);
                            }
                            break;
                        }
                    }
                }

                $user->image = 'uploads/profile/' . $filename;
            }

            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->save();

            Log::info('User profile updated', ['user_id' => $user->id]);

            return redirect()->back()->with('success', 'প্রোফাইল সফলভাবে আপডেট হয়েছে।');
        } catch (\Exception $e) {
            Log::error('Failed to update profile', [
                'user_id' => $user->id ?? null,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->withErrors(['error' => 'দুঃখিত, অনুগ্রহ করে পরে আবার চেষ্টা করুন।']);
        }
    }

    // Password form
    public function passwordForm()
    {
        $user = Auth::user();
        return view('user.password', compact('user'));
    }

    // Password update
    public function updatePassword(Request $request)
    {
        // Use a named error bag for password errors
        $request->validateWithBag('password', [
            'current_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        try {
            $user = Auth::user();

            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'বর্তমান পাসওয়ার্ড মিলছে না।']);
            }

            $user->password = Hash::make($request->password);
            $user->save();

            Log::info('User password updated', ['user_id' => $user->id]);

            return redirect()->back()->with('success', 'পাসওয়ার্ড সফলভাবে পরিবর্তন হয়েছে।');
        } catch (\Exception $e) {
            Log::error('Failed to update password', [
                'user_id' => Auth::id(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->withErrors(['error' => 'দুঃখিত, অনুগ্রহ করে পরে আবার চেষ্টা করুন।']);
        }
    }

    // User Courses list
    public function courses()
    {
        $data = $this->seo('courses');
        return view('frontend.course_details');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $title = "Strategy Call Bookings";

        $statusFilter = $request->query('status', 'all');
        $searchQuery = $request->query('search', '');
        $dateFilter = $request->query('date', '');

        $query = Booking::query();

        if ($statusFilter !== 'all' && in_array($statusFilter, ['pending', 'confirmed', 'completed', 'cancelled'])) {
            $query->where('status', $statusFilter);
        }

        if (!empty($searchQuery)) {
            $query->where(function ($q) use ($searchQuery) {
                $q->where('name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('email', 'like', '%' . $searchQuery . '%')
                  ->orWhere('phone', 'like', '%' . $searchQuery . '%')
                  ->orWhere('company_name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('service_interested', 'like', '%' . $searchQuery . '%');
            });
        }

        if (!empty($dateFilter)) {
            $query->where('booking_date', 'like', '%' . $dateFilter . '%');
        }

        $bookings = $query->orderBy('id', 'desc')->paginate(15)->withQueryString();

        // Calculate Overview Statistics
        $stats = [
            'total'     => Booking::count(),
            'pending'   => Booking::where('status', 'pending')->count(),
            'confirmed' => Booking::where('status', 'confirmed')->count(),
            'completed' => Booking::where('status', 'completed')->count(),
            'cancelled' => Booking::where('status', 'cancelled')->count(),
        ];

        return view('admin.bookings.index', compact('title', 'bookings', 'stats', 'statusFilter', 'searchQuery', 'dateFilter'));
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        if (request()->ajax() || request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'booking' => $booking
            ]);
        }

        return response()->json(['success' => true, 'booking' => $booking]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled'
        ]);

        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        $message = "Booking #{$booking->id} status updated to " . ucfirst($booking->status) . ".";

        if ($booking->status === 'completed' || $booking->status === 'cancelled') {
            $message .= " Time slot ({$booking->booking_time} on {$booking->booking_date}) is now unlocked and available for new bookings!";
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'booking' => $booking
            ]);
        }

        return redirect()->back()->with('success', $message);
    }

    public function complete(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'completed';
        $booking->save();

        $message = "Appointment with {$booking->name} marked as Completed! The time slot ({$booking->booking_time} on {$booking->booking_date}) is now available again for others to book.";

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'booking' => $booking
            ]);
        }

        return redirect()->back()->with('success', $message);
    }

    public function destroy(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Booking record deleted successfully.'
            ]);
        }

        return redirect()->back()->with('success', 'Booking record deleted successfully.');
    }
}

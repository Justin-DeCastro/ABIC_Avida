<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Mail;
use App\Mail\UploadAcceptedNotification;
use App\Mail\UploadDeclinedNotification;
class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return view('upload.index', compact('uploads'));
    }

    public function showForm()
    {
        $upload= Upload::all();
        return view('upload.index', compact('upload'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'image_path' => 'required|image|max:20480',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'contact' => 'required|string|max:255',
            'amenities' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'fullname' => 'required|string|max:255',
            'id_image' => 'required|image|max:20480',
        ]);


        if ($request->hasFile('image_path') && $request->hasFile('id_image')) {

            $imageName = time().'.'.$request->image_path->extension();
            $idImageName = time().'.'.$request->id_image->extension();
            $request->image_path->move(public_path('images/uploads'), $imageName);
            $request->id_image->move(public_path('images/uploads'), $idImageName);
        } else {

            return redirect()->back()->with('error', 'Both image_path and id_image are required.');
        }

        // Create a new Upload instance
        $upload = new Upload();
        $upload->image_path = $imageName;
        $upload->name = $request->name;
        $upload->description = $request->description;
        $upload->price = $request->price;
        $upload->contact = $request->contact;
        $upload->amenities = $request->amenities;
        $upload->email = $request->email;
        $upload->fullname = $request->fullname;
        $upload->id_image = $idImageName;
        $upload->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Upload successful!');
    }

public function accept($id)
{
    $upload = Upload::findOrFail($id);
    $upload->status = 'Accepted';
    $upload->save();


    $ticketNumber = $this->generateTicketNumber();
    $message = 'Ticket number: ' . $ticketNumber . '. Your upload has been accepted.';
    Mail::to($upload->email)->send(new UploadAcceptedNotification($upload, $message));

    return redirect()->back()->with('success', 'Upload accepted successfully.');
}

public function decline($id)
{
    $upload = Upload::findOrFail($id);
    $upload->status = 'Declined';
    $upload->save();


    $ticketNumber = $this->generateTicketNumber();
    $message = 'Ticket number: ' . $ticketNumber . '. Sorry, we regret to inform you that your upload has been declined.';
    Mail::to($upload->email)->send(new UploadDeclinedNotification($upload, $message));

    return redirect()->back()->with('success', 'Upload declined successfully.');
}

private function generateTicketNumber()
{

    return 'TICKET-' . mt_rand(100000, 999999);
}
}

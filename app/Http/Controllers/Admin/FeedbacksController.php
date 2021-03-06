<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedbacks;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedbacks::paginate(10);
        return view('admin.feedbacks.index', compact("feedbacks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedbacks $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedbacks.index');
    }

    public function search(Request $request)
    {
        if(empty($request->feedbackSearch)) {
            return redirect()->route('admin.feedbacks.index');
        } else {
            $feedbacks = Feedbacks::where('feedbacks.title', 'like', '%' . $request->feedbackSearch . '%')
            ->paginate(10)->withPath('search?feedbackSearch=' . $request->feedbackSearch);
            return view("admin.feedbacks.index")->with("feedbacks", $feedbacks);
        }
    }

    public function createMail(Feedbacks $feedback)
    {
        return view('admin.feedbacks.sendMail', compact("feedback"));
    }

    public function sendMail(Request $request)
    {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            $mail->CharSet = 'UTF-8';
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'doanhuynguyenhong@gmail.com';                 // SMTP username
            $mail->Password = 'dpurmgdljnwrtapg';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('doanhuynguyenhong@gmail.com', 'Admin OHC');
            $mail->addAddress($request->email, $request->email);     // Add a recipient
            $mail->addReplyTo('doanhuynguyenhong@gmail.com', 'Admin OHC');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Response : ' . $request->title;
            $mail->Body    = $request->content;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            // dd($mail);
            $mail->send();
            return redirect()->route("admin.feedbacks.index");
            // dd('Message has been sent');
        } catch (Exception $e) {
            echo 'Message could not be sent.';
        }
    }
}

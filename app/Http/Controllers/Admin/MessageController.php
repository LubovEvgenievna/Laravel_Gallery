<?php

namespace App\Http\Controllers\Admin;

use App\Models\MymailModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MailModel;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class MessageController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function incoming() {
        $this->data['maildata']= MailModel::orderBy('created_at', 'desc')
                                ->get();

        return view('adminpanel.pages.messages.incoming', $this->data);
    }

    public function outgoing() {

        $this->data ['mymaildata'] = MymailModel::join('mail', 'mymail.mail_id', 'mail.id')
                                    ->select('mymail.*', 'mail.name', 'mail.email')
                                    ->orderBy('created_at', 'desc')
                                    ->get();

        return view('adminpanel.pages.messages.outgoing', $this->data);
    }

    public function message($id) {
        $this->data ['maildata'] = MailModel::where('id',$id)
                            ->get();
        foreach($this->data['maildata'] as $mail) {
            if ($mail['read'] == 0) {
                MailModel::where('id',$id)
                ->update(['read' => 1]);

            --$this->data['count_mail'];
            }
        }

        return view('adminpanel.pages.messages.message', $this->data);
    }

    public function messagedelete($id) {
        $delete = MailModel::where('id', $id)
            ->delete();

        return $delete;
    }

    public function openmessagedelete($id) {
        $del = $this->messagedelete($id);

        if( $del) {
            return redirect('incoming');
        }
    }

    public function mymessage($id) {
        $this->data ['mymaildata'] = MymailModel::join('mail', 'mymail.mail_id', 'mail.id')
                                    ->select('mymail.*', 'mail.name', 'mail.email')
                                    ->where('mymail.id',$id)
                                    ->first();

        return view('adminpanel.pages.messages.mymessage', $this->data);
    }

    public function mymessagedelete($id) {
        $delete = MymailModel::where('id', $id)
            ->delete();

        return $delete;
    }

    public function openmymessagedelete($id) {
        $del = $this->mymessagedelete($id);

        if( $del) {
            return redirect('outgoing');
        }
    }

    public function answer($id) {
        $this->data ['maildata'] = MailModel::where('id', $id)
                        ->first();

        return view('adminpanel.pages.messages.answer', $this->data);
    }

    public function sendmail(Request $request) {
        $message = $this->sanitize($request['message']);

        $mymail = new MymailModel();
        $mymail->mail_id = $request['id'];
        $mymail->message = $message;
        $mymail->save();

        MailModel::where('id', $request['id'])
            ->update(['answer' => 1]);

        Session::flash('message', 'Сообщение отправлено!');

        return redirect('outgoing');
    }
}

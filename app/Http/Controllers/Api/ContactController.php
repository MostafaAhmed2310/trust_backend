<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller
{
   public function mail(Request $request) {
      $data = [
               'from' =>$request['from'] ,
               'name'=>$request['name'],
               'msg'=>$request['msg']
              ];
      Mail::to(['nada.dahab@espace.com.eg','mostafa25294.n@gmail.com'])->send(new SendMailable($data));
      return response()->json(['Email was sent']);
   }
}

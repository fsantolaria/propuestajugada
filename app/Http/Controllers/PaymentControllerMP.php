<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SantiGraviano\LaravelMercadoPago\Facades\MP;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PaymentControllerMP extends Controller
{

  public function getCreatePreapproval()
  {

    $preapproval_data = [
    'payer_email' => 'agariobadcell@gmail.com',
    'back_url' => 'http://labhor.com.ar/laravel/public/preapproval',
    'reason' => 'Subscripción a paquete premium',
    #'external_reference' => $subscription->id,
    'auto_recurring' => [
      'frequency' => 1,
      'frequency_type' => 'months',
      'transaction_amount' => 99,
      'currency_id' => 'ARS',
      'start_date' => Carbon::now()->addHour()->format('Y-m-d\TH:i:s.BP'),
      'end_date' => Carbon::now()->addMonth()->format('Y-m-d\TH:i:s.BP'),
    ],
  ];

  $preapproval=MP::create_preapproval_payment($preapproval_data);

  return dd($preapproval);

  }
}

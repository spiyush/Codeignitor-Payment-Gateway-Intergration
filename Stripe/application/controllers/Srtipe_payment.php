<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Stripe\Stripe;
use \Stripe\Charge;
use \Stripe\Customer;



class Srtipe_payment extends CI_Controller {


	public function index()
	{

	}

  public function checkout(){

$token = $_POST['stripeToken'];
if(isset($_POST['stripeToken'])){

  try {
require_once('vendor/autoload.php');

     $Stripe::setApiKey("sk_test_NGb5oy7qisUbIjjIZQde3UMI");

     $charge = Charge::create(
    array(
      "amount" => 1000,
      "currency" => "gbp",
      "description" => "Example charge",
      "source" => $token,
    ));

  echo"<h1>Payment went through..!!</h1>";

  } catch (Exception $e) {
 $error = $e->getMessage();
 echo $error;
}

  }

  }



}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {
  public function __invoke() {
    $first_name = 'Fletcher';
    $last_name = 'Rippon';
    $bio = 'Things about me';

    return [
        'firstName' => $first_name,
        'lastName' => $last_name,
        'fullName' => $first_name.' '.$last_name,
        'bio' => $bio,
        'bioLength' => strlen($bio)
    ];
  }
}
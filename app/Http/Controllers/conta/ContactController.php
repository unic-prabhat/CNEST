<?php

namespace App\Http\Controllers\conta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactList;
use App\User;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
        public function edit(ContactList $id)
        {
                echo $id;
        }
}
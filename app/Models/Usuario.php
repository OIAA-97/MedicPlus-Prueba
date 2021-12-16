<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lab404\Impersonate\Models\Impersonate;

class Usuario extends Model
{
    use HasFactory, Impersonate;
}
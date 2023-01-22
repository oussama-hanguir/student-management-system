<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $table = "matieres";
    protected $primary_key = "id";
    protected $fillables = ["id", "nom", "Langage_c", "note"];
}

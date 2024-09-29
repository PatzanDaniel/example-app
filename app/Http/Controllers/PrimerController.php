<?php
namespace App\Http\Controllers;
class PrimerController extends Controller
{
 function index($texto) {
 return view('mis-views.primer-view', [
 'texto' => $texto
 ]);
 }
}

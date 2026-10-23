<?php namespace App\Controllers; use App\Core\Controller; use App\Models\Car;
final class DashboardController extends Controller{public function index():void{$u=$this->auth();$this->view('dashboard/index',['cars'=>Car::byUser((int)$u['id'])]);}}

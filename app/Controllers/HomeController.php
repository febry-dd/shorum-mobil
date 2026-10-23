<?php namespace App\Controllers; use App\Core\Controller; use App\Models\Car;
final class HomeController extends Controller{public function index():void{$this->view('home/index',['cars'=>Car::search([],8)]);}}

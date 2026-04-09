<?php
namespace App\controllers;
require_once '../app/core/Controller.php';

use App\Core\Controller;
    class studentsController extends Controller
    {
        public function index():void{
            $this->view('students.index');
        }
    
        public function create():void{
            $this->view('students.create');
        }
        public function show(string $id):void{
            $this->view('students.show');
        }
        public function edit(string $id):void{
            $this->view('students.edit');
        }
    }
    
?>
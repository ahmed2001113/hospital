<?php

namespace App\Interfaces\Dashboard_Ray_Employee;

interface InvoicesRepositoryInterface
{
    public function index();
    public function completed_invoicess();
    public function edit($id);
    public function update($request,$id);
    public function view_rays($id);
}

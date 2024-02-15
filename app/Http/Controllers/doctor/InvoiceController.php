<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\InvoicesRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    private $invoices;

    public function __construct(InvoicesRepositoryInterface $invoices)
    {
        $this->invoices = $invoices;
    }

    public function index()
    {
       return $this->invoices->index();
    }

    public function reviewInvoices()
    {
        return $this->invoices->reviewInvoices();
    }

    public function completedInvoices()
    {
        return $this->invoices->completedInvoices();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return $this->invoices->show($id);
    }

    public function viewlab($id)
    {
        return $this->invoices->viewlab($id);
    }
    
    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }
    
}

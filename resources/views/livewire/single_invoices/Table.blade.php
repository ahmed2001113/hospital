<button class="btn btn-primary pull-right" wire:click="show_form_add" type="button">{{trans('invoices.add_new')}}</button><br><br>
<div class="table-responsive">
    <table class="table text-md-nowrap" id="example1" data-page-length="50"style="text-align: center">
        <thead>
        <tr>
            <th>#</th>
            <th>{{trans('invoices.name')}}</th>
            <th>{{trans('invoices.patient_name')}}</th>
            <th>{{trans('invoices.date')}}</th>
            <th>{{trans('invoices.doctor_name')}}</th>
            <th>{{trans('invoices.section')}}</th>
            <th>{{trans('invoices.price')}}</th>
            <th>{{trans('invoices.discount')}}</th>
            <th>{{trans('invoices.tax')}}</th>
            <th>{{trans('invoices.tax_rate')}}</th>
            <th>{{trans('invoices.total')}}</th>
            <th>{{trans('invoices.type')}}</th>
            <th>{{trans('invoices.operation')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($single_invoices as $single_invoice)
            <tr>
                <td>{{ $loop->iteration}}</td>
                @if (App::getLocale() == 'ar')
                <td>{{ $single_invoice->Service->name }}</td>
                @else
                <td>{{ $single_invoice->Service->name_en }}</td>
                @endif
                <td>{{ $single_invoice->Patient->name }}</td>
                <td>{{ $single_invoice->invoice_date }}</td>
                <td>{{ $single_invoice->Doctor->name }}</td>
                @if (App::getLocale() == 'ar')
                <td>{{ $single_invoice->Section->name }}</td>
                @else
                <td>{{ $single_invoice->Section->name_en }}</td>
                @endif
                <td>{{ number_format($single_invoice->price, 2) }}</td>
                <td>{{ number_format($single_invoice->discount_value, 2) }}</td>
                <td>{{ $single_invoice->tax_rate }}%</td>
                <td>{{ number_format($single_invoice->tax_value, 2) }}</td>
                <td>{{ number_format($single_invoice->total_with_tax, 2) }}</td>
                @if (App::getLocale() == 'ar')
                <td>{{ $single_invoice->type == 1 ? 'نقدي':'اجل' }}</td>
                @else
                <td>{{ $single_invoice->type == 1 ? 'Cash':'Deferred' }}</td>
                @endif
                <td>
                    <button wire:click="edit({{ $single_invoice->id }})" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_invoice" wire:click="delete({{ $single_invoice->id }})" ><i class="fa fa-trash"></i></button>
                    <button wire:click="print({{ $single_invoice->id }})" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></button>
                </td>
            </tr>

        @endforeach
    </table>

    @include('livewire.single_invoices.delete')

</div>

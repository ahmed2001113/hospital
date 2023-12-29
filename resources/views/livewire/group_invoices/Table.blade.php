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
            <th>{{trans('invoices.tax_rate')}}</th>
            <th>{{trans('invoices.tax')}}</th>
            <th>{{trans('invoices.total_with_tax')}}</th>
            <th>{{trans('invoices.type')}}</th>
            <th>{{trans('invoices.operation')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($group_invoices as $group_invoice)
            <tr>
                <td>{{ $loop->iteration}}</td>
                @if (App::getLocale() == 'ar')
                <td>{{ $group_invoice->Group->name }}</td>
                @else
                <td>{{ $group_invoice->Group->name_en }}</td>
                @endif
                <td>{{ $group_invoice->Patient->name }}</td>
                <td>{{ $group_invoice->invoice_date }}</td>
                <td>{{ $group_invoice->Doctor->name }}</td>
                @if (App::getLocale() == 'ar')
                <td>{{ $group_invoice->Section->name }}</td>
                @else
                <td>{{ $group_invoice->Section->name_en }}</td>
                @endif
                <td>{{ number_format($group_invoice->price, 2) }}</td>
                <td>{{ number_format($group_invoice->discount_value, 2) }}</td>
                <td>{{ $group_invoice->tax_rate }}%</td>
                <td>{{ number_format($group_invoice->tax_value, 2) }}</td>
                <td>{{ number_format($group_invoice->total_with_tax, 2) }}</td>
                @if (App::getLocale() == 'ar')
                <td>{{ $group_invoice->type == 1 ? 'نقدي':'اجل' }}</td>
                @else
                <td>{{ $group_invoice->type == 1 ? 'Cash':'Deferred' }}</td>
                @endif
                <td>
                    <button wire:click="edit({{ $group_invoice->id }})" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_invoice" wire:click="delete({{ $group_invoice->id }})" ><i class="fa fa-trash"></i></button>
                    <button wire:click="print({{ $group_invoice->id }})" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></button>
                    {{-- <a href="#"  wire:click="print({{ $group_invoice->id }})" class="btn btn-primary btn-sm" target="_blank" title="طباعه سند صرف"><i class="fas fa-print"></i></a> --}}
                </td>
            </tr>

        @endforeach
    </table>
    @include('livewire.group_invoices.delete')
</div>

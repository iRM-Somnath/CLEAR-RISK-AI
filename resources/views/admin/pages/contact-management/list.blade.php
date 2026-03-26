@extends('admin.layouts.master')
@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <!-- Action buttons (if needed) -->
        </div>
    </header>

    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="4%">Sl No.</th>
                    <th width="13%">first_name</th>
                    <th width="15%">last_name</th>
                    <th width="12%">phone_number</th>
                    <th width="10%">email</th>
                    <th width="12%">designation</th>
                    <th width="14%">country</th>
                    <th width="10%">message</th>
                </tr>
            </thead>
        </table>
    </div>
</section>

@endsection

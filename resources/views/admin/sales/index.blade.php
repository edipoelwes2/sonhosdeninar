@extends('admin.master.master')

@section('content')
<section class="dash_content_app">
    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="{{ route('admin.diapers.index') }}" class="text-orange">Produtos</a></li>
                </ul>
            </nav>

            <a href="{{ route('admin.stocks.create') }}" class="btn btn-orange icon-user ml-1">Nova Entrada</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    @include('admin.users.filter')

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                <thead>
                    <tr>
                        <th>cod</th>
                        <th>cliente</th>
                        <th>descrição</th>
                        <th>Total</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->code }}</td>
                        <td><a href="{{ route('admin.sales.edit', ['sale' => $sale->id]) }}" class="text-orange">{{ $sale->user->name }}</a></td>
                        <td>{{ $sale->description }}</td>
                        <td>R$ {{ money_br($sale->product_sales->sum('sub_total')) }}</td>
                        <td>{{ date_br($sale->created_at) }}</td>
                        <td><a href="{{ route('admin.sales.show', ['sale' => $sale->id]) }}">show</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
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

    <div>
        <p>Código: {{ $sale->code }}</p>
        <p>Responsavel: {{ $sale->user->name }}</p>
        <p>Cliente: Maria</p>
        <p>Telefone: (86)98182-2356</p>
        <p>Data: {{ date_br($sale->created_at) }}</p>
        <p>Descrição: {{ $sale->description }}</p>
        <p>Total: R$ {{ money_br($sale->product_sales->sum('sub_total')) }}</p>
    </div>

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itens as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->sub_total }}</td>
                    </tr>
                    
                    @endforeach
                    
                </tbody>
            </table
        </div>
    </div>
</section>
@endsection
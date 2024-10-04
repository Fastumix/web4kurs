@extends('layouts.admin')
@section('title', 'Деталі квитка')
@section('content')
<div class="container">
    <h1>Деталі квитка</h1>
    <ul>
        <li>ID: {{ $ticket->id }}</li>
        <li>Подія: {{ $ticket->event_id }}</li>
        <li>Користувач: {{ $ticket->user_id }}</li>
        <li>Номер місця: {{ $ticket->seat_number }}</li>
        <li>Ціна: {{ $ticket->price }}</li>
        <li>Дата покупки: {{ $ticket->purchase_date->format('d.m.Y H:i') }}</li>
        <li>Статус: {{ $ticket->status }}</li>
        <li>Створено: {{ $ticket->created_at->format('d.m.Y H:i') }}</li>
        <li>Оновлено: {{ $ticket->updated_at->format('d.m.Y H:i') }}</li>
    </ul>
    <a href="{{ route('admin.tickets.index') }}" class="btn btn-secondary">Назад до списку</a>
</div>
@endsection
@extends('layouts.admin')

@section('title', 'Квитки')

@section('content')
<div class="container">
    <h1>Квитки</h1>
    <a href="{{ route('admin.tickets.create') }}" class="btn btn-primary mb-3">Додати новий квиток</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Опис</th>
                <th>Ціна</th>
                <th>Статус</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->title }}</td>
                <td>{{ Str::limit($ticket->description, 50) }}</td>
                <td>{{ $ticket->price }}</td>
                <td>{{ $ticket->status }}</td>
                <td>
                    <a href="{{ route('admin.tickets.show', $ticket) }}" class="btn btn-info btn-sm">Переглянути</a>
                    <a href="{{ route('admin.tickets.edit', $ticket) }}" class="btn btn-warning btn-sm">Редагувати</a>
                    <form action="{{ route('admin.tickets.destroy', $ticket) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Видалити</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
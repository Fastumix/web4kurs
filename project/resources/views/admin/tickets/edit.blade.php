@extends('layouts.admin')

@section('title', 'Редагувати квиток')

@section('content')
<div class="container">
    <h1>Редагувати квиток</h1>
    <form action="{{ route('admin.tickets.update', $ticket) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Назва квитка</label>
            <input type="text" name="title" class="form-control" value="{{ $ticket->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Опис</label>
            <textarea name="description" class="form-control" rows="3">{{ $ticket->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Ціна</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $ticket->price }}" required>
        </div>
        <div class="form-group">
            <label for="status">Статус</label>
            <select name="status" class="form-control" required>
                <option value="available" {{ $ticket->status == 'available' ? 'selected' : '' }}>Доступний</option>
                <option value="unavailable" {{ $ticket->status == 'unavailable' ? 'selected' : '' }}>Недоступний</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Оновити</button>
    </form>
</div>
@endsection
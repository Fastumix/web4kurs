@extends('layouts.admin')

@section('title', 'Додати новий квиток')

@section('content')
<div class="container">
    <h1>Додати новий квиток</h1>
    <form action="{{ route('admin.tickets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Назва квитка</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Опис</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Ціна</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Статус</label>
            <select name="status" class="form-control" required>
                <option value="available">Доступний</option>
                <option value="unavailable">Недоступний</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
</div>
@endsection
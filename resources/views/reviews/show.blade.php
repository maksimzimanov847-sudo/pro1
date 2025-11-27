@php
    $review = $review ?? null;
@endphp
    <div class="show-container">
        <div class="show-header">
            <h1>Отзыв #{{ $review->id }}</h1>
            <div>
                <a href="{{ route('users.index') }}" class="btn btn-back">Назад</a>
            </div>
        </div>

        <div class="table-container">
            <table class="table show-table">
                <thead>
                <tr>
                    <th>Пользователь:</th>
                    <th>Услуга:</th>
                    <th>Оценка:</th>
                    <th>Комментарий пользователя:</th>
                    <th>Дата создания:</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->service->name }}</td>
                    <td>{{ $review->rating }} из 5</td>
                    <td>{{ $review->text }}</td>
                    <td>{{ $review->created_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


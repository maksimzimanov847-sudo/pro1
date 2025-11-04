@vite(['resources/css/app.css'])
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services </title>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="{{ route('services.create') }}" class="btn btn-primary">создать нового </a>
    </div>
</div>
<div class="table-container">
    <table class="table">
        <thead>
        <tr style="background-color: #f61500; ">
            <th>ID</th>
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Тип</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @forelse($services as $service)


            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->price }}</td>
                <td>{{ $service->type }}</td>
                <td class="actions">
                    <a href="{{ route('services.show', $service) }}" class="btn btn-info">показать</a>
                    <a href="{{ route('services.edit',$service) }}" class="btn btn-warning">изменить</a>
                    <form action="{{ route('services.destroy',$service) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Удалить</button>

                    </form>

                </td>

            </tr>
        @empty
            <tr>
                <td colspans="7" class="no-data">нет данных</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

</body>
</html>


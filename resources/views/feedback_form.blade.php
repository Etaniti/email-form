<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <form action="{{ route('emails.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card px-4 py-3">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Форма обратной связи</h4>

                        <div class="mb-3 row">
                            <label for="sender" class="col-form-label fw-bold">Адрес электронной почты</label>
                            <input type="text" class="form-control" name="sender">
                            @error('sender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="subject" class="col-form-label fw-bold">Тема письма</label>
                            <input type="text" class="form-control" name="subject">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 row">
                            <label for="message" class="col-form-label fw-bold">Текст письма</label>
                            <textarea type="text" class="form-control" name="message" rows="5"></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-outline-primary p-3">
                                Отправить
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Stats</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    ФИО пользователя
                </th>
                <th>
                    Дата авторизации
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($userStats as $userStat)
                <tr>
                    <td>
                        {{ $userStat->user->name }}
                    </td>
                    <td>
                        {{ $userStat->last_login }}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>
                    ФИО пользователя
                </th>
                <th>
                    Дата авторизации
                </th>
            </tr>
        </tfoot>
    </table>
</body>
</html>
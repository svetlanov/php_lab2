<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>График работы</title>
</head>
<body>
    <?php $day = date('N'); ?>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Фамилия Имя</th>
            <th>График работы</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Styles</td>
            <?php if ($day == 1 || $day == 2 || $day == 3) {?>
                <td>График работы: 8:00-12:00</td>
            <?php } else { ?>
                <td>Нерабочий день</td>
            <?php } ?>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Doe</td>
            <?php if ($day == 2 || $day == 4 || $day == 6) {?>
                <td>График работы: 12:00-16:00</td>
            <?php } else { ?>
                <td>Нерабочий день</td>
            <?php } ?>
        </tr>
    </table>
</body>
</html>

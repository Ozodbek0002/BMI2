<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Passport </title>

    <style>
        /* Add the following CSS code to your existing styles or create a new CSS file */

        /* Set general styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Set styles for table header */
        thead th {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            padding: 8px;
            font-weight: bold;
        }

        /* Set styles for table body */
        tbody td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        /* Set alternating row colors for better readability */
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Set hover effect on table rows */
        tbody tr:hover {
            background-color: #eaf6ff;
        }

        /* Set styles for the first column */
        td.col-1 {
            width: 30px;
        }

        /* Add some spacing around the table */
        .card-body {
            margin: 20px;
        }

    </style>

</head>
<body>

<div class="page-break container"></div>

<div class="card-body">
    <h2 align="center">  {{ $mahalla->name }} mahallasi "PASPORTI" </h2>
    <br>
    <br>

    <h3 align="center">
        Mahalla fuqarolar yig'ini xodimlari va jamoatchilik tuzilmalari to'g'risida ma'lumot
    </h3>

    <table class="table table-bordered text-center">

        <thead class="thead btn-info">
        <tr>
            <th scope="col" class="text-center">Lavozimlar</th>
            <th scope="col" class="text-center">F.I.SH</th>
            <th scope="col" class="text-center">Yashash manzili</th>
            <th scope="col" class="col-sm-2 text-center">Telefon raqami</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahalla->informations as $i)
            <tr>
                <td class="text-center"> {{ $i->position }} </td>
                <td class="text-center"> {{ $i->full_name }} </td>
                <td class="text-center"> {{ $i->address }} </td>
                <td class="text-center"> {{ $i->phone }} </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

    <h3 align="center">
        Aholining bandligi
    </h3>
    <table class="table table-bordered">
        <thead class="thead btn-info">
        <tr>
            <th scope="col" class="text-center">Ko'rsatkichlar</th>
            <th scope="col" class="text-center">Soni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahalla->employments as $i)
            <tr>
                <td class="text-center"> {{ $i->name }} </td>
                <td class="text-center"> {{ $i->count }} nafar</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <br>
    <br>
    <br>
    <br>
    <br>


    <h3 align="center">
        Aholining ijtimoiy holati
    </h3>

    <table class="table table-bordered">
        <thead class="thead btn-info">
        <tr>
            <th scope="col" class="text-center">Ko'rsatkichlar</th>
            <th scope="col" class="text-center">Soni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahalla->statuses as $i)
            <tr>
                <td class="text-center"> {{ $i->name }} </td>
                <td class="text-center"> {{ $i->count }} nafar</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>


    <h3 align="center">
        Qishloq xo'jaligi bilan bog'liq ko'rsatkichlar
    </h3>
    <table class="table table-bordered">
        <thead class="thead btn-info">
        <tr>
            <th scope="col" class="text-center">Ko'rsatkichlar</th>
            <th scope="col" class="text-center">Umumiy Soni</th>
            <th scope="col" class="text-center">Ayollar Soni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahalla->indicators as $i)
            <tr>
                <td class="text-center"> {{ $i->title }} </td>
                <td class="text-center"> {{ $i->count }} nafar</td>
                <td class="text-center"> {{ $i->w_count }} nafar</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>


    <h3 align="center">
        Qishloq xo'jaligi bilan bog'liq ko'rsatkichlar
    </h3>
    <table class="table table-bordered">
        <thead class="thead btn-info">
        <tr>
            <th scope="col" class="text-center">Ko'rsatkichlar</th>
            <th scope="col" class="text-center">Umumiy Soni</th>
            <th scope="col" class="text-center">Ayollar Soni</th>
            <th scope="col" class="text-center">Yoshlar Soni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahalla->environments as $i)
            <tr>
                <td class="text-center"> {{ $i->name }} </td>
                <td class="text-center"> {{ $i->count }} nafar</td>
                <td class="text-center"> {{ $i->w_count }} nafar</td>
                <td class="text-center"> {{ $i->y_count }} nafar</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <br>
    <br>
    <br>


</div>

</body>
</html>

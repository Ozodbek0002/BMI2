@extends('user.master')
@section('content')

    <div class="container"><br>


        <table class="table table-bordered">
            <h4 class="text-center"> Mahalla fuqarolar yig'ini xodimlari va jamoatchilik tuzilmalari to'g'risida
                ma'lumot </h4>
            <thead class="thead btn-info">
            <tr>
                <th scope="col" class="text-center">Lavozimlar</th>
                <th scope="col" class="text-center">F.I.SH</th>
                <th scope="col" class="text-center">Yashash manzili</th>
                <th scope="col" class="col-sm-2 text-center">Telefon raqami</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($mahalla->informations as $i)
                    <td class="text-center"> {{ $i->name }} </td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br>

    </div>

@endsection

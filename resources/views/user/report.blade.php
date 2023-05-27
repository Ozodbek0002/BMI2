@extends('user.master')
@section('content')

    <div class="container"><br>
        <br>

        <!--Pages start-->
        <div class="container">
            <div class="row">
            <span class="ml1 col">
                <span class="text-wrapper">
                  <h3 class="letters"> "PDF" shaklida yuklab olish uchun bosing !!! </h3>
                </span>
            </span>


                <button type="button" class="bi bi-box-arrow-in-right btn btn-danger col-4"><a
                        class="text-light text-uppercase" href="/"> Mahalla pasporti yig'ma jadvali </a>
                </button>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

                <script>// Wrap every letter in a span
                    var textWrapper = document.querySelector('.ml1 .letters');
                    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    anime.timeline({loop: true})
                        .add({
                            targets: '.ml1 .letter',
                            scale: [0.3, 1],
                            opacity: [0, 1],
                            translateZ: 0,
                            easing: "easeOutExpo",
                            duration: 600,
                            delay: (el, i) => 70 * (i + 1)
                        }).add({
                        targets: '.ml1 .line',
                        scaleX: [0, 1],
                        opacity: [0.5, 1],
                        easing: "easeOutExpo",
                        duration: 700,
                        offset: '-=875',
                        delay: (el, i, l) => 80 * (l - i)
                    }).add({
                        targets: '.ml1',
                        opacity: 0,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });
                </script>

            </div>
        </div>
        <!--pages end-->

        <br>
        <br>
        <br>

        <div class="align-items-center" style="text-align: center">
            <h1> {{ $mahalla->name }} mahalla passporti </h1>
        </div>

        <br>
        <br>
        <br>

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
                    <td class="text-center"> {{ $i->position }} </td>
                    <td class="text-center"> {{ $i->full_name }} </td>
                    <td class="text-center"> {{ $i->address }} </td>
                    <td class="text-center"> {{ $i->phone }} </td>
                @endforeach
            </tr>
            </tbody>
        </table>


        <br>
        <hr>
        <br>
        <br>
        <br>


        <table class="table table-bordered">
            <h4 class="text-center">
                Aholining bandligi
            </h4>
            <thead class="thead btn-info">
            <tr>
                <th scope="col" class="text-center">Ko'rsatkichlar</th>
                <th scope="col" class="text-center">Soni</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($mahalla->employments as $i)
                    <td class="text-center"> {{ $i->name }} </td>
                    <td class="text-center"> {{ $i->count }} nafar</td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br>
        <hr>
        <br>
        <br>
        <br>


        <table class="table table-bordered">
            <h4 class="text-center">
                Aholining ijtimoiy holati
            </h4>
            <thead class="thead btn-info">
            <tr>
                <th scope="col" class="text-center">Ko'rsatkichlar</th>
                <th scope="col" class="text-center">Soni</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($mahalla->statuses as $i)
                    <td class="text-center"> {{ $i->name }} </td>
                    <td class="text-center"> {{ $i->count }} nafar</td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br>
        <hr>
        <br>
        <br>
        <br>


        <table class="table table-bordered">
            <h4 class="text-center">
                Qishloq xo'jaligi bilan bog'liq ko'rsatkichlar
            </h4>
            <thead class="thead btn-info">
            <tr>
                <th scope="col" class="text-center">Ko'rsatkichlar</th>
                <th scope="col" class="text-center">Umumiy Soni</th>
                <th scope="col" class="text-center">Ayollar Soni</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($mahalla->indicators as $i)
                    <td class="text-center"> {{ $i->title }} </td>
                    <td class="text-center"> {{ $i->count }} nafar</td>
                    <td class="text-center"> {{ $i->w_count }} nafar</td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br>
        <hr>
        <br>
        <br>
        <br>


        <table class="table table-bordered">
            <h4 class="text-center">
                Qishloq xo'jaligi bilan bog'liq ko'rsatkichlar
            </h4>
            <thead class="thead btn-info">
            <tr>
                <th scope="col" class="text-center">Ko'rsatkichlar</th>
                <th scope="col" class="text-center">Umumiy Soni</th>
                <th scope="col" class="text-center">Ayollar Soni</th>
                <th scope="col" class="text-center">Yoshlar Soni</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($mahalla->environments as $i)
                    <td class="text-center"> {{ $i->name }} </td>
                    <td class="text-center"> {{ $i->count }} nafar</td>
                    <td class="text-center"> {{ $i->w_count }} nafar</td>
                    <td class="text-center"> {{ $i->y_count }} nafar</td>
                @endforeach
            </tr>
            </tbody>
        </table>
        <br>
        <hr>
        <br>


    </div>

@endsection

@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Ko`rsatgichlar </h1></div>

                    <div class="col-md-6">

                        <form action="{{ route('admin.SearchUsers') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Qidirish...">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>

                    </div>



                    <div class="col-md-3">
                        <a class="btn ">
                            <button data-bs-toggle="modal" data-bs-target="#addModal"
                                    type="button" class="btn btn-success  btn-sm">
                                <span class="btn-label">
                                    <i class="bx bx-add-to-queue"></i>
                                </span>
                            </button>
                            Ko`rsatgich qo'shish
                        </a>
                    </div>


                    {{--                        Add Modal--}}
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Yangi Bandlik </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <br>

                                <form action="{{route('admin.statuses.store')}}" method="POST"
                                      accept-charset="UTF-8"
                                      enctype="multipart/form-data">
                                    @csrf


                                    <br>
                                    {{--  Mahallas--}}
                                    <div class="form-group ">
                                        <label> Mahallasini tanlang </label>
                                        <select name="mahalla_id" id="selectedDepartment" class="form-control">

                                            @foreach($mahallas as $c)
                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach

                                        </select>
                                        @error('mahalla_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>


                                    <br>

                                    {{--Title--}}
                                    <div class="form-group ">
                                        <label for=""> Nomi </label>
                                        <input type="text" name="title" value="{{old('title')}}"
                                               class="form-control">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>


                                    {{--All Count--}}
                                    <div class="form-group ">
                                        <label for=""> Umumiy Soni </label>
                                        <input type="number" name="count" value="{{old('count')}}"
                                               class="form-control">
                                        @error('count')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>


                                    {{--Women Count--}}
                                    <div class="form-group ">
                                        <label for=""> Umumiy Soni </label>
                                        <input type="number" name="w_count" value="{{old('w_count')}}"
                                               class="form-control">
                                        @error('w_count')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <br>
                                    <br>

                                    <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                                    <input type="reset" class="btn btn-danger" value="Tozalash">


                                </form>


                            </div>

                        </div>
                    </div>



                </div>

                <hr>

                <div class="card-body">

                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Mahallasi </th>
                            <th class="" scope="col"> Nomi </th>
                            <th class="" scope="col"> Umumiy Soni </th>
                            <th class="" scope="col"> Ayollar Soni </th>
                            <th class="" scope="col"> Amallar </th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($indicators as $ind=>$indicator)
                            <tr>
                                <td class="col-1">{{($indicators->currentpage()-1)*($indicators->perpage())+$ind+1}}</td>

                                <td>{{ $indicator->mahalla->name  }}</td>

                                <td>{{ $indicator->title}}</td>

                                <td>{{ $indicator->count }}</td>

                                <td>{{ $indicator->w_count }}</td>


                                <td class="col-2">



                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$indicator->id}}"
                                            type="button" class="btn btn-warning  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-pen"></i>
                                                </span>
                                    </button>




                                    <a class="btn btn-warning btn-sm"
                                       href="{{ route('admin.indicators.edit',$indicator->id) }}">
                                            <span class="btn-label">
                                                <i class="bx bx-pen"></i>
                                            </span>
                                    </a>


                                    <button data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$indicator->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>


                                    {{--                                    Edit Modals--}}
                                    <div class="modal fade" id="editModal{{$indicator->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content container">


                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Ma'lumot
                                                        tahrirlang </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.statuses.update',$indicator->id)}}"
                                                      method="POST"
                                                      accept-charset="UTF-8" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')


                                                    <br>

                                                    {{--  Mahallas--}}
                                                    <div class="form-group ">
                                                        <label> Mahallasini tanlang </label>
                                                        <select name="mahalla_id" id="selectedDepartment"
                                                                class="form-control">

                                                            <option style="color: blue"
                                                                    value="{{$indicator->mahalla->id}}">{{$indicator->mahalla->name}}</option>

                                                            @foreach($mahallas as $c)
                                                                @if( $c->id != $indicator->mahalla->id )
                                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                        @error('mahalla_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    <br>


                                                    {{-- Name--}}
                                                    <div class="form-group ">
                                                        <label for=""> F.I.Sh </label>
                                                        <input type="text" name="name" value="{{ $indicator->name }}"
                                                               class="form-control">
                                                        @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <br>


                                                    <br>
                                                    {{--Count--}}

                                                    <div class="form-group ">
                                                        <label for=""> Raqami </label>
                                                        <input type="number" name="count"
                                                               value="{{ $indicator->count}}"
                                                               class="form-control">
                                                        @error('count')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                    <br>
                                                    <br>


                                                    <button type="submit" id="alert" class="btn btn-primary ">Saqlash
                                                    </button>
                                                    <input type="reset" class="btn btn-danger" value="Tozalash">


                                                </form>

                                            </div>
                                        </div>
                                    </div>



                                    {{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$indicator->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu Ko`rsatgichni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.indicators.destroy',$indicator->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Yopish
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">O'chirish</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($indicators->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $indicators->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




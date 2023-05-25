@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Aholi bandligi </h1></div>

                    <div class="col-md-6">

                        <form action="{{ route('admin.SearchEmployments') }}" method="post">
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
                            Bandlik qo'shish
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

                                <form action="{{route('admin.employments.store')}}" method="POST"
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

                                    {{--Name--}}
                                    <div class="form-group ">
                                        <label for=""> Nomi </label>
                                        <input type="text" name="name" value="{{old('name')}}"
                                               class="form-control">
                                        @error('name')
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
                            <th class="" scope="col"> Mahallasi</th>
                            <th class="" scope="col"> Nomi</th>
                            <th class="" scope="col"> Soni</th>
                            <th class="" scope="col"> Amallar</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($employments as $ind=>$employment)
                            <tr>
                                <td class="col-1">{{($employments->currentpage()-1)*($employments->perpage())+$ind+1}}</td>

                                <td>{{ $employment->mahalla->name  }}</td>

                                <td>{{ $employment->name  }}</td>

                                <td>{{ $employment->count  }}</td>

                                <td class="col-2">


                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$employment->id}}"
                                            type="button" class="btn btn-warning  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-pen"></i>
                                                </span>
                                    </button>


                                    <button data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$employment->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>


                                    {{--                                    Edit Modals--}}
                                    <div class="modal fade" id="editModal{{$employment->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content container">


                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Ma'lumot
                                                        tahrirlang </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.employments.update',$employment->id)}}"
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
                                                                    value="{{$employment->mahalla->id}}">{{$employment->mahalla->name}}</option>

                                                            @foreach($mahallas as $c)
                                                                @if( $c->id != $employment->mahalla->id )
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
                                                        <input type="text" name="name" value="{{ $employment->name }}"
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
                                                               value="{{ $employment->count}}"
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
                                    <div class="modal fade" id="deleteModal{{$employment->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu Bandlikni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.employments.destroy',$employment->id)}}"
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

                            @if ($employments->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $employments->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




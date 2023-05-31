@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Ma`lumotlar </h1></div>

                    <div class="col-md-6">

                        <form action="{{ route('admin.SearchInformation') }}" method="post">
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
                            Ma`lumot qo'shish
                        </a>
                    </div>


                    {{--                        Add Modal--}}
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Yangi Malumot </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <br>

                                <form action="{{route('admin.informations.store')}}" method="POST"
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

                                    {{--Position--}}
                                    <div class="form-group ">
                                        <label for=""> Lavozimi </label>
                                        <input type="text" name="position" value="{{old('position')}}"
                                               class="form-control">
                                        @error('position')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>

                                    {{--Full Name--}}
                                    <div class="form-group ">
                                        <label for=""> F.I.Sh </label>
                                        <input type="text" name="full_name" value="{{old('full_name')}}"
                                               class="form-control">
                                        @error('full_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>

                                    {{--Address--}}
                                    <div class="form-group ">
                                        <label for=""> Manzili </label>
                                        <input type="text" name="address" value="{{old('address')}}"
                                               class="form-control">
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <br>
                                    {{--Phone--}}

                                    <div class="form-group ">
                                        <label for=""> Raqami </label>
                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
                                        @error('phone')
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
                            <th class="" scope="col"> Lavozimi</th>
                            <th class="" scope="col"> F.I.SH</th>
                            <th class="" scope="col"> Mazili</th>
                            <th class="" scope="col"> Raqami</th>
                            <th class="" scope="col"> Amallar</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($informations as $ind=>$information)
                            <tr>
                                <td class="col-1">{{($informations->currentpage()-1)*($informations->perpage())+$ind+1}}</td>

                                <td>{{ $information->mahalla->name  }}</td>

                                <td>{{ $information->position}}</td>

                                <td>{{ $information->full_name }}</td>

                                <td>{{ $information->address }}</td>

                                <td>{{ $information->phone }}</td>


                                <td class="col-2">


                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$information->id}}"
                                            type="button" class="btn btn-warning  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-pen"></i>
                                                </span>
                                    </button>


                                    <button data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$information->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>


                                    {{--                                    Edit Modals--}}
                                    <div class="modal fade" id="editModal{{$information->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content container">


                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Ma'lumot
                                                        tahrirlang </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.informations.update',$information->id)}}"
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
                                                                    value="{{$information->mahalla->id}}">{{$information->mahalla->name}}</option>

                                                            @foreach($mahallas as $c)
                                                                @if( $c->id != $information->mahalla->id )
                                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                        @error('mahalla_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    <br>

                                                    {{--Position--}}
                                                    <div class="form-group ">
                                                        <label for=""> Lavozimi </label>
                                                        <input type="text" name="position"
                                                               value="{{ $information->position }}"
                                                               class="form-control">
                                                        @error('position')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <br>

                                                    {{--Full Name--}}
                                                    <div class="form-group ">
                                                        <label for=""> F.I.Sh </label>
                                                        <input type="text" name="full_name"
                                                               value="{{ $information->full_name }}"
                                                               class="form-control">
                                                        @error('full_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <br>

                                                    {{--Address--}}
                                                    <div class="form-group ">
                                                        <label for=""> Manzili </label>
                                                        <input type="text" name="address"
                                                               value="{{ $information->address}}"
                                                               class="form-control">
                                                        @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>


                                                    <br>
                                                    {{--Phone--}}

                                                    <div class="form-group ">
                                                        <label for=""> Raqami </label>
                                                        <input type="text" name="phone" value="{{ $information->phone}}"
                                                               class="form-control">
                                                        @error('phone')
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
                                    <div class="modal fade" id="deleteModal{{$information->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu Ma`lumotni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.informations.destroy',$information->id)}}"
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

                            @if ($informations->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $informations->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




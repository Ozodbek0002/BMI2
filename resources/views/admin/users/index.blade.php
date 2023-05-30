@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Hodimlar </h1></div>

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
                            Hodim qo'shish
                        </a>
                    </div>


                    {{--                        Add Modal--}}
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Yangi Hodim </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <br>

                                <form action="{{route('admin.users.store')}}" method="POST"
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

                                    {{--  Roles--}}
                                    <input type="hidden" name="role_id" value="2">


                                    {{-- Name--}}
                                    <div class="form-group ">
                                        <label for=""> F.I.Sh </label>
                                        <input type="text" name="name" value="{{old('name')}}"
                                               class="form-control">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>


                                    {{--Phone --}}
                                    <div class="form-group ">
                                        <label for="author">Telefon raqami</label>
                                        <input type="number" value="{{old('phone')}}" class="form-control" name="phone">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>


                                    {{--Email--}}
                                    <div class="form-group ">
                                        <label for=""> Email </label>
                                        <input type="email" name="email" value="{{old('email')}}"
                                               class="form-control">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>


                                    {{--                        Password--}}
                                    <div class="form-group ">
                                        <label for="author">Paroli</label>
                                        <input type="password" value="{{old('password')}}" class="form-control"
                                               name="password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>
                                    <br>

                                    <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                                    <input type="reset" class="btn btn-danger" value="Tozalash">

                                    <br>

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
                            <th class="" scope="col"> Ism Familiyasi</th>
                            <th class="" scope="col"> Lavozimi</th>
                            <th class="" scope="col"> Mahallasi</th>
                            <th class="" scope="col"> Telefon raqami</th>
                            <th class="" scope="col"> Amallar</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $ind=>$user)
                            <tr>
                                <td class="col-1">{{($users->currentpage()-1)*($users->perpage())+$ind+1}}</td>


                                <td>{{ $user->name  }}</td>

                                <td>{{ $user->role->name }}</td>

                                <td>
                                    {{ $user->mahalla->name }}
                                </td>

                                <td>{{ $user->phone }}</td>

                                <td>{{ $user->email }}</td>


                                <td class="col-2">


                                    @if($user->id != 1)

                                        <a class="btn btn-success btn-sm"
                                           href="{{ route('admin.users.show',$user->id) }}">
                                            <span class="btn-label">
                                                  <i class="bx bxs-show"></i>
                                            </span>
                                        </a>

                                    @endif


                                    @if( auth()->user()->id ==1 )

                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.users.edit',$user->id) }}">
                                            <span class="btn-label">
                                                <i class="bx bx-pen"></i>
                                            </span>
                                        </a>


                                        @if($user->id!=1)

                                            <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}"
                                                    type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                            </button>

                                        @endif

                                    @endif




                                    {{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu Hodimni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.users.destroy',$user->id)}}" method="post">
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

                            @if ($users->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $users->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




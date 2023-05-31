@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Ma'naviy muhit </h1></div>

                    <div class="col-md-6">

                        <form action="{{ route('admin.SearchEnvironments') }}" method="post">
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
                            Muhit qo'shish
                        </a>
                    </div>


                    {{--                        Add Modal--}}
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Yangi Muhit </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <br>

                                <form action="{{route('admin.environments.store')}}" method="POST"
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

                                    {{--Women Count--}}
                                    <div class="form-group ">
                                        <label for=""> Ayollar Soni </label>
                                        <input type="number" name="w_count" value="{{old('w_count')}}"
                                               class="form-control">
                                        @error('w_count')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                     <br>

                                    {{--Young Count--}}
                                    <div class="form-group ">
                                        <label for=""> Yoshlar Soni </label>
                                        <input type="number" name="y_count" value="{{old('y_count')}}"
                                               class="form-control">
                                        @error('y_count')
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
                            <th class="" scope="col"> Umumiy Soni</th>
                            <th class="" scope="col"> Ayollar Soni</th>
                            <th class="" scope="col"> Yoshlar Soni</th>
                            <th class="" scope="col"> Amallar</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($environments as $ind=>$environment)
                            <tr>
                                <td class="col-1">{{($environments->currentpage()-1)*($environments->perpage())+$ind+1}}</td>

                                <td>{{ $environment->mahalla->name  }}</td>

                                <td>{{ $environment->name }}</td>

                                <td>{{ $environment->count }}</td>

                                <td>{{ $environment->w_count }}</td>

                                <td>{{ $environment->y_count }}</td>


                                <td class="col-2">



                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$environment->id}}"
                                            type="button" class="btn btn-warning  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-pen"></i>
                                                </span>
                                    </button>


                                    <button data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$environment->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>


                                    {{-- Edit Modals--}}
                                    <div class="modal fade" id="editModal{{$environment->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content container">


                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Ma'lumot
                                                        tahrirlang </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.environments.update',$environment->id)}}"
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
                                                                    value="{{$environment->mahalla->id}}">{{$environment->mahalla->name}}</option>

                                                            @foreach($mahallas as $c)
                                                                @if( $c->id != $environment->mahalla->id )
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
                                                        <label for=""> Nomi </label>
                                                        <input type="text" name="name" value="{{ $environment->name }}"
                                                               class="form-control">
                                                        @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <br>

                                                    <br>
                                                    {{-- All Count--}}
                                                    <div class="form-group ">
                                                        <label for=""> Umumiy soni </label>
                                                        <input type="number" name="count"
                                                               value="{{ $environment->count}}"
                                                               class="form-control">
                                                        @error('count')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <br>
                                                    {{-- Women Count--}}
                                                    <div class="form-group ">
                                                        <label for=""> Ayollar soni </label>
                                                        <input type="number" name="w_count"
                                                               value="{{ $environment->w_count}}"
                                                               class="form-control">
                                                        @error('w_count')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <br>
                                                    {{-- Young Count--}}
                                                    <div class="form-group ">
                                                        <label for=""> Yoshlar soni </label>
                                                        <input type="number" name="y_count"
                                                               value="{{ $environment->y_count}}"
                                                               class="form-control">
                                                        @error('y_count')
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
                                    <div class="modal fade" id="deleteModal{{$environment->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu muhitni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.environments.destroy',$environment->id)}}"
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

                            @if ($environments->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $environments->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




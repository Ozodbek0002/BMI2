@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Mahallalar </h1></div>

                    <div class="col-md-6">

                        <form action="{{ route('admin.SearchMahallas') }}" method="post">
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
                            Mahalla qo'shish
                        </a>
                    </div>


                    {{--                        Add Modal--}}
                    <div class="modal fade" id="addModal" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content container">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Yangi Mahalla </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>

                                <form action="{{route('admin.mahallas.store')}}" method="POST" accept-charset="UTF-8"
                                      enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group ">
                                        <label for=""> Mahalla nomi </label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                        @error('name')
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
                            <th class="" scope="col"> Mahalla nomi</th>
                            <th class="" scope="col"> Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($mahallas as $ind=>$mahalla)
                            <tr>
                                <td class="col-1">{{($mahallas->currentpage()-1)*($mahallas->perpage())+$ind+1}}</td>

                                <td>{{ $mahalla->name  }}</td>


                                <td class="col-2">


{{--                                    @if($mahalla->id != 1)--}}

{{--                                        <a class="btn btn-success btn-sm"--}}
{{--                                           href="{{ route('admin.mahallas.show',$mahalla->id) }}">--}}
{{--                                            <span class="btn-label">--}}
{{--                                                  <i class="bx bxs-show"></i>--}}
{{--                                            </span>--}}
{{--                                        </a>--}}

{{--                                    @endif--}}



                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$mahalla->id}}"
                                            type="button" class="btn btn-warning  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-pen"></i>
                                                </span>
                                    </button>

                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$mahalla->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>

                                    {{--                                    Edit Modals--}}
                                    <div class="modal fade" id="editModal{{$mahalla->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel"> Mahalla
                                                        tahrirlang </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.mahallas.update',$mahalla->id)}}" method="POST"
                                                      accept-charset="UTF-8" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label for="title"> Mahalla nomi </label>
                                                        <input type="text" id="title" name="name"
                                                               value="{{$mahalla->name}}" class="form-control" required>
                                                    </div>


                                                    <br>

                                                    <button type="submit" id="alert" class="btn btn-primary ">Saqlash
                                                    </button>
                                                    <input type="reset" class="btn btn-danger" value="Tozalash">


                                                </form>

                                            </div>
                                        </div>
                                    </div>



                                    {{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$mahalla->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu Mahallani
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.mahallas.destroy',$mahalla->id)}}"
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

                            @if ($mahallas->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $mahallas->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




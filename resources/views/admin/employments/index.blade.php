@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Aholi bandligi </h1></div>

                    <div class="col-md-6">

                        {{--                        <form action="{{ route('admin.SearchUsers') }}" method="post">--}}
                        {{--                            @csrf--}}
                        {{--                            <div class="input-group">--}}
                        {{--                                <input type="text" name="search" class="form-control" placeholder="Qidirish...">--}}
                        {{--                                <button class="btn btn-primary" type="submit">--}}
                        {{--                                    <i class="fa fa-search"></i>--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}

                    </div>

                    <div class="col-md-3">
                        <a class="btn btn-primary" href="{{route('admin.employments.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Bandlik qo'shish
                        </a>
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


                                    <a class="btn btn-success btn-sm"
                                       href="{{ route('admin.employments.show',$employment->id) }}">
                                            <span class="btn-label">
                                                  <i class="bx bxs-show"></i>
                                            </span>
                                    </a>


                                    <a class="btn btn-warning btn-sm"
                                       href="{{ route('admin.employments.edit',$employment->id) }}">
                                            <span class="btn-label">
                                                <i class="bx bx-pen"></i>
                                            </span>
                                    </a>


                                    <button data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{$employment->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>


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




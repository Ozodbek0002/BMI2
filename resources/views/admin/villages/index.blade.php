@extends('Admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="row ">

                    <div class="col-md-3"><h1 class="card-title"> Qishloqlar </h1></div>

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
                        <a class="btn btn-primary" href="{{route('admin.villages.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qishloq qo'shish
                        </a>
                    </div>

                </div>

                <hr>

                <div class="card-body">

                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>

                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Qishloq nomi</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($villages as $ind=>$village)
                            <tr>
                                <td class="col-1">{{($villages->currentpage()-1)*($villages->perpage())+$ind+1}}</td>

                                <td>
                                    <a href="">
                                        {{ $village->name  }}

                                        {{ (  $village->mahallas()->count()   )  }}

                                    </a>
                                </td>


                                <td class="col-2">


                                    {{--                                    @if($village->id != 1)--}}

                                    {{--                                        <a class="btn btn-success btn-sm" href="{{ route('admin.villages.show',$village->id) }}">--}}
                                    {{--                                            <span class="btn-label">--}}
                                    {{--                                                  <i class="bx bxs-show"></i>--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </a>--}}

                                    {{--                                    @endif--}}


                                    <a class="btn btn-warning btn-sm"
                                       href="{{ route('admin.villages.edit',$village->id) }}">
                                            <span class="btn-label">
                                                <i class="bx bx-pen"></i>
                                            </span>
                                    </a>


                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{$village->id}}"
                                            type="button" class="btn btn-danger  btn-sm">
                                                <span class="btn-label">
                                                    <i class="bx bx-trash"></i>
                                                </span>
                                    </button>


                                    {{-- Delete  Modals--}}
                                    <div class="modal fade" id="deleteModal{{$village->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-3" id="exampleModalLabel">Haqiqatdan ham
                                                        ushbu Qishloqni
                                                        o'chirib tashlamoqchimisiz ?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <form action="{{route('admin.villages.destroy',$village->id)}}"
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

                            @if ($villages->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $villages->links() }}
                                </div>
                            @endif

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection




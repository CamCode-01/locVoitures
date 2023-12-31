@extends('layouts.appadmin')
@section('title')
Sliders
@endsection
{{Form::hidden('',$increment=1)}}
@section('contenu')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Sliders</h4>
        @if (Session::has('statut'))
        <div class="alert alert-success">
            {{ Session::get('statut') }}
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>Ordre #</th>
                                <th>Image</th>
                                <th>Description 1</th>
                                <th>Description 2</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                            <tr>
                                <td>{{$increment}}</td>
                                <td><img src="storage/slider_images/{{$slider->slider_image}}" alt=""></td>
                                <td>{{$slider->description1}}</td>
                                <td>{{$slider->description2}}</td>
                                <td>
                                    @if($slider->statut == 1)
                                    <label class="badge badge-success">Activé</label>
                                    @else()
                                    <label class="badge badge-danger">Désactivé</label>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-outline-primary"
                                        onclick="window.location='{{url('/edit_slider/'.$slider->id)}}'">Editer</button>
                                    <a href="{{url('/supprimerslider/'.$slider->id)}}" id="delete"><button
                                            class="btn btn-outline-danger">Supprimer</button></a>
                                    @if ($slider->statut==1)
                                    <button class="btn btn-outline-warning"
                                        onclick="window.location = '{{url('/desactiver_slider/'.$slider->id)}}'">Desactiver</button>

                                    @else
                                    <button class="btn btn-outline-success"
                                        onclick="window.location = '{{url('/activer_slider/'.$slider->id)}}'">Activer</button>

                                    @endif
                            </tr>
                            {{Form::hidden('',$increment=$increment+1)}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('backend/js/data-table.js')}}"></script>
@endsection
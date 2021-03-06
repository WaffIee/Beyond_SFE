@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="now-ui-icons users_single-02"> </i> liste des clients</h4>
        </div>

        {{-- <form action="{{ url('client/create')}}" method="POST">

        <button style="margin-left: 920px;margin-right:10px;"  type="submit" class="btn btn-success">Ajouter Un nouveau Client</button>

        </form> --}}

        <div class="pull-right">
            <a style="margin-right:10px;"   href="{{ url('client/create')}}" class="btn btn-success">                             <i class="now-ui-icons ui-1_simple-add"></i>
                Nouveau Client</a>


        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Ref</th>
                <th>Nom</th>
                {{-- <th>Prenom</th> --}}
                <th>Email</th>
                <th>Telephone</th>
                <th>Entrepsire</th>
                <th>Poste</th>
                <th>Date</th>
                <th>Action</th>

              </thead>
              <tbody>
                @foreach ($client as $client)

                <tr>
                    <td>{{ $client->id}}</td>
                    <td>{{ $client->nom}}</td>
                    {{-- <td>{{ $client->prenom}}</td> --}}
                    <td>{{ $client->email}}</td>
                    <td>{{ $client->telephone}}</td>
                    <td>{{ $client->entreprise}}</td>
                    <td>{{ $client->poste}}</td>
                    <td>{{ $client->created_at}}</td>

                    <td>

                        <form action="{{ url('client/'.$client->id )}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}

                            <a href="{{url('client/edit/'.$client->id)}}" class="btn btn-primary">Modifier</a><br><br>
                            <a href="{{url('clientInfo/'.$client->id)}}" class="btn btn-default"><i class="now-ui-icons travel_info"></i>details</a><br><br>

                            <button type="submit" class="btn btn-danger"><i class="now-ui-icons ui-1_simple-delete"></i>Supprimmer</button>

                        </form>
                    </td>


                </tr>
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

@endsection

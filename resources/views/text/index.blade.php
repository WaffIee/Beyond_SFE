@extends('layouts.sidebar')

                            <table class="table">
                                <head>
                                <tr>
                                    <th>Id</th>
                                    <th>Titre</th>
                                    <th>Theme</th>
                                    <th>Sous Theme</th>
                                    <th>fichier</th>
                                    <th>Temps</th>
                                    <th>Action</th>

                                </tr>
                                </head>
                             <body>

                                @foreach ($text as $text)

                                 <tr>
                                    <td>{{ $text->id}}</td>
                                    <td>{{ $text->titre}}</td>
                                    <td>{{ $text->Theme}}</td>
                                    <td>{{ $text->Sous_Theme}}</td>
                                    <td>{{ $text->file}}</td>
                                    <td>{{ $text->created_at}}</td>
                                    <td>

                                        <form action="{{ url('text/'.$text->id)}}" method="POST">
                                            {{-- {{ csrf_field() }}

                                            {{ method_field('DELETE')}} --}}

                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger">Supprimmer</button> <br><br>
                                            <button type="submit" class="btn btn-primary">Telecharger</button>


                                        </form>

                                    </td>

                                </tr>
                                @endforeach

                             </body>
                            </table>

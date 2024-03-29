@extends('layouts.app')

@section('content')
<h1 class="h1-responsive font-weight-bold wow text-center" data-wow-delay="0.3s">Your Pet List</h1>
</br>

@if($registerpets->isEmpty())
<h3 class="h1-responsive font-weight-bold wow text-center text-warning" data-wow-delay="0.3s">No Pets Are Currently Registered</h3>
</br>
 @endif
<div class="row row-no-gutters">
            <table class="center" class="table table-striped table-light">
                    <tr>
                        <th>Pet Name</th>
                        <th>Species</th>
                        <th>Breed</th>
                        <th>More Details</th>
                    </tr>
                <tbody>
                    @foreach($registerpets as $registerpet)
                    <tr>
                        <td>{{ $registerpet->pet_name }}</td>
                        <td>{{ $registerpet->species }}</td>
                        <td>{{ $registerpet->breed }}</td>
                        <td><a href="{{ route('registerpets.show',$registerpet->id) }}">More Information</a></td>
                    </tr>
                    @endforeach
                    @if($registerpets->isEmpty())
                    <tr>
                        <td>No Pets Registered</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            </div>
</br>
            <div class="wrapper">
            <button id="indexpetsbtn" class="btn btn-primary" onclick="window.location='{{ url('registerpets/create') }}'">Register More Pets</button></td>
            </div>


@endsection
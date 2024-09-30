@extends('user.sidebar')

@section('x-slot')

<table class="table lms_table_active">
    <thead>
        
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
       
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $customers)
        <tr>
            <th scope="row"><a href="#" class="question_content">{{$customers->id}}</a></th>
            <td>{{$customers->name}}</td>
            <td>{{$customers->email}}</td>

        </tr>
       @endforeach
    
    </tbody>
</table>

@endsection

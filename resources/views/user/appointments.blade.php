@extends('user.sidebar')

@section('x-slot')

<!-- Book Button at the top -->
<div class="mb-3">
    <a href="{{ route('user.book') }}"><button type="button" class="btn btn-primary">Book Appointment</button></a>
</div>

<table class="table lms_table_active">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><a href="#" class="question_content"> $customers->id </a></th>
            <td> $customers->name </td>
            <td> $customers->email </td>
        </tr>
    </tbody>
</table>

@endsection

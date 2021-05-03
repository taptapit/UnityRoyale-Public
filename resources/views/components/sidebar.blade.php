<div {{$attributes}}>
    <h3> This is my side bar {{$title}}</h3>
    <p>{{$email}}</p>

    @foreach ($users as $user)
        <p>{{ $user }}</p>
    @endforeach
</div>
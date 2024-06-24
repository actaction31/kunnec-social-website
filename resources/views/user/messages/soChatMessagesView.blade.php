@foreach($followProfiles as $followProfile)
    <li class="person" data-chat="person1">
        <div class="user">
            <img src="{{$followProfile->image}}" alt="Retail Admin">
            <span class="status busy"></span>
        </div>
        <p class="name-time">
            <span class="name">{{$followProfile->first_name}}</span>
            <span class="time">15/02/2019</span>
        </p>
    </li>
@endforeach
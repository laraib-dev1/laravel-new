@extends('layout.layout')
@section('title')
    Home
@endsection
@section('content')
      {{-- <x-input msg="User Login Successfully"></x-input>
      <x-input msg="M-Arham Waheed"></x-input> --}}

      <div class="grid grid-cols-4 mx-10 gap-5 mt-10">
        <x-input type="text" name="user_email" id="user_email" placeholder="Enter Your Email "/>
        <x-input type="text" name="user_email" id="user_email" placeholder="Enter Your Email "/>
        <x-input type="text" name="user_email" id="user_email" placeholder="Enter Your Email "/>
        <x-input type="text" name="user_email" id="user_email" placeholder="Enter Your Email "/>
      </div>
    <div class="content">
        <h1 class="head text-amber-700">Welcome to our Home Page</h1>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus eum, perspiciatis deleniti, id
            neque quos hic et cumque sint omnis, adipisci nam. Beatae mollitia nesciunt nisi molestias veniam earum atque
            architecto velit a ad totam fuga aperiam consequuntur porro iusto voluptatibus voluptatum, id commodi suscipit
            doloremque exercitationem dolor quis aspernatur hic? Excepturi modi rem cupiditate vero maiores ad consectetur
            harum? Quia assumenda, deserunt officia esse cum repellendus mollitia aut ea deleniti tempora. Ducimus iste
            inventore deserunt quis laborum, illum praesentium nostrum pariatur, obcaecati rem error quisquam facilis ipsum,
            dolorum delectus suscipit repudiandae commodi impedit. Deleniti molestias ex nam, tempore quos doloremque
            numquam cum rerum veniam similique est necessitatibus minima eligendi eos ipsam fugiat qui nulla sequi obcaecati
            iste repellendus fugit sit corrupti? Voluptatibus porro maiores nam consequuntur maxime explicabo in alias quos
            ipsam quidem autem sequi sunt ullam, magni corrupti, culpa laborum ut repellat molestiae sed soluta facere
            reiciendis quia? Numquam magnam nihil provident deleniti. Quod esse dolore sequi incidunt et adipisci magni.
            Obcaecati perspiciatis suscipit magnam quasi molestiae laborum! Dignissimos molestiae voluptates, doloribus
            perferendis eligendi animi voluptatem totam aspernatur fugiat! Dignissimos consectetur necessitatibus iure
            distinctio velit consequuntur modi reiciendis facere. Dignissimos totam ipsam similique nisi nemo aspernatur
            amet autem eveniet nihil ducimus voluptatum numquam enim recusandae, vel est sunt, voluptatem iusto ad, hic
            debitis quam atque dicta assumenda! Recusandae dolores eligendi expedita cum est nostrum, incidunt tempore
            obcaecati! Molestias adipisci debitis eos, sint necessitatibus illum quidem possimus ipsam, minus consequatur,
            odio consectetur? Placeat optio minima voluptate sequi necessitatibus iusto inventore quas aperiam et doloribus
            impedit aliquam natus nisi commodi vero aspernatur consectetur quasi doloremque eaque, nobis aut? Voluptate
            exercitationem sit, vitae nihil esse consequuntur voluptas deleniti neque praesentium dolorum atque, dolor
            quibusdam deserunt. Ipsa in, sint nisi iure, fugiat itaque est natus sit sed aspernatur, minima quidem ad quis.
        </p>
    </div>

    @php
        $fruits = ['Apple', 'Bnanana', 'Grapes', 'Mango', 'Pineapple'];
        $role = 'Editor';
        $age = 16;
        $active = true;
        $j = 1;
        $users = [
            ['name' => 'Ali', 'age' => 25],
            ['name' => 'Sara', 'age' => 22],
            ['name' => 'Zara', 'age' => 28]
        ];
        $persons = [
            (object) ['name' => 'Ali', 'age' => 25],
            (object) ['name' => 'Sara', 'age' => 22],
            (object) ['name' => 'Zara', 'age' => 28],
        ];
    @endphp

    {{-- For Loop --}}
    @for ($i = 0; $i < 5; $i++)
        <p>{{ $i }}. Hello, Laravel!</p>

        {{-- While loop --}}
    @endfor
    <br>
    @while ($j <= 5)
        <p>{{ $j }}.Lopping with while </p>
        @php $j++ @endphp
    @endwhile
    <br>

    {{-- foreach loop --}}
    @foreach ($persons as $person)
    <p>Name: {{ $person->name }}</p>
    <p>Age: {{ $person->age }}</p>
@endforeach
<br>
    @foreach ($users as $user)
        <p>Name: {{ $user['name'] }} </p>
        <p>Age: {{ $user['age'] }} </p>
    @endforeach <br>
    @foreach ($fruits as $index => $fruit)
        <p>{{ $index }}. {{ $fruit }}</p>
    @endforeach
    <br>

    @foreach ($fruits as $data)
        @if ($loop->odd)
            <p class="text-red-600 font-bold"> {{ $loop->iteration }} - {{ $data }}</p>
        @else
            <p class="text-green-500"> {{ $loop->iteration }} - {{ $data }}</p>
        @endif
    @endforeach
    {{--
    @if ($role == 'Admin')
    <p>Welcome, Admin!</p>
@elseif ($role == 'User')
    <p>Welcome, User!</p>
@else
    <p>Welcome, guest!</p>
@endif --}}

    {{-- <p>Welcome! {{ $role }}</p> --}}

    {{-- <h2>User Role Status</h2> --}}
    {{-- @if ($role == 'Admin' && $active)
<p>Admin access granted. Welcome!</p>
@if ($age >= 18)
<p>You are eligible for all Admin previllages.</p>
@else
<p>You are too young for full access.</p>
@endif
@elseif ($role == 'User' && $active)
<p>Welcome, valued user!</p>
@if ($age < 18)
<p>Parental consent may be required</p>
@endif
@elseif (!$active)
<p>Your account is inactive. Pleace Contact Support</p>
@else
<p>Unrecognized role and status</p>
@endif --}}

    {{-- switch statement --}}


    {{-- @switch($role)
    @case('Admin')
        <p>You have full access.</p>
        @break

    @case('Editor')
        <p>You can edit content but cannot manage users.</p>
        @break

    @case('Viewer')
        <p>You can only view content.</p>
        @break

    @default
        <p>Role not recognized. Please contact support.</p>
@endswitch --}}
@endsection

{{-- <?php ?> --}}

{{-- echo --}}


@section('js')
    <script>
        public

        function show() {
            $role = 'admin';
            return view('role', ['role' => $role]);
        }
    </script>
@endsection

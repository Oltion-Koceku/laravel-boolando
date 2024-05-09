@php
    $menus = [
        [
            'title' => 'Home'
        ],
        [
            'title' => 'About'
        ],
        [
            'title' => 'Info'
        ]
    ];
@endphp


<header>
    <div class="topbar">
      <div class="container d-flex box">
        <!-- nav -->
        <nav class="menu d-flex">
          <ul class="d-flex">
            @foreach ($menus as $menu)
                <li>
                    <a href="#">{{$menu['title']}}</a>
                </li>
            @endforeach

          </ul>
        </nav>
        <!-- /nav -->

        <!-- logo -->
        <div class="logo">
          <img src="{{ asset('/img/boolean-logo.png') }}" alt="logo">
        </div>
        <!-- /logo -->

        <!-- icon -->
        <nav class="menu social">
          <ul class="d-flex">
            <li>
              <a href="#"><i class="fa-regular fa-user"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-regular fa-heart"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
            </li>
          </ul>
        </nav>
        <!-- /icon -->

      </div>
    </div>
  </header>

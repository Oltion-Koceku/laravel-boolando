<header>
    <div class="topbar">
      <div class="container d-flex box">
        <!-- nav -->
        <nav class="menu d-flex">
          <ul class="d-flex">
            <li v-for="(item, index) in menu" :key="index">
              {{-- <a href="#">{{item.title}}</a> --}}
            </li>
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

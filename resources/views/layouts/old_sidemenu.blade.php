<div class="col-md-3">
    <div class="user-base-info">
        <div class="user-profile-avatar">
            <img src="{{ URL::asset('front/img/user-avatar.jpg')}}" alt="">
        </div>
        <div class="user-profile-name">
            <h4>{{ Auth::user()->name }}</h4>
        </div>
    </div>

    <a class="profile-menu-item" data-bs-toggle="collapse" href="#bimenameha" aria-expanded="false" aria-controls="bimenameha"><i>بیمه نامه ها</i></a>
    <div class="collapse profile-menu-child" id="bimenameha">
        <a class="profile-menu-item" href="{{ route('bimeh_add') }}" ><i>بیمه نامه جدید</i></a>
        <a class="profile-menu-item" href="{{ route('bimeh_all') }}" ><i>بیمه نامه های من</i></a>
        <a class="profile-menu-item" href="#" ><i>انواع بیمه نامه</i></a>
    </div>

    <a href="#" class="profile-menu-item"><i>اعلانات</i></a>
    <a class="profile-menu-item" data-bs-toggle="collapse" href="#tickets" aria-expanded="false" aria-controls="bimenameha"><i>تیکت</i></a>
    <div class="collapse profile-menu-child" id="tickets">
        <a class="profile-menu-item" href="#" ><i>تیکت جدید</i></a>
        <a class="profile-menu-item" href="#" ><i>بایگانی تیکت ها</i></a>
    </div>
    <a href="#" class="profile-menu-item"><i>تنظیمات</i></a>
</div>

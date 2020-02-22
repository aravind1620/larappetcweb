<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

{{--  --}}
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'manageofflinetest') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#managetest" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Manage Tests') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="managetest">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'manageonlinetest' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('manage_online_test')}}">
                <i class="material-icons">
                  queue_play_next
                  </i>
                <p>{{ __('Manage Online Test') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'manageofflinetest' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('manage_offline_test')}}">
                <i class="material-icons">
                  assignment
                  </i>
                <p>{{ __('Manage Offline Tests') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
{{--  --}}

      <li class="nav-item{{ $activePage == 'test_reports' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('test_reports')}}">
          <i class="material-icons">
            announcement
            </i>
          <p>{{ __('Test Reports') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'managestudents' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('manage_students')}}">
          <i class="material-icons">
            people
            </i>
          <p>{{ __('Manage Students') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'managecourse&batch' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('manage_course_batch')}}">
          <i class="material-icons">
            chrome_reader_mode
            </i>
          <p>{{ __('Manage Course & Batch') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'syllabus&synopsis' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('syllabus_synopsis')}}">
          <i class="material-icons">
            book
            </i>
          <p>{{ __('Syllabus & Synopsis') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'questions' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('questions')}}">
          <i class="material-icons">
            question_answer
            </i>
          <p>{{ __('Questions') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'managefaculty' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('manage_faculty')}}">
          <i class="material-icons">
            people_outline
            </i>
          <p>{{ __('Manage Faculty') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'instituteprofile' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('institute_profile')}}">
          <i class="material-icons">
            home
            </i>
          <p>{{ __('Institute Profile') }}</p>
        </a>
      </li>
      {{--  --}}

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      



{{--       <li class="nav-item{{ $activePage == 'sample' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('sample')}}">
          <i class="material-icons">language</i>
          <p>{{ __('Manage Online Test') }}</p>
        </a>
      </li> --}}
{{--       <li class="nav-item{{ $activePage == 'managetest' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('manage-online-test') }}">
          <i class="material-icons">language</i>
          <p>{{ __('Manage Online Test') }}</p>
        </a>
      </li> --}}
{{--       <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upgrade') }}">
          <i class="material-icons">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar">
                <div class="cnt-ul">
                    <ul>
                        <li>
                            <div class="ico aprt"></div><a href="{{ route('admin.apartments.index') }}">Dashboard</a>
                        </li>
                        <li>
                            <div class="ico msg"></div><a href="#">Messaggi</a>
                        </li>
                        <li>
                            <div class="ico ads"></div><a href="#">Sponsorizzate</a>
                        </li>
                        <li>
                            <div class="ico stcs"></div><a href="#">Statistiche</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <nav class="col-sd-2 col-md-2 d-md-block  sidebar py-4 nav-sidebar-home">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item  ">
                            <a class="nav-link active text-left d-flex align-items-center  "
                                href="{{ route('admin.apartments.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Appartamenti</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-1 text-left d-flex align-items-center " href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span>Sponsor</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link ml-1 text-left d-flex align-items-center " href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Messaggi</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-left  d-flex align-items-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="4 7 4 4 20 4 20 7"></polyline>
                                    <line x1="9" y1="20" x2="15" y2="20"></line>
                                    <line x1="12" y1="4" x2="12" y2="20"></line>
                                </svg>
                                <span> Statistiche</span>
                            </a>
                        </li>
                    </ul>​
                </div>
            </nav> --}}​
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>
@endsection

</html>

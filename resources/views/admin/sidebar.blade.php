<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                    width="25"
                    viewBox="0 0 25 42"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                        id="path-1"
                    ></path>
                    <path
                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                        id="path-3"
                    ></path>
                    <path
                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                        id="path-4"
                    ></path>
                    <path
                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                        id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                            id="Triangle"
                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"> Admin Panel </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <hr>


    <ul class="menu-inner py-1">
        <!-- Dashboard -->

        <li class="menu-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-line-chart"></i>
                <div data-i18n="Analytics"> Asosiy bo'lim  </div>
            </a>
        </li>

        @if (Auth::user()->role_id == 1)


         <li class="menu-item {{ Route::is('admin.mahallas') ? 'active' : '' }}">
                <a href="{{route('admin.mahallas')}}" class="menu-link ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M0 21V10l7.5-5l7.5 5v11h-5v-7H5v7H0M24 2v19h-7V8.93l-1-.66V6h-2v.93l-4-2.66V2h14m-3 12h-2v2h2v-2m0-4h-2v2h2v-2m0-4h-2v2h2V6Z"/></svg>
                    <div data-i18n="Tables"> Mahallalar </div>
                </a>
            </li>



            <li class="menu-item {{ Route::is('admin.users') ? 'active' : '' }}">
                <a href="{{route('admin.users')}}" class="menu-link ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 5a3.5 3.5 0 0 0-3.5 3.5A3.5 3.5 0 0 0 12 12a3.5 3.5 0 0 0 3.5-3.5A3.5 3.5 0 0 0 12 5m0 2a1.5 1.5 0 0 1 1.5 1.5A1.5 1.5 0 0 1 12 10a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 12 7M5.5 8A2.5 2.5 0 0 0 3 10.5c0 .94.53 1.75 1.29 2.18c.36.2.77.32 1.21.32c.44 0 .85-.12 1.21-.32c.37-.21.68-.51.91-.87A5.42 5.42 0 0 1 6.5 8.5v-.28c-.3-.14-.64-.22-1-.22m13 0c-.36 0-.7.08-1 .22v.28c0 1.2-.39 2.36-1.12 3.31c.12.19.25.34.4.49a2.482 2.482 0 0 0 1.72.7c.44 0 .85-.12 1.21-.32c.76-.43 1.29-1.24 1.29-2.18A2.5 2.5 0 0 0 18.5 8M12 14c-2.34 0-7 1.17-7 3.5V19h14v-1.5c0-2.33-4.66-3.5-7-3.5m-7.29.55C2.78 14.78 0 15.76 0 17.5V19h3v-1.93c0-1.01.69-1.85 1.71-2.52m14.58 0c1.02.67 1.71 1.51 1.71 2.52V19h3v-1.5c0-1.74-2.78-2.72-4.71-2.95M12 16c1.53 0 3.24.5 4.23 1H7.77c.99-.5 2.7-1 4.23-1Z"/></svg>
                    <div data-i18n="Tables"> Hodimlar </div>
                </a>
            </li>


        @endif


        <li class="menu-item {{ Route::is('admin.informations') ? 'active' : '' }}">
            <a href="{{route('admin.informations')}}" class="menu-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16 0H8C6.9 0 6 .9 6 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6l-6-6m4 18H8V2h7v5h5v11M4 4v18h16v2H4c-1.1 0-2-.9-2-2V4h2m6 6v2h8v-2h-8m0 4v2h5v-2h-5Z"/></svg>
                <div data-i18n="Tables">  MFY hodimlari haqida  </div>
            </a>
        </li>


        <li class="menu-item {{ Route::is('admin.employments') ? 'active' : '' }}">
            <a href="{{route('admin.employments')}}" class="menu-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 6c.58 0 1.05.2 1.42.59c.38.41.58.86.58 1.41v11c0 .55-.2 1-.58 1.41c-.37.39-.84.59-1.42.59H4c-.58 0-1.05-.2-1.42-.59C2.2 20 2 19.55 2 19V8c0-.55.2-1 .58-1.41C2.95 6.2 3.42 6 4 6h4V4c0-.58.2-1.05.58-1.42C8.95 2.2 9.42 2 10 2h4c.58 0 1.05.2 1.42.58c.38.37.58.84.58 1.42v2h4M4 8v11h16V8H4m10-2V4h-4v2h4Z"/></svg>
                <div data-i18n="Tables"> Aholining bandligi </div>
            </a>
        </li>


        <li class="menu-item {{ Route::is('admin.statuses') ? 'active' : '' }}">
            <a href="{{route('admin.statuses')}}" class="menu-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 2v3.5c1.1 0 2 1.12 2 2.5s-.9 2.5-2 2.5v3c1.1 0 2 1.12 2 2.5s-.9 2.5-2 2.5V22h3.5c0-1.1 1.12-2 2.5-2s2.5.9 2.5 2h3c0-1.1 1.12-2 2.5-2s2.5.9 2.5 2H22v-3.5c-1.1 0-2-1.12-2-2.5s.9-2.5 2-2.5v-3c-1.1 0-2-1.12-2-2.5s.9-2.5 2-2.5V2h-3.5c0 1.1-1.12 2-2.5 2s-2.5-.9-2.5-2h-3c0 1.1-1.12 2-2.5 2s-2.5-.9-2.5-2H2m4 4h12v12H6V6m3 1a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m8 3l-3 3l-2-1l-5 5h10v-7Z"/></svg>
                <div data-i18n="Tables"> Aholining ijtimoiy holati </div>
            </a>
        </li>


         <li class="menu-item {{ Route::is('admin.indicators') ? 'active' : '' }}">
            <a href="{{route('admin.indicators')}}" class="menu-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16.5 11L13 7.5l1.4-1.4l2.1 2.1L20.7 4l1.4 1.4l-5.6 5.6M11 7H2v2h9V7m10 6.4L19.6 12L17 14.6L14.4 12L13 13.4l2.6 2.6l-2.6 2.6l1.4 1.4l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6l2.6-2.6M11 15H2v2h9v-2Z"/></svg>
                <div data-i18n="Tables"> Demografik ko'rsatkichlari </div>
            </a>
        </li>

         <li class="menu-item {{ Route::is('admin.environments') ? 'active' : '' }}">
            <a href="{{route('admin.environments')}}" class="menu-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21 5c-1.11-.35-2.33-.5-3.5-.5c-1.95 0-4.05.4-5.5 1.5c-1.45-1.1-3.55-1.5-5.5-1.5c-1.95 0-4.05.4-5.5 1.5v14.65c0 .25.25.5.5.5c.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5c1.35-.85 3.8-1.5 5.5-1.5c1.65 0 3.35.3 4.75 1.05c.1.05.15.05.25.05c.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1m0 13.5c-1.1-.35-2.3-.5-3.5-.5c-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5c1.2 0 2.4.15 3.5.5v11.5Z"/></svg>
                <div data-i18n="Tables"> Ijtimoiy ma'naviy muhiti </div>
            </a>
        </li>















    </ul>

</aside>

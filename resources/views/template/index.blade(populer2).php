 @extends('template.template')

@section('custom_style')

     <style>
    .market-btn {
    display: inline-block;
    padding: 0.3125rem 0.875rem;
    padding-left: 2.8125rem;
    -webkit-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    border: 1px solid #e7e7e7;
    background-position: center left 0.75rem;
    background-color: #fff;
    background-size: 1.5rem 1.5rem;
    background-repeat: no-repeat;
    text-decoration: none;
}
.market-btn .market-button-title {
    display: block;
    color: #222;
    font-size: 1.125rem;
}
.market-btn .market-button-subtitle {
    display: block;
    margin-bottom: -0.25rem;
    color: #888;
    font-size: 0.75rem;
}
.market-btn:hover {
    background-color: #f7f7f7;
    text-decoration: none;
}
.apple-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjMmUyZTJlIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiMyZTJlMmUiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.google-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzVDREFERDsiIHBvaW50cz0iMjkuNTMsMCAyOS41MywyNTEuNTA5IDI5LjUzLDUxMiAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNCREVDQzQ7IiBwb2ludHM9IjM2OS4wNjcsMTgwLjU0NyAyNjIuMTc1LDExOS40NjcgMjkuNTMsMCAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNEQzY4QTE7IiBwb2ludHM9IjI5LjUzLDUxMiAyOS41Myw1MTIgMjYyLjE3NSwzODMuNTUxIDM2OS4wNjcsMzIyLjQ3IDI5OS4wMDQsMjUxLjUwOSAiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQ0E5NjsiIGQ9Ik0zNjkuMDY3LDE4MC41NDdsLTcwLjA2Myw3MC45NjFsNzAuMDYzLDcwLjk2MWwxMDguNjg4LTYyLjg3N2M2LjI4OC0zLjU5Myw2LjI4OC0xMS42NzcsMC0xNS4yNyAgTDM2OS4wNjcsMTgwLjU0N3oiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.market-btn-light {
    border-color: rgba(255, 255, 255, 0.14);
    background-color: rgba(0, 0, 0, 0);
}
.market-btn-light .market-button-title {
    color: #fff;
}
.market-btn-light .market-button-subtitle {
    color: rgba(255, 255, 255, 0.6);
}
.market-btn-light:hover {
    background-color: rgba(255, 255, 255, 0.06);
}
.market-btn-light.apple-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}

   </style>
<style>
    .card  {
     border:  -100vh solid #000 !important;
     background-color:  transparent!important;
 }
 .bottom-6  {
     bottom:  3rem!important;
 }
 .absolute  {
     position:  absolute!important;
 }
 .category ul li img,  .search button  {
     margin-right:  4px;
 }
 .category ul li img .row-games img  {
     margin-top:  -5px;
     filter:  grayscale(100%);
 }
 .category ul,  .list-style-none  {
     list-style:  none;
 }
 .category ul  {
     padding:  0;
     margin:  0;
 }
 .category ul li  {
     float:  left;
     padding-right:  24px;
     margin-bottom:  12px;
 }
 .category ul li div  {
     color:  #fff;
     cursor:  pointer;
 }
 .category ul li div:hover,  .category ul li div:hover img,  .category ul li.active div,  .category ul li.active div img  {
     color:  #FEC832;
     filter:  grayscale(0);
 }
 .text-kbrstore {
     color:  var(--warna_2);
 }
 .clip-overlay  {
     clip-path:  polygon(0 48%,  9% 48%,  18% 65%,  27% 49%,  36% 72%,  45% 58%,  55% 70%,  64% 58%,  73% 86%,  82% 48%,  91% 63%,  100% 70%,  100% calc(100% + 1px),  0 calc(100% + 1px));
     -webkit-clip-path:  polygon(0 48%,  9% 48%,  18% 65%,  27% 49%,  36% 72%,  45% 58%,  55% 70%,  64% 58%,  73% 86%,  82% 48%,  91% 63%,  100% 70%,  100% calc(100% + 1px),  0 calc(100% + 1px));
     background-color:  #7367F0;
     width:  100%;
     height:  25px;
     margin-top:  -21px !important;
 }
 .clip-path  {
     display:  flex;
     padding:  0;
     margin-top:  -32px;
     width:  100%;
     height:  35px;
     background-color:  #ebe9f1;
     clip-path:  clip-path: polygon(0 48%,  9% 48%,  18% 65%,  27% 49%,  36% 72%,  45% 58%,  55% 70%,  64% 58%,  73% 86%,  82% 48%,  91% 63%,  100% 70%,  100% calc(100% + 1px),  0 calc(100% + 1px));
     ;
 }
 .clip-game  {
     margin-top:  -50px !important;
     background-color:  var(--warna_1) !important;
     display:  flex;
     padding:  0;
     margin-top:  -39px;
     width:  100%;
     height:  40px;
     clip-path:  polygon(0 48%, 9% 48%, 18% 65%, 27% 49%, 36% 72%, 45% 58%, 55% 70%, 64% 58%, 73% 86%, 82% 48%, 91% 63%, 100% 70%, 100% calc(100% + 1px), 0 calc(100% + 1px));
 }
 .foo-img  {
     width:  65px;
     height:  65px;
     background:  #fff;
     text-align:  center;
     border-radius:  50%;
     line-height:  65px;
     float:  left;
     margin-right:  15px;
 }
 .fo-end a  {
     margin:  0 3px;
 }
 @media  only screen and (max-width: 600px)  {
     .fo-end  {
     text-align:  center;
 }
 .fo-end span  {
     margin-bottom:  8px;
     display:  block;
 }
 .fo-end div  {
     margin-top:  5px;
     display:  block !important;
     float:  none !important;
 }
 .fo-end div img  {
     max-width:  150px !important;
 }
 .fo-xs2  {
     padding-bottom:  20px;
     border-bottom:  1px dotted #7367F0;
 }
 }
 .mobile {
    backdrop-filter: blur( 1px);
    border-radius: 10px 10px 10px 10px;
    height: 60px;
    font-weigth: bold;
    padding: 20px;
    --tw-gradient-from: #1f2937;
    --tw-gradient-to: rgba(31, 41, 55, 0);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    background-image: linear-gradient(to top, var(--tw-gradient-stops));
}
 .bg-primary  {
     background-color:  var(--warna_2)!important;
 }
 .nav-pills  {
     background: ;
     border-radius:  .25rem;
     padding:  6px 2px;
 }
 .nav-pills .nav-link.active,  .nav-pills .show>.nav-link  {
     background-color:  var(--warna_2);
     color:  #fff;
 }
 @media (max-width: 576px)  {
     .nav-pills .nav-link.active,  .nav-pills .show>.nav-link background-color:  var(--warna_2);
     color:  #fff;
 }
 .nav  {
     --bs-nav-link-padding-x:  1rem;
     --bs-nav-link-padding-y:  0.5rem;
     --bs-nav-link-font-weight:  ;
     --bs-nav-link-color:  #283046;
     --bs-nav-link-hover-color:  var(--bs-link-hover-color);
     --bs-nav-link-disabled-color:  var(--bs-secondary-color);
     display:  flex;
     flex-wrap:  wrap;
     padding-left:  0;
     margin-bottom:  0;
     list-style:  none;
 }
 
.modal-enternity {
    display: flex;
    flex-shrink: 0;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * .5);
    background-color: var(--bs-modal-footer-bg);
    border-bottom-right-radius: var(--bs-modal-inner-border-radius);
    border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.btn-group-sm>.btn, .btn-sm {
    --bs-btn-padding-y: 0.35rem;
    --bs-btn-padding-x: 1.50rem;
    --bs-btn-font-size: 0.875rem;
    --bs-btn-border-radius: 0.25rem;
}
.btn-closex {
    --bs-btn-close-color: #dc3545;
    --bs-btn-close-bg: url(
    "data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
    --bs-btn-close-opacity: 0.5;
    --bs-btn-close-hover-opacity: 0.75;
    --bs-btn-close-focus-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    --bs-btn-close-focus-opacity: 1;
    --bs-btn-close-disabled-opacity: 0.25;
    --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
    box-sizing: content-box;
    width: 1em;
    height: 1em;
    padding: .25em .25em;
    color: #ffffff;
    background: white var(--bs-btn-close-bg) center/1em auto no-repeat;
    border: 0;
    border-radius: .375rem;
    opacity: var(--bs-btn-close-opacity);
}
.modal-header .btn-closex {
    padding: calc(var(--bs-modal-header-padding-y) * .5) calc(var(--bs-modal-header-padding-x) * .5);
    margin: calc(-.5 * var(--bs-modal-header-padding-y)) calc(-.5 * var(--bs-modal-header-padding-x)) calc(-.5 * var(--bs-modal-header-padding-y)) auto;
} 

.c-padding {
    padding-left: 20px;
}

 .ca-title {
        margin-left: 50px;
        font-weight: bold;
    }

    .h4,
    h4 {
        font-size: 1.286rem;
    }

    .ca-title:before {
        content: ' ';
        background: var(--colorEnternity_2);
        width: 34px;
        height: 9px;
        display: block;
        position: absolute;
        border-radius: 40px;
        margin-top: 5px;
        margin-left: -45px;
    }
</style>
<style>
.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: .5rem 1rem;
   background-color: #0d6efd
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out
}

@media(prefers-reduced-motion:reduce) {
    .nav-link {
        transition: none
    }
}

.nav-link:hover,.nav-link:focus {
    /* color: #0a58ca */
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default
}
    .nav-pills .nav-link {
    background: 0 0;
    border: 0;
    border-radius: .25rem
}

.nav-pills .nav-link.active,.nav-pills .show>.nav-link {
    color: #fff;
     background-color: #0d6efd 
}

.nav-fill>.nav-link,.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center
}

.nav-justified>.nav-link,.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center
}

.nav-fill .nav-item .nav-link,.nav-justified .nav-item .nav-link {
    width: 100%
}

.horitab-scroll {
            display: flex;
            flex-wrap: nowrap;
            /* padding-bottom: 1.5rem; */
            padding-left: 0;
            margin-block: 0;
            /* overflow-x: auto; */
            list-style: none;
            text-align: center;
            white-space: nowrap;
            overflow: auto;
        }
        
        .me-1 {
    margin-right: .25rem!important
}

 .btn-category {
        color: #ffffff !important;
        background-color:  var(--warna_2) !important;
    }
    .btn-category:hover {
        color: #ffffff !important;
        background-color: #566D74 !important;
    }
    .btn-category.active {
        color: #ffffff !important;
        background-color: #255462 !important;
    }
        .horitab-scroll {
            display: flex;
            flex-wrap: nowrap;
            /* padding-bottom: 1.5rem; */
            padding-left: 0;
            margin-block: 0;
            /* overflow-x: auto; */
            list-style: none;
            text-align: center;
            white-space: nowrap;
            overflow: auto;
        }
        
       .btn-lg,.btn-group-lg>.btn {
    padding: .5rem 1rem;
    font-size: 1.125rem;
    border-radius: .3rem
}

}

.ca-title {
    margin-left: 50px;
    font-weight: bold;
}
.ca-title:before {
    content: ' ';
    background: var(--warna_2) !important;
    width: 34px;
    height: 9px;
    display: block;
    position: absolute;
    border-radius: 40px;
    margin-top: 5px;
    margin-left: -45px;
}
</style>

@endsection


@section('content')
<div class="content-body" style="background-color: rgba(60,26,111,0.77);">
            <div class="swiper-container mt-2 mb-2">
              <div class="swiper-wrapper" id="swiper">
              	@foreach($banner as $data)
                   <div class="swiper-slide">
                    <img src="{{ $data->path }}">
                </div>
                @endforeach
                              </div>
            </div>
           <!-- open navigasi -->
          <div class="col-sm mt-3">
<ul class="nav nav-pills justify-content-center horitab-scroll" id="myTab" role="tablist">
 <li class="nav-item me-1" role="presentation">
<button class="btn-lg btn-category nav-link active" id="li-all" data-bs-toggle="tab" data-bs-target="#topup" type="button" role="tab" aria-controls="game" aria-selected="true" onclick="load_games('all');"><small>ALL</small></button>
</li>
<li class="nav-item me-1" role="presentation">
<button class="btn-lg btn-category nav-link " id="li-topup-pulsa" data-bs-toggle="tab" data-bs-target="#pulsa" type="button" role="tab" aria-controls="pulsa" aria-selected="true" onclick="load_games('topup-pulsa');"><small>PULSA</small></button>
</li>
<li class="nav-item me-1" role="presentation">
<button class="btn-lg btn-category nav-link " id="li-topup-emoney" data-bs-toggle="tab" data-bs-target="#e-money" type="button" role="tab" aria-controls="emoney" aria-selected="true" onclick="load_games('topup-emoney');"><small>E-WALLET</small></button>
</li>
<li class="nav-item me-1" role="presentation">
<button class="btn-lg btn-category nav-link " id="li-topup-voucher" data-bs-toggle="tab" data-bs-target="#voucher" type="button" role="tab" aria-controls="voucher" aria-selected="true" onclick="load_games('topup-voucher');"><small>VOUCHER</small></button>
</li>
<li class="nav-item me-1" role="presentation">
<button class="btn-lg btn-category nav-link " id="li-topup-streamingapp" data-bs-toggle="tab" data-bs-target="#streamingapp" type="button" role="tab" aria-controls="streamingapp" aria-selected="true" onclick="load_games('topup-streamingapp');"><small>LAINNYA</small></button>
</li>
</ul>
</div>
    <!--end navigasi-->
         <div class="row-games mt-5" id="category-topup-games">
            <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore ca-title" style="font-size: 1.2rem;">GAME POPULER</h4>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "game")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                          
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>        
            </div>
            <div class="row-games mt-5" id="category-topup-pulsa">
             <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore ca-title" style="font-size: 1.2rem;">TOPUP PULSA</h4>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "pulsa")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                           
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>        
            </div>
            <div class="row-games mt-5" id="category-topup-emoney">
             <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore ca-title" style="font-size: 1.2rem;">TOPUP E-MONEY</h4>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "e-money")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                        
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>
            </div>
            
           <!--tambahan vocher-->
                 <div class="row-games mt-5" id="category-topup-voucher">
             <section class="px-2" style="">
                 <h4 class="mb-2 text-kbrstore ca-title" style="font-weight: bold; font-size: 1.2rem;">VOUCHER GAME</h4>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "voucher")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                          
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>
        
            </div>
            <!--tambahan straming-->
             <div class="row-games mt-5" id="category-topup-streamingapp">
            <section class="px-2" style="">
                 <h4 class="mb-2 text-kbrstore ca-title" style="font-weight: bold; font-size: 1.2rem;">LAINNYA</h4>
               
                <div class="product row mt-4">
                    
                   @foreach($kategori as $category)
                    
                    @if($category->tipe == "streamingapp")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                           
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>
            <!--end-->
        </div>    
        <!--tambahan pop up-->
         <!--  Modal content for the above example -->
                     <div class="content">
    <div class="modal fade animated bounceIn" id="popup" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-white-custom txt-white">
                <h5 class="modal-title" style="color:#fff">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i> Informasi
                </h5>
                <button type="button" class="btn-closex color-white " data-bs-dismiss="modal" aria-label="Close" onclick="disablePopup()"></button>
            </div>
            <div class="modal-body bg-payment">
                <!--<img src="#" class="img-fluid justify-content-center shadow mb-3" style="width: 100%; height: auto; border-radius: 5px;" alt="Entershoply">-->
                <img src='{{ isset($popup->path) ? $popup->path : "" }}' width="100%" class="img-fluid">
                <br><br />
                <p>Hallo Pelanggan <b class="color-notif">{{ ENV('APP_NAME') }}</b>
                </p>
                <h6 class="center fw-16">{!! isset($popup->deskripsi) ? $popup->deskripsi : "<p class='text-center'>".ENV("APP_NAME")."</p>" !!}</h6>
            </div>
            
              <div class="mb-1 row">
                    <div class="col-6 mt-2 c-padding">
                        <input type="checkbox" class="form-check-input" id="dontShow">&nbsp;
                        <label class="form-check-label text-danger" for="customCheck1">Don't show again</label> 
                    </div>
                    <div class="modal-enternity bg-payment col-6 mt-1">
                        <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal" onclick="disablePopup()">Accept</button>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
        </div>  
        

@push('custom_script')
    
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
      <script type="text/javascript">
                                var cookie = document
                                    .cookie
                                    .split("; ");

                                if (cookie.length < 2) {
                                    $(document).ready(function () {
                                        $("#popup").modal("show");

                                    })
                                }

                                function disablePopup() {
                                    var checkBox = document.getElementById("dontShow");
                                    var date = new Date();
                                    date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));

                                    if (checkBox.checked) {
                                        document.cookie = "popup=0; expires=" + date.toGMTString();
                                    }
                                }
                            </script>
<script>
function load_games(category) {
    $(".li-category").removeClass("active");
    $("#li-" + category).addClass("active");
    if (category == "all") {
        $(".row-games").removeClass("d-none");
    } else {
        $(".row-games").addClass("d-none");
        $("#category-" + category).removeClass("d-none");
    }
}
$("#games-populer").owlCarousel({ loop: true, margin: 10, autoplay: true, autoplayTimeout: 3000, responsive: { 0: { items: 1 }, 600: { items: 1 }, 1000: { items: 1 } } });
</script>
<script>
var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  spaceBetween: 1,
  slidesPerView: 'auto',
  coverflow: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows : true
  },
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

</script>

<script>
            $('.metode-top').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                responsive:{
                    0:{
                        items:3
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });
            $('.metode-bottom').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                rtl: true,
                responsive:{
                    0:{
                        items:3
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });

            $(window).on('load',function(){
                setTimeout(() => {
                    $('.skeleton-loader').addClass('d-none');
                    $('.item-skeleton-content').removeClass('d-none');
                }, 1500);
            });
            
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                        clearTimeout(timer);
                        timer = setTimeout(callback, ms);
                    };
                })();
            
           
            
            $('#searchProds').keyup(function () {
                                    const data = $(this).val();
                                    if (data.length < 1) {
                                        $('.resultsearch').removeClass('show');
                                        $('.resultsearch li').remove();
                                    } else {

                                        delay(function () {

                                            $.ajax({
                                                url: "{{url('/cari/index')}}",
                                                method: "POST",
                                                data: {
                                                    data: data
                                                },
                                                beforeSend: function () {
                                                    $('.resultsearch li').remove();
                                                },
                                                success: function (res) {
                                                    $('.resultsearch').append(res);
                                                    $('.resultsearch').addClass('show');
                                                }
                                            })

                                        }, 100);

                                    }
                                })
            
        </script>


@endpush




@endsection
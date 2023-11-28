@extends('layouts.layout-v2_2')





@section('title', 'Sales Automation')





@section('css-after')

<style>
  .hero {
    background-image: url("public/assets/img/omsetku-banner-main.webp");
  }

  .bg-note {
    background-image: url("public/assets/img/omsetku-bg-circle.webp");
  }

  .bg-white {
    background-image: url("public/assets/img/omsetku-bg-cube.png");
  }

  .bg-orange {
    background-image: url("public/assets/img/omsetku-bg-circle-orange.png");
  }

  .bg-gradient {
    background-image: url("public/assets/img/omsetku-bg-cicle-purple.png") !important;
  }

  .bg-res2 {
    background-image: url("public/assets/img/omsetku-bg-circle.webp") !important;
  }

  .bg-res4 {
    background-image: url("public/assets/img/omsetku-bg-circle-orange.png") !important;
  }

  .bg-res5 {
    background-image: url("public/assets/img/omsetku-bg-cicle-purple.png") !important;
  }


  .btn-header {

    width: 225px;

    height: 40px;

    border: none;

    color: #1D2F5F;
    background: #fff;

    font-weight: 600px;

    border-radius: 5px;

  }


  .play-button {
    width: 150px;
    margin-top: -450px;
    margin-left: 200px;
    margin-right: auto;
  }

  .btn-header a {

    text-decoration: none;
    color: #1D2F5F;
  }

  .text-about {
    text-align: justify;
    font-size: 17px;
  }



  .img-about {

    width: 545px;
    margin-top: 0px;
    margin-left: 133px;

  }


  .btn-banner {

    width: 150px;
    margin-top: -20px;

  }

  .bg-grey {

    background-color: #F5F5F5;

  }

  .sct-blue {

    background: #F9FBFF;

  }

  .garis_verikal {
    border-left: 2px #C9C9C9 solid;
    height: 170px;
    width: 0px;
  }


  .img-who {

    width: 960px;
    height: 570px;
    margin-top: 100px;
    margin-left: 0px;

  }


  .img-girl {

    width: 380px;

  }

  .img-test {
    width: 800px;
    height: 570px;
  }

  .img-when {
    width: 1000px;
    margin-top: 89px;
    margin-left: 120px;
  }

  .img-how {
    width: 1000px;
    margin-top: 140px;
    margin-left: 0px;
  }

  .img-funnel {
    width: 400px;
    margin-top: 0px;
    margin-left: 100px;
    padding-top: 40px;
  }

  .img-phone-test {

    width: 352px;

  }


  .text-test {
    font-family: 'Inter';
  }


  .btn-fitur {

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 5px 10px;

    gap: 10px;

    color: #fff;

    margin-bottom: 30px;

    margin-top: 10px;

    width: 50%;

    height: 40px;

    background: #1D2F5F;

    border-radius: 5px;

    border: none;

  }

  .btn-fitur a {

    color: #ffff;
  }



  .img-phone {

    width: 644px;

    height: 750px;

    margin-bottom: -140px;

    margin-left: -100px;

  }



  .img-qr {

    width: 180px;
    margin-top: 20px;
    margin-left: 30px;

  }


  .dwl-btn {

    color: #1D2F5F;
    font-weight: 700;
    margin-top: 7px;

  }


  .img-ggp {

    width: 180px;
    margin-top: 20px;
    margin-left: 30px;

  }



  .btn-services {

    border: none;
    margin-top: 30px;
    width: 244px;
    height: 35px;
    background: #F1953F;
    border-radius: 10px;

  }


  .section-blue {

    background: #EBF1FF;

  }



  .img-clien {

    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
    width: 151px;

    height: auto;

    object-fit: contain;
  }



  .footer-logo {

    width: 120px;

    height: 120px;

  }



  .banner-text .title-text {
    color: white;
    text-align: left;
    font-size: 50px;
    margin-top: 100px;
  }



  .hero-img img {

    width: 580px;
    padding-bottom: 40px;

  }



  .hero-img {

    display: flex;

    justify-content: flex-end;

  }



  .circle {

    width: 25px;

    height: 25px;

    margin-top: -80px;

  }



  .about {



    display: block;

  }



  .about-header {



    padding: 15px 0px;

  }



  .about-header img {



    position: relative;

    top: 60px;

    left: 0px;

  }



  .about-header h2 {



    margin-bottom: 40px;

  }



  .image-section {



    display: flex;
    justify-content: center;
    align-items: center;
  }



  .icon-checklist {



    width: 30px;

    height: 30px;

  }

  .title-features {

    margin-top: -122px;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .detail-title-text {

    margin-bottom: 0px !important;
    margin-left: 0px;
    text-align: left !important;
  }

  .about-header .circle-app {
    width: 30px;
    height: auto;
    margin-top: -160px;
    margin-left: 450px;
  }

  .testimonials .testimonial-item {
    margin-left: 30px;
    color: #000;
    display: flex;
    align-items: center;
    padding: 0px 200px;
  }

  .testimonials .testimonial-item p {
    font-style: italic;
    margin: 0px 0px;
    width: auto;
  }

  .testimonial-item .row .content {

    display: flex;
    align-items: center;
    justify-content: center;
  }

  .content-who-omsetku a {

    color: #1F4690;
    font-weight: 600;
    font-size: 18px;
  }

  section.features,
  section.service-details {

    padding: 200px 0px;
  }

  .hero p {
    font-size: 20px;
  }

  .desktop-show {

    display: block !important;

  }

  .mobile-show {

    display: none !important;

  }

  .image-content-desktop {
    position: relative;
    top: 40px;
  }


  /*--------- responsive laptop/pc ---------*/
  /* 
    desktop zoom custom1   

    main width: 1367px;
    */
  @media screen and (min-width: 1321px) and (max-width: 1380px) {

    .bg-orange .container .text-center,
    .bg-note .container .text-center {
      margin-bottom: 0px !important;
    }

    .img-who,
    .img-how {
      width: 1000px;
      margin-top: 0px;
      margin-left: 0px;
    }
  }


  @media screen and (max-width: 1515px) {}


  /* Zoom 150% */
  @media screen and (min-width: 1000px) and (max-width: 1098px) {

    .img-phone {
      width: 530px !important;
    }

    .play-button {
      width: 100px !important;
      margin-left: 230px !important;
    }
  }


  @media screen and (min-width: 1248px) and (max-width: 1300px) {

    _::-webkit-full-page-media,
    _:future,
    :root .image-content-desktop {
      position: relative;
      top: 45px;
    }

    .image-content-desktop {
      position: relative;
      top: 45px;
    }

    .hero {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/hero img.png") !important;
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 765px;
    }

    #heros .title-text {
      color: white;
      text-align: left;
      font-size: 35px;
      margin-top: 86px;
    }

    .hero p {
      font-size: 16px;
    }

    .about-header h2 {
      font-size: 30px;
    }

    .text-about {
      font-size: 16px;
    }

    .img-about {
      width: 487px;
      margin-top: 0px;
      margin-left: 133px;
      margin-right: 45px;
    }

    .img-test {
      width: 682px;
      height: 484px;
    }

    section.features,
    section.service-details {
      padding: 230px 0px;
    }

    .bg-note {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/Group_28-min.png") !important;
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      height: 789px;
    }

    .bg-white {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/bg-white.png") !;
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      height: 789px;
    }

    .bg-orange {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/bg-orange-min.png") !;
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      height: 800px;
    }

    .img-when {
      width: 780px;
      margin-top: 89px;
      margin-left: 154px !important;
    }

    .img-how {
      width: 100%;
      margin-top: 140px;
      margin-left: 0px !important;
    }

    .img-funnel {
      width: 357px;
      margin-top: 0px;
      margin-left: 100px;
      padding-top: 40px;
    }

    .img-who {
      height: 453px;
      width: 765px;
      margin-top: 100px;
      margin-left: 0px !important;
    }

    .img-phone-test {
      width: 300px;
      margin-top: 34px;
    }

  }


  /* Zoom 125% */
  @media screen and (min-width: 1098px) and (max-width: 1300px) {

    .hero {
      width: 100%;
      min-height: 50vh;
      background-image: url("../public/assets/img/hero_img-min_1.webp?v=1.1") !important;
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 765px;
    }

    #heros .title-text {
      color: white;
      text-align: left;
      font-size: 50px;
      margin-top: 86px;
    }

    .about-header .circle-app {
      width: 30px;
      margin-top: -160px;
      margin-left: 450px;

    }

    .hero-img img {

      width: 510px;
      margin-top: 28px;

    }

    .banner-text .title-text {
      color: white;
      text-align: left;
      font-size: 50px;
      margin-top: -76px;
    }


    .play-button {
      margin-left: 260px;
      width: 120px;
    }

    .about-header img {

      position: relative;

      top: 50px;

      left: 0px;

    }

    .img-phone {
      width: 594px;

      height: 700px;

      margin-left: -30px;

      margin-top: -50px;


    }

    .hero p {
      font-size: 17px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .img-girl {

      width: 365px !important;

    }

    .bg-note {
      background-image: url("{{asset ('public/assets/img/omsetku-bg-circle.webp')}}") !important;
    }


  }


  /* Zoom 110% */
  @media screen and (min-width: 1300px) and (max-width: 1410px) {

    .img-girl {

      width: 430px !important;

    }

  }


  /* Zoom 90% */
  @media screen and (min-width: 1556px) and (max-width: 1600px) {

    .img-girl {

      width: 365px !important;

    }

  }

  /*--------- end responsive laptop/pc ---------*/


  /*--------- responsive tablet ---------*/
  /* tablet mode 1 */
  @media screen and (min-width:850px) and (max-width: 992px) {

    section.features,
    section.service-details {
      padding: 150px 0px;
    }

    .hero-img img {

      width: 601.21px;
      height: 590px;
      padding-bottom: 146px;
      margin-left: -50px;

    }


    .title-video {

      text-align: center;
    }

    .img-hand {

      width: 500px;
      margin-bottom: -198px;

    }

    .play-button {

      width: 100px;
      margin-left: 440px;
      margin-top: -420px;
    }

    .hero p {

      font-size: 17px;

    }


    .banner-text .title-text {
      color: white;
      text-align: left;
      font-size: 50px;
      margin-top: -100px;
    }

    .btn-banner-mobile {

      width: 150px;
      margin-top: -20px;
    }

    .hero-img {

      display: flex;

      justify-content: center;

    }

    .ggp-mobile {
      width: 200px;
      margin-left: 5px;
    }

    .text-about {
      text-align: justify;
    }

    .klien-content {

      padding: 0px 15px;
    }

    .klien-content a {

      display: flex;
      justify-content: center;
    }

    .klien-content h2 {

      text-align: center;
      font-size: 24px;
    }

    .detail-title-text {
      margin-bottom: 0px !important;
      margin-left: 0px;
      text-align: center !important;
    }

    .img-phone {
      width: 350px;
      height: auto !important;
    }

    .img-who {
      width: 351px;
      height: auto;
      margin-left: 0px;
    }

    .features-img-content {

      display: flex;
      justify-content: center;
    }

    .bg-blue {
      background: #EBF1FF;
      border-radius: 35px 35px 0px 0px;
    }

    .content-about {

      padding: 0px 25px;

    }

    .about-header img {

      position: relative;

      top: 60px;

      left: 75px;

    }



    .desktop-show {



      display: none !important;

    }



    .mobile-show {



      display: block !important;

    }

  }

  /* 
    tablet mode Ipad Air 
    main width: 820px
    */
  @media screen and (min-width:800px) and (max-width: 849px) {

    .desktop-show {



      display: none !important;

    }



    .mobile-show {



      display: block !important;

    }

    .pbtab-0 {
      padding-bottom: 0px;
    }

    .icon-box {
      text-align: center;
    }

    .about-header h2 {
      text-align: center !important;
      margin-bottom: 20px;
    }

    .about.menu-1.mobile-show {
      text-align: center !important;
    }

    .img-how {
      width: 500px !important;
      margin-top: 0px !important;
      margin-left: 0px !important;
    }

    section.features.bg-res3 .container .text-center,
    section.features.bg-res2.menu-1 .container .text-center {
      margin-bottom: 0px !important;
    }

    .img-when {
      width: 500px;
      margin-top: 0px;
      margin-left: 0px;
    }

    section.features.bg-res2,
    section.features.bg-res3 {
      padding: 75px 0px 0px !important;
    }

    .bg-res2,
    .bg-res3 {
      min-height: 0vh !important;
      height: 100% !important;
    }

    .title-features {
      margin-top: 0px !important;
    }

    section.features,
    section.service-details {
      padding: 150px 0px;
    }

    .hero-img img {

      width: 601.21px;
      height: 590px;
      padding-bottom: 146px;
      margin-left: -50px;

    }


    .title-video {

      text-align: center;
    }

    .img-hand {

      width: 500px;
      margin-bottom: -198px;

    }

    .play-button {

      width: 100px;
      margin-left: 440px;
      margin-top: -420px;
    }

    .hero p {

      font-size: 17px;

    }

    .bg-res1 {
      background-position: top !important;
    }


    .banner-text .title-text {
      color: white;
      text-align: left;
      font-size: 50px;
      margin-top: 0px !important;
      line-height: 60px !important;
    }

    .btn-banner-mobile {

      width: 150px;
      margin-top: -20px;
    }

    .hero-img {

      display: flex;

      justify-content: center;

    }

    .ggp-mobile {
      width: 200px;
      margin-left: 5px;
    }

    .text-about {
      text-align: justify;
    }

    .klien-content {

      padding: 0px 15px;
    }

    .klien-content a {

      display: flex;
      justify-content: center;
    }

    .klien-content h2 {

      text-align: center;
      font-size: 24px;
    }

    .detail-title-text {
      margin-bottom: 0px !important;
      margin-left: 0px;
      text-align: center !important;
    }

    .img-phone {
      width: 350px;
      height: auto !important;
    }

    .img-who,
    .img-why {
      width: 500px;
      height: auto;
      margin-left: 0px;
      margin-top: 0px !important;
    }

    .features-img-content {

      display: flex;
      justify-content: center;
    }

    .bg-blue {
      background: #EBF1FF;
      border-radius: 35px 35px 0px 0px;
    }

    .content-about {

      padding: 0px 25px;

    }

    .about-header img {

      position: relative;

      top: 60px;

      left: 75px;

    }



    .desktop-show {



      display: none !important;

    }



    .mobile-show {



      display: block !important;

    }

  }


  /* tablet mode 2 */
  @media screen and (max-width: 769px) {

    .desktop-show {



      display: none !important;

    }



    .mobile-show {



      display: block !important;

    }



    .banner-text .title-text {

      text-align: left;

      margin: 0px;

      font-size: 40px;

    }


    .play-button {

      margin-left: 322px;

    }


    .banner-text .button-banner {

      margin: 0px 0px 30px;

    }



    .banner-text {

      align-items: left;

    }



    .banner-text .content-text {

      text-align: left;

      font-size: 17px;

      margin: 15px 0px;


    }


    .btn-banner-mobile {

      margin-top: 10px;
    }


    .hero-img img {

      width: 337px;
      height: 467px;
      padding-bottom: 40px;
    }



    .about-header img {

      position: relative;

      top: 60px;

      left: 75px;

    }

  }

  /*--------- end responsive tablet ---------*/


  /*--------- responsive handphone ---------*/
  /* phone mode 1 */
  @media screen and (max-width: 458px) {

    .features.bg-res2.menu-1.mobile-show .container div.text-center {
      margin-bottom: 0px !important;
    }

    section.features {
      padding: 50px 0px 50px !important;
    }

    .title-features {
      margin-top: 0px !important;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .icon-box {
      text-align: center;
    }

    .btn-banner-mobile {
      margin-top: 5px;
      width: 250px;
      padding-bottom: 40px;
    }

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/Group 28.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 1000px;
    }

    .banner-text .title-text {
      text-align: center;
      margin-top: 200px;
    }

    .img-who {
      width: 300px !important;
      height: auto;
      margin-left: 0px;
      margin-top: 35px !important;
    }

    .img-girl {
      width: 380px;
      margin-bottom: -30px !important;
    }

    .img-when {
      width: 413px !important;
      margin-left: 0px;
    }

    .img-how {
      width: 387px;
      margin-left: 0px;
    }

    .banner-text .content-text {
      text-align: center;
    }

    .hero-img img {

      width: 349px;
      height: 359px;
      margin-left: 5px;
      margin-bottom: 20px;

    }
  }

  /* phone mode 1 */
  @media screen and (max-width: 428px) {

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/Group 28.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 1000px;
    }

    .banner-text .title-text {
      text-align: center;
      margin-top: 200px;
    }

    .img-who {
      margin-top: 5px !important;
      width: 100% !important;

    }

    .img-girl {
      width: 380px;
      margin-bottom: -30px !important;
    }

    .img-when {
      width: 413px !important;
      margin-left: 0px;
    }

    .img-how {
      width: 387px;
      margin-left: 0px;
    }


    .banner-text .content-text {
      text-align: center;
    }


    .hero-img img {

      width: 349px;
      height: 359px;
      margin-left: 5px;
      margin-bottom: 20px;

    }
  }

  /* phone mode 2 */
  @media screen and (max-width: 426px) {

    _::-webkit-full-page-media,
    _:future,
    :root .features-img-content {
      margin: 25px 0px 0px 0px;
    }

    .features-img-content {
      margin: 25px 0px 0px 0px;
    }

    .banner-text .title-text {
      margin-top: 274px !important;
    }

    section.features,
    section.service-details {
      padding: 100px 0px;
    }

    .text-about {
      text-align: justify !important;
      font-size: 15px;
    }

    .hero.mobile-show {

      width: 100%;
      min-height: 50vh;
      background-image: url("../img/Group 28.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 850px;

    }

    .garis-horizontal {

      border-top: 2px #C9C9C9 solid;
      height: 0px;
      width: 400px;
      display: block;
      margin: auto;

    }

    .img-hand {

      width: 380px;

    }

    .img-when {
      width: 391px;
    }


    .play-button {

      width: 90px;
      margin-left: 171px;
      margin-top: -232px;

    }

    .img-funnel {

      width: 300px;
      margin-top: 64px;

    }

    .img-girl {

      width: 354px;
      height: 344px;
      margin-top: 20px;
      margin-bottom: -40px;

    }

    .img-phone-test {

      width: 300px;
      margin-top: 30px;

    }

    .about-header .circle-app {
      width: 30px;
      height: auto;
      margin-top: 0px;
      margin-left: 0px;
      top: 25px;
      left: 15px;
    }

    .service-details {
      padding: 10px 0px 0px;
    }

    .detail-link {
      display: flex;
      justify-content: space-around;
    }

    .img-about {

      width: 375px;
      margin-left: 0px;
      margin-top: 15px;

    }

    .img-code {

      width: 350px;

    }

    .ggp-mobile {

      width: 220px;

    }

    .btn-banner-mobile {

      margin-top: 5px;
      width: 150px;
      padding-bottom: 40px;

    }

    .about-header h2 {



      margin-bottom: 0px !important;

    }

    .img-how {
      width: 340px;
    }



    .about-header img {


      left: 50px;

    }



    .banner-text .button-banner {



      margin: 0px 0px 30px;

    }



    .banner-text {



      align-items: center;

    }



    .banner-text .content-text {

      font-size: 17px;

      color: white;

      text-align: center;

      margin: 10px 0px;

    }



    .banner-text .title-text {



      text-align: center;

      font-weight: 700;

      line-height: 35px;

    }



    .hero-img img {



      width: 350px;
      height: 360px;
      padding-bottom: 10px;
      margin-left: auto;
      margin-right: auto;

    }



    .hero-img {



      display: flex;

      justify-content: center;

    }



  }


  /* phone mode 3 */
  @media screen and (max-width: 414px) {

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/Group 28.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 50px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 850px;
    }


    .play-button {

      margin-left: 148px;

    }

    .banner-text .title-text {
      text-align: center;
      margin-top: 358px !important;
      line-height: 40px;
    }

    .banner-text .content-text {
      text-align: center;
    }


    .hero-img img {
      margin: auto !important;
      margin-top: 100px !important;
      height: 347px;
    }
  }

  /* phone  8 */
  @media screen and (max-width: 409px) {

    .img-when {
      margin-top: 89px;
      margin-left: 0px !important;
      justify-content: center;
      display: flex;

    }

    .img-how {
      justify-content: center;
      display: center;
      margin-left: 0px !important;

    }

    .banner-text .title-text {

      margin-top: 180px !important;

    }



  }


  /* phone model 4 */
  @media screen and (max-width: 395px) {

    .title-features {
      margin-top: -72px;
    }

    .hero.mobile-show {
      width: 100%;
      min-height: 50vh;
      background-image: url("../img/Group 28.png");
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 0 0 0;
      color: rgba(255, 255, 255, 0.8);
      height: 850px;
    }

    .hero-img img {

      margin-left: 10px !important;

    }

    .banner-text .title-text {

      line-height: 40px;
      margin-top: 210px !important;
    }

    .play-button {

      margin-left: 128px;

    }

    .garis-horizontal {

      border-top: 2px #C9C9C9 solid;
      height: 0px;
      width: 380px;
      display: block;
      margin: auto;

    }

    .bg-res1 {
      width: 100%;
      min-height: 50vh;
      background-size: cover;
      background-position: center;
      position: relative;
      height: 690px !important;
    }

    .bg-res2 {
      width: 100%;
      min-height: 50vh;
      /* background-image: url("../public/assets/img/sc-2.png") !important; */
      background-size: cover;
      background-position: center;
      position: relative;
      height: 473px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .img-girl {
      width: px !important;
    }

  }


  /* phone model 5 */
  @media screen and (max-width: 376px) {

    _::-webkit-full-page-media,
    _:future,
    :root section.features {
      padding: 95px 0px 0px !important;
    }

    section.features {
      padding: 95px 0px 0px !important;
    }

    .banner-text .title-text {
      line-height: 30px !important;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .bg-res2 {
      height: 450px !important;
    }

    .bg-res2 {
      height: 450px !important;
    }

    section.features,
    section.service-details {
      padding: 120px 0px;
    }

    .img-who {
      width: 325px !important;
      height: auto;
      margin-left: 0px;
    }

    .img-h1 {

      width: 325px !important;
      height: auto;
      margin-left: 0px;
      margin-top: 50px !important;

    }

    .banner-text .content-text {

      font-size: 17px;

      margin: 10px 7px;

    }

    .garis-horizontal {

      border-top: 2px #C9C9C9 solid;
      height: 0px;
      width: 350px !important;
      display: block;
      margin: auto;

    }

    .bg-res1 {
      width: 100%;
      min-height: 50vh;
      background-size: cover;
      background-position: center;
      position: relative;
      height: 650px !important;
    }

    .bg-res2 {
      width: 100%;
      min-height: 50vh;
      /* background-image: url("../public/assets/img/sc-2.png") !important; */
      background-size: cover;
      background-position: center;
      position: relative;
      height: 500px !important;
    }

    .bg-res3 {
      width: 100%;
      min-height: 50vh;
      background-image: url("../public/assets/img/sc-3.png") !important;
      background-size: cover;
      background-position: center;
      position: relative;
      height: 635px;
    }



    .img-hand {

      width: 333px;

    }


    .play-button {

      width: 80px;
      margin-top: -157px;
      margin-left: 147px;
    }


    .banner-text .title-text {

      line-height: 25px;

      font-size: 25px;

    }



    .hero-img {

      margin: 0px 0px 0px;

    }



    .about-header img {

      left: 27px;

      top: 57px;

    }



    .img-about {

      width: 285px;

    }

    .hero-img img {

      margin-left: 0px !important;

    }

    .img-when {

      margin-top: 110px;
      margin-left: 0px;

    }

    .img-how {

      margin-bottom: 100px;
      margin-left: 0px;
    }


  }

  /* phone model 6 */
  @media screen and (max-width: 361px) {
    .features-img-content {
      margin: 0px 0px 0px 0px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .img-who {
      width: 290px !important;
      height: auto;
      margin-left: 0px;
    }

    .img-who {
      width: 290px !important;
      height: auto;
      margin-left: 0px;
    }

    .img-when {
      width: 391px;
      margin-top: 95px !important;
    }

    .img-how {

      margin-bottom: 100px;

    }

    .title-features {
      margin-top: 0px;
    }

  }

  /* phone model 7 */
  @media screen and (max-width: 321px) {

    _::-webkit-full-page-media,
    _:future,
    :root .features-img-content {
      margin: 25px 0px 0px 0px;
    }

    .features-img-content {
      margin: 25px 0px 0px 0px;
    }

    section.features,
    section.service-details {
      padding: 100px 0px;
    }

    .banner-text .title-text {

      margin-top: 100px !important;

    }

    .hero-img img {

      width: 300px;
      height: 310px;
      padding-bottom: 10px;
      margin-left: auto;
      margin-right: auto;
    }

    .ggp-mobile {

      width: 200px;

    }

    .img-hand {

      width: 300px;

    }

    .play-button {

      margin-left: 117px !important;
      margin-top: -103px;

    }

    .detail-link {

      display: flex;
      justify-content: space-around;
    }

    .service-details {

      padding: 10px 0px 0px;
    }

    .about-header .circle-app {
      width: 30px;
      height: auto;
      margin-top: 0px;
      margin-left: 0px;
      top: 25px;
      left: 15px;
    }

    .img-phone {
      width: 290px;
      height: auto !important;
    }

    .img-about {
      width: 250px;
    }

    .img-who {
      height: auto !important;
      width: 255px !important;
      margin-left: 0px !important;
    }

    .bg-blue {
      border-radius: 35px 35px 0px 0px;
    }

    .about-header img {

      left: 12px;

      top: 55px;

    }

    .about-header h2 {

      font-size: 25px;

      margin-bottom: 15px;

    }

    .banner-text .content-text {


      font-size: 13px;

      margin: 8px 0px;

    }



    .banner-text .title-text {


      line-height: 26px;

      font-size: 19px;

    }

  }

  /*--------- end responsive handphone ---------*/
</style>

@endsection



@section('konten')



<!-- ======= Hero Section ======= -->



<!-- Hero desktop Section -->

<section id="heros" class="hero d-flex align-items-center desktop-show">



  <div class="container">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center banner-text">

      <h1 class="title-text">
        {{ $banner['title'] }}
      </h1>

      <p class="content-text">
        Tingkatkan penjualan Anda dengan aplikasi Omsetku. <br>
        Download Omsetku sekarang gratis!
      </p>
    </div>


    <a href="{{ url('contact') }}" target="_blank">

      <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_banner']) }}" alt="">

    </a>

    <a href="{{ url('login') }}" target="_blank">

      <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_coba']) }}" alt="" style="height: 41px; width: 129px; margin-left: 10px;">

    </a>


  </div>



</section>

<!-- End Hero desktop Section -->




<!-- Hero mobile Section -->

<section id="heros" class="hero d-flex align-items-center mobile-show bg-res1">


  <div class="container">


    <div class="row gy-4 d-flex justify-content-between">



      <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 d-flex flex-column justify-content-center banner-text">

        <h1 class="title-text" style="line-height: 40px;">
          {{ $banner['title'] }}
        </h1>

        <p class="content-text">
          Tingkatkan penjualan Anda dengan aplikasi Omsetku.
          Download Omsetku sekarang gratis!
        </p>

      </div>

      <div class="col-12 col-sm-12 col-md-12 order-2 order-lg-1 banner-text">

        <div class="row">

          <div class="col-sm-6 text-center">

            <a href="{{ url ('contact') }}" target="_blank">

              <img class="btn-banner-mobile" src="{{ asset('public/assets/img/'. $banner['btn_banner']) }}" alt="">

            </a>

          </div>
        </div>

      </div>




    </div>



  </div>



</section>

<!-- end Hero mobile Section -->


<!-- ======= end Hero Section ======= -->







<!-- ======= About Us Section ======= -->

<!-- About Us desktop Section -->

<section id="about1" class="about menu-1 desktop-show">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100">

        <div class="about-header">

          <h2 style="text-align: left;">{{ $why_omsetku['title'] }}</h2>

        </div>


        @for($i = 0; $i < count($why_omsetku['content']); $i++) <div class="row mb-4">

          <div class="col-md-1 col-lg-1">

            <img src="{{ asset('public/assets/img/check.png') }}" alt="" class="icon-checklist">

          </div>

          <div class="col-md-11 col-lg-11">

            <h5><strong>{{ $why_omsetku['content'][$i]['title_content'] }}</strong></h5>

            <p class="text-about">{{ $why_omsetku['content'][$i]['describe_content'] }}</p>

          </div>

      </div>
      @endfor

    </div>

    <div class="col-lg-6 image-section" data-aos-delay="100">

      <img src="{{ asset('public/assets/img/'.$why_omsetku['img']) }}" class="img-about" alt="">

    </div>

  </div>

  </div>

</section>

<!-- End About Us desktop Section -->


<!-- About Us mobile Section -->

<section id="about" class="about menu-1 mobile-show">


  <div class="container">

    <div class="about-header">

      <h2>{{ $why_omsetku['title'] }}</h2>

    </div>

    <div class="row">



      <div class="col-sm-12 col-md-12 pt-5 pt-lg-0 content" data-aos-delay="100">

        @for($i = 0; $i < count($why_omsetku['content']); $i++) <div class="row mb-4">

          <div class="col-1 col-sm-1 col-md-1">

            <img src="{{ asset('public/assets/img/check.png') }}" alt="" class="icon-checklist">

          </div>

          <div class="col-11 col-sm-11 col-md-11 content-about">

            <h5><strong>{{ $why_omsetku['content'][$i]['title_content'] }}</strong></h5>

            <p class="text-about">{{ $why_omsetku['content'][$i]['describe_content'] }}</p>

          </div>

      </div>
      @endfor



    </div>

    <div class="col-sm-12 col-md-12 image-section" data-aos-delay="50">

      <img src="{{ asset('public/assets/img/'.$why_omsetku['img']) }}" class="img-why" alt="" style="width: 350px;">

    </div>

  </div>

  </div>

</section>

<!-- End About Us mobile Section -->

<!-- ======= About Us Section ======= -->






<!-- ======= Features Section ======= -->

<!-- Features desktop Section -->

<section id="features" class="features bg-note menu-1 desktop-show">

  <div class="container">

    <h2 class="title-features text-center" style="color: #fff;">Percepat penjualan dan layanan pelanggan dengan <br>Omnichannel CRM terbaik</h2>

    <div class="text-center" style="color: #fff;">
      <p>Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan BigData, <br>
        kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka</p>
    </div>

    <div class="row image-content-desktop text-center">
      <div class="col-md-12 col-lg-12 col-xl-12 text-center">
        <img src="{{ asset('public/assets/img/'.$who_omsetku['img']) }}" class="img-test" alt="">
      </div>
    </div>

    <div class="row gy-4 align-items-center features-item " data-aos="fade-up">

    </div>

  </div>

</section>

<!-- end Features desktop Section -->



<!-- Features mobile Section -->

<section id="features" class="features bg-res2 menu-1 mobile-show">

  <div class="container">

    <div class="row gy-4 px-2 align-items-center features-item ">


      <div class="col-12 col-sm-12 col-md-12 text-center" style="color: #fff;">

        <h2 class="title-features">Pantau perjalanan harian penjualan & targetkan waktu yang aktual di mana saja</h2>

        <p>Tingkatkan penjualanmu dengan aplikasi Omsetku. Download Omsetku sekarang juga!</p>

      </div>

      <div class="col-12 col-sm-12 col-md-12 features-img-content text-center">

        <img src="{{ asset('public/assets/img/'.$who_omsetku['img']) }}" class="img-who" alt="" style="margin-top: 0px; ">

      </div>

    </div>


  </div>

</section>

<!-- End Features mobile Section -->

<!-- ======= end Features Section ======= -->





<!-- --------------------------------------------------------------------------------------------------------------- -->


<!-- Features desktop Section -->

<section id="features" class="features bg-white menu-1 desktop-show">

  <div class="container">

    <h2 class="title-features text-center" style="color: #212121;">Mengelola aktivitas pemasaran & penjualan <br>
      memungkinkan mereka untuk menjual lebih banyak</h2>

    <div class="text-center" style="color: #212121; margin-Bottom: -90px;">
      @php echo $when_omsetku['describe'] @endphp
    </div>

    <div class="col-md-5 order-1 order-md-2 features-img-content">

      <img src="{{ asset('public/assets/img/'.$when_omsetku['img']) }}" class="img-when" alt="">

    </div>

    <div class="row gy-4 align-items-center features-item " data-aos="fade-up">



    </div>

  </div>

</section>

<!-- end Features desktop Section -->



<!-- Features desktop Section -->

<section id="features" class="features bg-res3 menu-1 mobile-show">

  <div class="container">

    <h2 class="title-features text-center" style="color: #212121;">Mengelola aktivitas pemasaran & penjualan <br>
      memungkinkan mereka untuk menjual lebih banyak</h2>

    <div class="text-center" style="color: #212121; margin-Bottom: -90px;">
      @php echo $when_omsetku['describe'] @endphp
    </div>

    <div class="row gy-4 align-items-center features-item ">

      <div class="col-12 col-sm-12 col-md-12 order-1 order-md-2 features-img-content">

        <img src="{{ asset('public/assets/img/'.$when_omsetku['img']) }}" class="img-when" alt="">

      </div>

    </div>

  </div>

</section>

<!-- end Features desktop Section -->




<!-- --------------------------------------------------------------------------------------------------------------- -->



<!-- Features desktop Section -->

<section id="features" class="features bg-orange menu-1 desktop-show">

  <div class="container">

    <h2 class="title-features text-center" style="color: #212121;">{{ $how_omsetku['title'] }}</h2>

    <div class="text-center" style="color: #212121; margin-Bottom: -90px;">
      <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka<br> dengan memberdayakan AI dan analitik dasbor intelijen.</p>
    </div>

    <div class="row gy-4 align-items-center features-item text-center">
      <div class="col-lg-12 col-xl-12 order-1 order-md-2 features-img-content">

        <img src="{{ asset('public/assets/img/'.$how_omsetku['img']) }}" class="img-how" alt="">

      </div>


    </div>

  </div>

</section>


<!-- Features desktop Section -->

<section id="features" class="features bg-res4 menu-1 mobile-show">

  <div class="container">

    <h2 class="title-features text-center" style="color: #212121;">{{ $how_omsetku['title'] }}</h2>

    <div class="text-center" style="color: #212121; margin-Bottom: 40px;">
      <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka<br> dengan memberdayakan AI dan analitik dasbor intelijen.</p>
    </div>

    <div class="row gy-4 align-items-center features-item text-center">

      <div class="col-12 col-sm-12 col-md-12 order-1 order-md-2 features-img-content">

        <img src="{{ asset('public/assets/img/'.$how_omsetku['img_res']) }}" class="img-how" alt="" style="margin-top: 0px;">

      </div>


    </div>

  </div>

</section>


<!-- --------------------------------------------------------------------------------------------------------------------------------- -->


<!-- About Us desktop Section -->

<section id="about" class="about menu-1 desktop-show">


  <div class="container">



    <div class="row">

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 60px;">{{ $funnel_omsetku['title'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121; margin-Bottom: -90px;">
              @php echo $funnel_omsetku['describe'] @endphp
            </div>

          </div>

        </div>
      </div>

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$funnel_omsetku['img']) }}" class="img-funnel" alt="">

      </div>

    </div>

  </div>

</section>

<!-- End About Us desktop Section -->


<!-- About Us responisve Section -->

<section id="about" class="about menu-1 mobile-show">


  <div class="container">



    <div class="row">

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left;">{{ $funnel_omsetku['title'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121; margin-Bottom: -200px;">
              @php echo $funnel_omsetku['describe'] @endphp
            </div>

          </div>

        </div>
      </div>

      <div class="col-12 col-sm-12 col-lg-12">

        <img src="{{ asset('public/assets/img/'.$funnel_omsetku['img']) }}" class="img-funnel" alt="" style="display:block; margin:auto; margin-top: 72px;">

      </div>

    </div>

  </div>

</section>

<!-- End About Us responsive Section -->

<!-- ----------------------------------------------------------------------------------------------------------------------------------- -->


<!-- ======= Features Section ======= -->

<!-- Features desktop Section -->

<section id="features" class="features bg-note menu-1 desktop-show">

  <div class="container">

    <h2 class="title-features text-center" style="color: #fff;">{{ $integrasi_omsetku['title'] }}</h2>

    <div class="text-center" style="color: #fff; margin-Bottom: -90px;">
      <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk <br> mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
    </div>

    <div class="row gy-4 align-items-center features-item text-center">

      <div class="col-lg-12 col-xl-12 order-1 order-md-2 features-img-content">

        <img src="{{ asset('public/assets/img/'.$integrasi_omsetku['img']) }}" class="img-who" alt="">

      </div>


    </div>

  </div>

</section>

<!-- end Features desktop Section -->



<!-- ======= Features Section ======= -->

<!-- Features desktop Section -->

<section id="features" class="features bg-res2 menu-1 mobile-show" style="height: 530px;">

  <div class="container">

    <h2 class="title-features text-center" style="color: #fff;">{{ $integrasi_omsetku['title'] }}</h2>

    <div class="text-center" style="color: #fff; margin-Bottom: -90px;">
      <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk <br> mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
    </div>

    <div class="row gy-4 align-items-center features-item ">
      <div class="col-12 col-sm-12 col-md-12 order-1 order-md-2 features-img-content">

        <img src="{{ asset('public/assets/img/'.$integrasi_omsetku['img']) }}" class="img-who" alt="" style="display: block; margin: auto; margin-top: 100px;">

      </div>

    </div>

  </div>

</section>

<!-- end Features desktop Section -->



<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- About Us desktop Section -->

<section id="about2" class="about menu-1 desktop-show bg-grey" style="padding-top: 80px; padding-bottom: 80px;">


  <div class="container desktop-show">

    <div class="row">

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 60px; margin-left: 100px;">{{ $phone_omsetku['title_1'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121; margin-Bottom: -90px; margin-left: 100px;">
              @php echo $phone_omsetku['describe_1'] @endphp
            </div>

          </div>

        </div>
      </div>

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_1']) }}" class="img-phone-test" alt="">

      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_2']) }}" class="img-phone-test" alt="">

      </div>

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 60px;">{{ $phone_omsetku['title_2'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121; margin-Bottom: -90px;">
              @php echo $phone_omsetku['describe_2'] @endphp
            </div>

          </div>

        </div>
      </div>

    </div>


    <div class="row">

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 60px; margin-left: 100px;">{{ $phone_omsetku['title_3'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121; margin-Bottom: -90px; margin-left: 100px;">
              @php echo $phone_omsetku['describe_3'] @endphp
            </div>

          </div>

        </div>
      </div>

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_3']) }}" class="img-phone-test" alt="">

      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_4']) }}" class="img-phone-test" alt="">

      </div>

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 60px;">{{ $phone_omsetku['title_4'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121; margin-Bottom: -90px;">
              @php echo $phone_omsetku['describe_4'] @endphp
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>

</section>

<!-- End About Us desktop Section -->


<!-- About Us desktop Section -->

<section id="about" class="about menu-1 mobile-show bg-grey" style="padding-top: 30px; padding-bottom: 30px;">

  <div class="container">



    <div class="row">

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_1']) }}" class="img-phone-test" alt="">

      </div>

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 20px;">{{ $phone_omsetku['title_1'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121;">
              @php echo $phone_omsetku['describe_1'] @endphp
            </div>

          </div>

        </div>
      </div>



    </div>

    <div class="row">

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_2']) }}" class="img-phone-test" alt="">

      </div>

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 20px;">{{ $phone_omsetku['title_2'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121;">
              @php echo $phone_omsetku['describe_2'] @endphp
            </div>

          </div>

        </div>
      </div>

    </div>


    <div class="row">

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_3']) }}" class="img-phone-test" alt="">

      </div>

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 20px;">{{ $phone_omsetku['title_3'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121;">
              @php echo $phone_omsetku['describe_3'] @endphp
            </div>

          </div>

        </div>
      </div>



    </div>

    <div class="row">

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$phone_omsetku['img_4']) }}" class="img-phone-test" alt="">

      </div>

      <div class="col-lg-6 pt-lg-0 content">

        <div class="about-header">

          <h2 style="text-align: left; margin-top: 20px;">{{ $phone_omsetku['title_4'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #212121;">
              @php echo $phone_omsetku['describe_4'] @endphp
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>

</section>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- ======= Features Section ======= -->

<!-- Features desktop Section -->

<section id="features" class="features menu-1 desktop-show" style="padding-bottom: 100px;">

  <div class="container">

    <h2 class="title-features text-center" style="color: #000;">Mengapa Omsetku Bisa Membantu Penjualan <br>untuk bekerja lebih mudah & efisien?</h2>
    <div class="text-center" style="color: #000; margin-bottom: 90px;">
      @php echo $manfaat_omsetku['describe'] @endphp
    </div>

    <div class="row">

      <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon mb-3"><img src="{{ asset('public/assets/img/'.$manfaat_omsetku['icon_1']) }}" alt="" style="width: 50px; height: 50px;"></div>
          <h4 class="text-test"><a href="" style="color: #213262; font-weight: 700;">Real Time<br> Performance</a></h4>
          <p style="color: #213262;">Laporan kinerja i lead, kinerja tim, <br> hingga aktivitas penjualan dapat dipantau <br> secara real-time.</p>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
        <div class="garis_verikal" style="padding: 20px;"></div>
        <div class="icon-box">
          <div class="icon mb-3"><img src="{{ asset('public/assets/img/'.$manfaat_omsetku['icon_2']) }}" alt="" style="width: 20px; height: 50px;"></div>
          <h4><a href="" style="color: #213262;  font-weight: 700;">Lead Scoring<br> Temperature Market</a></h4>
          <p style="color: #213262;">Informasi untuk menentukan segmentasi audiens untuk memetakan target bisnis Anda secara lebih tepat. </p>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
        <div class="garis_verikal" style="padding: 20px;"></div>
        <div class="icon-box">
          <div class="icon mb-3"><img src="{{ asset('public/assets/img/'.$manfaat_omsetku['icon_3']) }}" alt="" style="width: 50px; height: 50px;"></div>
          <h4><a href="" style="color: #213262;  font-weight: 700;">Digital Quotation<br> & Sales Order</a></h4>
          <p style="color: #213262;">Membuat quotation & sales order untuk profesional bisnis dapat dilakukan dengan aplikasi.</p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- End Features desktop Section -->



<!-- ======= Features Section ======= -->

<!-- Features desktop Section -->

<section id="features" class="features menu-1 mobile-show" style="padding-bottom: 40px;">

  <div class="container">

    <h2 class="title-features text-center" style="color: #000;">Mengapa Omsetku Bisa Membantu Penjualan <br>untuk bekerja lebih mudah & efisien?</h2>
    <div class="text-center" style="color: #000; margin-bottom: 30px;">
      @php echo $manfaat_omsetku['describe'] @endphp
    </div>


    <div class="row">

      <div class="garis-horizontal" style="padding: 10px;"></div>
      <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon mb-3"><img src="{{ asset('public/assets/img/'.$manfaat_omsetku['icon_1']) }}" alt="" style="width: 50px; height: 50px;"></div>
          <h4 class="text-test"><a href="" style="color: #213262; font-weight: 700;">Real Time Performance</a></h4>
          <p style="color: #213262;">Laporan kinerja i lead, kinerja tim, hingga aktivitas penjualan dapat dipantau secara real-time.</p>
        </div>
      </div>

      <div class="garis-horizontal" style="padding: 10px;"></div>
      <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon mb-3"><img src="{{ asset('public/assets/img/'.$manfaat_omsetku['icon_2']) }}" alt="" style="width: 20px; height: 50px;"></div>
          <h4><a href="" style="color: #213262;  font-weight: 700;">Lead Scoring<br> Temperature Market</a></h4>
          <p style="color: #213262;">Informasi untuk menentukan segmentasi audiens untuk memetakan target bisnis Anda secara lebih tepat. </p>
        </div>
      </div>

      <div class="garis-horizontal" style="padding: 10px;"></div>
      <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon mb-3"><img src="{{ asset('public/assets/img/'.$manfaat_omsetku['icon_3']) }}" alt="" style="width: 50px; height: 50px;"></div>
          <h4><a href="" style="color: #213262;  font-weight: 700;">Digital Quotation<br> & Sales Order</a></h4>
          <p style="color: #213262;">Membuat quotation & sales order untuk profesional bisnis dapat dilakukan dengan aplikasi.</p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->

<!-- About Us desktop Section -->

<section id="about" class="about bg-gradient menu-1 desktop-show">


  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-lg-0 content" style=" margin-top: 30px;">

        <div class="about-header">

          <h2 style="text-align: left; color: #fff; margin-bottom: -4px;">{{ $ads_omsetku['title'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11">

            <div class="text-left" style="color: #fff;">
              @php echo $ads_omsetku['describe'] @endphp
            </div>

          </div>

        </div>
      </div>

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$ads_omsetku['img']) }}" class="img-girl" alt="">

      </div>

    </div>

    <div style="margin-top: -120px;">
      <a href="{{ url ('contact') }}" target="_blank">

        <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_banner']) }}" alt="">

      </a>

      <a href="{{ url('login') }}" target="_blank">

        <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_coba']) }}" alt="" style="height: 41px; width: 129px; margin-left: 10px;">

      </a>
    </div>

  </div>

</section>

<!-- End About Us desktop Section -->



<!-- About Us desktop Section -->

<section id="about" class="about bg-res5 menu-1 pbtab-0 mobile-show">

  <div class="container">

    <div class="row">

      <div class="col-lg-6 pt-lg-0 content" style=" margin-top: 30px; text-align: center;">

        <div class="about-header">

          <h2 style="text-align: center; color: #fff;">{{ $ads_omsetku['title'] }}</h2>

        </div>

        <div class="row">


          <div class="col-md-11 col-lg-11 text-center">

            <div class="text-left" style="color: #fff;">
              @php echo $ads_omsetku['describe'] @endphp
            </div>

          </div>

          <div style="margin-top: 40px;">
            <a href="{{ url ('contact') }}" target="_blank">

              <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_banner']) }}" alt="">

            </a>

            <a href="{{ url('login') }}" target="_blank">

              <img class="btn-banner" src="{{ asset('public/assets/img/'. $banner['btn_coba']) }}" alt="" style="height: 41px; width: 129px; margin-left: 10px;">

            </a>
          </div>


        </div>


      </div>

      <div class="col-lg-6 image-section">

        <img src="{{ asset('public/assets/img/'.$ads_omsetku['img']) }}" class="img-girl" alt="">

      </div>

    </div>



  </div>

</section>

<!-- End About Us desktop Section -->

@endsection
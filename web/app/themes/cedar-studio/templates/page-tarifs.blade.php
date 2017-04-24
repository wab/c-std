{{--
  Template Name: Page tarifs
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <div class="container">

      <section class="section-price plan">
        <h2 class="section-price-title">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 48">
            <path d="M34.4 28.8h-28c-.4 0-.8.4-.8.8s.4.8.8.8h28c.4 0 .8-.4.8-.8s-.4-.8-.8-.8zm-10.4-4h10.4c.4 0 .8-.4.8-.8s-.4-.8-.8-.8H24c-.4 0-.8.4-.8.8s.4.8.8.8zm0-5.6h10.4c.4 0 .8-.4.8-.8s-.4-.8-.8-.8H24c-.4 0-.8.4-.8.8s.4.8.8.8zm0-5.6h10.4c.4 0 .8-.4.8-.8s-.4-.8-.8-.8H24c-.4 0-.8.4-.8.8s.4.8.8.8zm10.4 24.8h-28c-.4 0-.8.4-.8.8s.4.8.8.8h28c.4 0 .8-.4.8-.8s-.4-.8-.8-.8zm-28-3.2h11.2c.4 0 .8-.4.8-.8s-.4-.8-.8-.8H6.4c-.4 0-.8.4-.8.8s.4.8.8.8zm28-1.6H24c-.4 0-.8.4-.8.8s.4.8.8.8h10.4c.4 0 .8-.4.8-.8s-.4-.8-.8-.8zm-13 1.4c.1-.2.2-.4.2-.6 0-.2-.1-.4-.2-.6-.3-.3-.8-.3-1.1 0-.2.2-.3.4-.3.6 0 .2.1.4.2.6.2.1.4.2.6.2.2 0 .4-.1.6-.2z"/>
            <path d="M39.2 46.4H1.6V4.8h4v18.4c0 .3.2.6.4.7.3.1.6.1.8-.1l5.9-4.4 5.9 4.4c.1.1.1.1.2.1h.2c.1 0 .2 0 .3-.1.3-.1.4-.4.4-.7V4.8h19.2v41.6zM7.2 4V1.6h11.2v20l-5.1-3.8c-.3-.2-.7-.2-1 0l-5.1 3.8V4zM40 3.2H20V.8c0-.4-.4-.8-.8-.8H6.4c-.4 0-.8.4-.8.8v2.4H.8c-.4 0-.8.4-.8.8v43.2c0 .4.4.8.8.8H40c.4 0 .8-.4.8-.8V4c0-.4-.4-.8-.8-.8z"/></svg>
          <span>
            Nos Offres
          </span>
        </h2>
        <div class="section-price-contenu">
          <article>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170.9 171.6"><path d="M151.8 171.6H19.1c-1.4 0-2.5-1.1-2.5-2.5V84.6H2.5c-1 0-1.9-.6-2.3-1.6-.4-1-.2-2 .6-2.7L83.8.7c1-.9 2.5-.9 3.5 0l83 79.6c.7.7 1 1.8.6 2.7-.4.9-1.3 1.6-2.3 1.6h-14.1v84.5c-.2 1.4-1.3 2.5-2.7 2.5m-36.4-5h34V129h-34v37.6m-64.3 0h59.2V129H51.1v37.6m-14 0h9v-2.9h-9v2.9zm-15.5 0h10.5V129H21.6v37.6zm15.5-7.9h9v-4.2h-9v4.2zm0-9.2h9v-4.2h-9v4.2zm0-9.2h9v-4.2h-9v4.2zm0-9.1h9V129h-9v2.2zm75.8-7.2h36.5V84.6h-44.2V124h7.7m-21.7 0h9v-3h-9v3zm-24.8 0h19.8V84.6H66.4V124zm-17.8 0h12.7V84.6H21.6V124h27m42.6-8h9v-4.7h-9v4.7zm0-9.6h9v-4.7h-9v4.7zm0-9.7h9V92h-9v4.7zm0-9.7h9v-2.5h-9V87zm60.6-7.4h10.4l-26.9-25.8v25.8h16.5zm-49.1 0h27.7V49.1 49l-24.3-23.3H64.9L39.4 50.2v29.4h63.3zm-83.6 0h15.3V55L8.7 79.6h10.4zm51-58.9h30.8L85.5 6 70.1 20.7z"/></svg>
            <h3 class="title"><span>Plan 3d</span></h3>
            <p class="price"><strong>100€</strong> <span>/ pièces *</span></p>
            <h4 class="subtitle"><span>options</span></h4>
            <ul class="options">
              <li>Aménagement personnalisé : <strong>+ 5€ / pièce **</strong></li>
              <li>Visite virtuelle : <strong>+ 10€ / pièce</strong></li>
            </ul>
          </article>
          <article>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 463 271"><path d="M455.5 256H447V146.8l4.3 2.9c1.3.9 2.7 1.3 4.2 1.3 2.4 0 4.8-1.2 6.2-3.3 2.3-3.4 1.4-8.1-2.1-10.4l-96-64c-2.5-1.7-5.8-1.7-8.3 0l-96 64c-3.4 2.3-4.4 7-2.1 10.4 2.3 3.4 7 4.4 10.4 2.1l4.3-2.9V216h-17v-8.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v8.5h-17v-8.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v8.5h-17v-17.9c13.8-3.4 24-15.8 24-30.6 0-7.3-2.8-23.9-7.4-39.1-6.5-22.1-14.2-32.4-24-32.4s-17.5 10.3-24.1 32.4c-4.6 15.2-7.4 31.8-7.4 39.1 0 14.8 10.2 27.2 24 30.6V216h-17v-8.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v8.5h-17v-8.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v8.5H95v-25.5c27.1-3.7 48-26.9 48-55 0-14.1-5.4-46.4-14.4-76.1C116.5 19.4 103.1 0 87.5 0s-29 19.4-41.1 59.4c-9 29.7-14.4 62-14.4 76.1 0 28.1 20.9 51.3 48 55V216H63v-8.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v8.5H31v-8.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v8.5H7.5c-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5H16v25H7.5c-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5h448c4.1 0 7.5-3.4 7.5-7.5s-3.4-7.5-7.5-7.5M167 167.5c0-5.4 2.3-19.2 5.9-32 4.5-15.8 8.7-22.2 10.6-24.1 1.9 1.9 6.1 8.3 10.6 24.1 3.6 12.8 5.9 26.6 5.9 32 0 6.4-3.7 11.9-9 14.7v-6.7c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v6.7c-5.3-2.8-9-8.3-9-14.7m-120-32c0-12.7 5.3-43.7 13.7-71.8 4.6-15.1 9.6-27.6 14.6-36.2C80.6 18.3 85.1 15 87.5 15s6.9 3.3 12.2 12.5c5 8.6 10 21.1 14.6 36.2 8.5 28 13.7 59.1 13.7 71.8 0 19.8-14.2 36.3-33 39.8v-36.7l13.8-13.8c2.9-2.9 2.9-7.7 0-10.6-2.9-2.9-7.7-2.9-10.6 0l-3.2 3.2v-13.9c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v37.9l-3.2-3.2c-2.9-2.9-7.7-2.9-10.6 0-2.9 2.9-2.9 7.7 0 10.6L80 162.6v12.7c-18.8-3.5-33-20-33-39.8M272 256h-17v-25h17v25zm-32 0h-17v-25h17v25zm-32 0h-17v-25h17v25zm-32 0h-17v-25h17v25zm-32 0h-17v-25h17v25zm-32 0H95v-25h17v25zm-32 0H63v-25h17v25zm-49-25h17v25H31v-25zm256 25V136.8l72.5-48.3 72.5 48.3V256H287z"/><path d="M343.5 160h-32c-4.1 0-7.5 3.4-7.5 7.5v64c0 4.1 3.4 7.5 7.5 7.5h32c4.1 0 7.5-3.4 7.5-7.5v-64c0-4.1-3.4-7.5-7.5-7.5m-7.5 24h-17v-9h17v9zm-17 15h17v25h-17v-25zm88.5-39h-32c-4.1 0-7.5 3.4-7.5 7.5v64c0 4.1 3.4 7.5 7.5 7.5h32c4.1 0 7.5-3.4 7.5-7.5v-64c0-4.1-3.4-7.5-7.5-7.5m-7.5 24h-17v-9h17v9zm-17 15h17v25h-17v-25z"/></svg>
            <h3 class="title"><span>Exterieur 3d</span></h3>
            <p class="price"><span>+</span> <strong>100€</strong></p>
            <h4 class="subtitle"><span>options</span></h4>
            <ul class="options">
              <li>Aménagement personnalisé : <strong>+ 50€ **</strong></li>
              <li>Visite virtuelle : <strong>+ 100€</strong></li>
            </ul>
          </article>
        </div>
      </section>

      <section class="section-price render">
        <h2 class="section-price-title">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 39.2"><path d="M44.2 8h-6.8l-3.2-8H13.9l-3.2 8H9.6V4H4.8v4h-1C1.7 8 0 9.7 0 11.8v23.5c0 2.1 1.7 3.9 3.9 3.9h40.3c2.1 0 3.9-1.7 3.9-3.9V11.8C48 9.7 46.3 8 44.2 8M6.4 5.6H8V8H6.4V5.6zm40 29.7c0 1.3-1 2.3-2.3 2.3H3.9c-1.2 0-2.3-1-2.3-2.3V11.8c0-1.2 1-2.2 2.2-2.2h7.9l3.2-8H33l3.2 8h7.9c1.2 0 2.2 1 2.2 2.2v23.5z"/><path d="M24 7.2c-7.9 0-14.4 6.5-14.4 14.4S16.1 36 24 36s14.4-6.5 14.4-14.4S31.9 7.2 24 7.2m0 27.2c-7.1 0-12.8-5.7-12.8-12.8 0-7.1 5.7-12.8 12.8-12.8s12.8 5.7 12.8 12.8c0 7.1-5.7 12.8-12.8 12.8"/><path d="M24 12c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6S29.3 12 24 12m0 17.6c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8m17.6-18.4c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2 1.8 0 3.2-1.4 3.2-3.2 0-1.8-1.4-3.2-3.2-3.2m0 4.8c-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6"/></svg>
          <span>
            Nos Rendus
          </span>
        </h2>
        <div class="section-price-contenu">
        <article>
            <h3 class="title">Rendu photo</h3>
            <p class="price"><strong>20€</strong> <span>/ image</span></p>
            <p>Images de synthèse photoréalistes issu d’un plan 3D</p>
          </article>
          <article>
            <h3 class="title">Home staging</h3>
            <p class="price"><strong>40€</strong> <span>/ image</span></p>
            <p>A partir d’une photo / Home Staging en 3D</p>
          </article>
        </div>
      </section>

      <section class="section-price pack">
        <h2 class="section-price-title">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.8 74.9"><path d="M23 17.5c5 1.1 10.1 1.7 15.2 1.7s10.2-.6 15.2-1.7c.5-.1.9-.6.8-1.1C53.5 9.6 48.7 4 42.4 2.2V1c0-.6-.4-1-1-1s-1 .4-1 1v.8c-.7-.1-1.4-.2-2.2-.2-.7 0-1.5.1-2.2.2V1c0-.6-.4-1-1-1s-1 .4-1 1v1.2C27.9 4 23 9.6 22.3 16.5c-.1.5.2.9.7 1M34.1 4.3v3.1c0 .6.4 1 1 1s1-.4 1-1V3.8c.7-.1 1.4-.2 2.2-.2.7 0 1.5.1 2.2.2v3.6c0 .6.4 1 1 1s1-.4 1-1V4.3c4.9 1.6 8.8 6.1 9.7 11.5-9.1 1.9-18.6 1.9-27.8 0 .9-5.5 4.7-9.9 9.7-11.5m10.4 10.4c-2 .5-4.1.7-6.2.7-2.1 0-4.2-.2-6.2-.7-.5-.1-.9-.7-.8-1.2.1-.5.7-.9 1.2-.8 3.8.8 7.7.8 11.5 0 .5-.1 1.1.2 1.2.8.1.5-.2 1.1-.7 1.2m-22.9 7.4c0-.6.1-2.6 1.5-3.2 1.4-.5 2.8.9 3.1 1.2.4.4.4 1 0 1.4-.4.4-1 .4-1.4 0-.3-.3-.7-.6-.9-.7-.1.1-.2.5-.2 1.3-.1 3.5 2.6 4.4 2.6 4.4.3.1.6.4.6.7v.4c.8 9.1 8 12.1 11.3 12.1 3.4 0 10.6-2.9 11.3-12.1v-.4c.1-.3.3-.6.6-.7.1 0 2.7-1 2.6-4.4 0-.8-.2-1.2-.2-1.3-.2.1-.6.4-.9.7-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4.3-.3 1.7-1.7 3.1-1.2 1.4.5 1.5 2.5 1.5 3.2.1 3.5-1.9 5.4-3.4 6.1-1 9.3-8.3 13.4-13.3 13.4s-12.3-4.2-13.3-13.4c-1.3-.8-3.3-2.7-3.2-6.1m18.2-.2c-.3 0-.6.1-.8.3-.1.1-.1.1-.1.2h-1.3c0-.1-.1-.1-.1-.2-.2-.2-.5-.3-.8-.3h-7.9c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7 0 .9.2 4.1 1.6 5.2.9.7 2.2 1.2 3.6 1.2 1.3 0 2.3-.4 3-1.1.7-.8 1.2-2.4 1.5-3.7h1.6c.3 1.2.8 2.9 1.5 3.7.7.7 1.7 1.1 3 1.1s2.7-.4 3.6-1.2c1.4-1.1 1.5-4.3 1.6-5.2 0-.3-.1-.5-.3-.7-.2-.2-.4-.3-.7-.3h-8zm-5.3 4.8c-.3.3-.8.5-1.5.5-.9 0-1.8-.3-2.3-.7-.3-.3-.6-1.5-.8-2.7h5.6c-.2 1.2-.6 2.5-1 2.9m11.4-.2c-.5.4-1.5.7-2.3.7-.7 0-1.2-.2-1.5-.5-.4-.4-.8-1.7-1-2.9h5.6c-.2 1.3-.5 2.4-.8 2.7M70.8 42c-10 3.3-20.3 5-30.8 5.2v24.1c0 .6-.4 1-1 1s-1-.4-1-1V50.8c-7.6 0-15.2-.9-22.6-2.5-.1 0-.2 0-.2-.1-3.1-.7-6.3-1.6-9.4-2.6l.6 7.7c0 .6-.4 1-.9 1.1h-.1c-.5 0-1-.4-1-.9l-.7-9.2c0-.3.1-.7.4-.9.3-.2.6-.3.9-.2 3.3 1.1 6.6 2.1 10 2.8 2.1-3.4 5.6-6 10.3-7.7l-.1-1c0-.6.4-1 .9-1.1.5 0 1 .4 1.1.9l.3 4.3 3-1.1c.5-.2 1.1.1 1.3.6.2.5-.1 1.1-.6 1.3L27 43.7c-.1 0-.2.1-.3.1-.2 0-.4-.1-.6-.2-.3-.2-.4-.5-.4-.8l-.2-2.5c-3.8 1.4-6.5 3.4-8.4 6 6.9 1.4 13.8 2.2 20.9 2.2v-2.6c0-.5.4-1 1-1 5.9 0 11.8-.6 17.5-1.6-1.5-1.2-3.3-2.2-5.3-3l-.2 2.5c0 .3-.2.6-.4.8-.2.1-.4.2-.6.2-.1 0-.2 0-.3-.1l-4.2-1.5c-.5-.2-.8-.8-.6-1.3s.8-.8 1.3-.6l3 1.1.3-4.3c0-.6.5-1 1.1-.9.6 0 1 .5.9 1.1l-.1 1c3.1 1.1 5.7 2.7 7.7 4.6 4.2-.9 8.4-2 12.5-3.4.3-.1.7-.1.9.1.3.2.4.5.4.8L72.2 54c0 .6-.5 1-1 1-.6 0-1-.5-1-1l.6-12zm4.8 15.5c-.9-.9-2.3-1.3-4.3-1.3s-3.4.4-4.3 1.3c-1.2 1.2-1.2 2.9-1.2 4.4v6.9c0 3 2.4 5.5 5.5 5.5 3 0 5.4-2.4 5.4-5.5v-6.9c.1-1.5.1-3.2-1.1-4.4m-.8 4.4v7c0 1.9-1.5 3.5-3.5 3.5-1.4 0-2.6-.8-3.1-2h2c.6 0 1-.4 1-1s-.4-1-1-1h-2.3v-1.7h2.3c.6 0 1-.4 1-1s-.4-1-1-1h-2.3v-1.8h2.3c.6 0 1-.4 1-1s-.4-1-1-1h-2.3c0-.7.2-1.4.6-1.8.5-.5 1.5-.7 2.9-.7s2.4.2 2.9.7c.5.4.5 1.6.5 2.8m-69-6.4c-2.1 0-3.6.5-4.6 1.4C0 58.2 0 60 0 61.6v7.5c0 3.2 2.6 5.8 5.8 5.8s5.8-2.6 5.8-5.8v-7.5c0-1.6 0-3.4-1.2-4.7-1-.9-2.5-1.4-4.6-1.4m0 17.4c-2.1 0-3.8-1.7-3.8-3.8v-7.5c0-1.3 0-2.6.7-3.3.5-.5 1.6-.8 3.1-.8s2.6.3 3.1.8.6 1.2.7 2.1H7c-.6 0-1 .4-1 1s.4 1 1 1h2.6v2.1H7c-.6 0-1 .4-1 1s.4 1 1 1h2.6v2H7c-.6 0-1 .4-1 1s.4 1 1 1h2.3c-.5 1.4-1.9 2.4-3.5 2.4"/></svg>
          <span>
            Nos Packs
          </span>
        </h2>
        <div class="section-price-contenu">
        <article>
            <h3 class="title">Pack 50 pièces</h3>
            <p class="price"><strong>9€</strong> <span>/ Pièce</span><br><span class="discount">450€ au lieu de 500€</span></p>
          </article>
          <article>
            <h3 class="title">Pack 100 pièces</h3>
            <p class="price"><strong>8€</strong> <span>/ Pièce</span><br><span class="discount">800€ au lieu de 1000€</span></p>
          </article>
        </div>
      </section>

      <section class="section-price subscription">
        <h2 class="section-price-title">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 431 463"><path d="M382.9 333.6l-73.2-18.3-.9-1.2-21.8-21.7v-20.9c1.8-1.8 3.6-3.8 5.3-5.8 20.3-23.5 32.6-55.1 34.4-89.1.1-1.4.1-2.7.2-4.1.2-4.5.4-8.7.9-13l7.2-72.2c2.2-22.3-5.1-44.6-20.2-61.3-15-16.5-36.4-26-58.9-26H175c-22.4 0-43.9 9.5-58.9 26.2S93.7 65.1 96 87.4l7.2 72.1c.4 4.3.6 8.6.9 13.1.1 1.3.1 2.7.2 4 1.9 34 14.1 65.6 34.4 89.1 1.7 2 3.5 3.9 5.3 5.8v20.9l-21.8 21.8c-.3.3-.6.7-.9 1.1l-73.2 18.3C17.1 341.4 0 360.4 0 387.2v52.3c0 13 10.5 23.5 23.5 23.5h384c13 0 23.5-10.5 23.5-23.5v-52.3c0-26.8-17.1-45.8-48.1-53.6zM207.5 415h16c.6 0 1.1 0 1.7-.1l5.6 33.1h-30.6l5.6-33.1c.6.1 1.1.1 1.7.1zm24.5-23.5c0 4.7-3.8 8.5-8.5 8.5h-16c-4.7 0-8.5-3.8-8.5-8.5v-12l16.5-11 16.5 11v12zm-73-107.1c17 12.1 36.4 18.6 56.5 18.6s39.5-6.5 56.5-18.6v8l-56.5 56.5-56.5-56.5v-8zm84.7 84.9l-16.4-11 52.2-52.2 14.7 14.7c-5 9-16.6 29.9-33.1 59.5 0 .1-.1.2-.3.2-.2.1-.4 0-.4-.1l-16.7-11.1zM127.2 36.2C139.4 22.7 156.9 15 175.1 15H256c18.2 0 35.6 7.7 47.8 21.2C316 49.7 322 67.8 320.2 85.9l-4.6 45.7c-10.1-24.2-21.3-39.6-22-40.5-2.4-3.3-6.9-4-10.3-1.8-19.7 13.5-107.5 15.2-139.7 14.7-2.2 0-4.2.9-5.7 2.5-9.2 10.3-16.4 21.8-21.8 31.9l-5.2-52.5c-1.8-18.1 4.1-36.2 16.3-49.7zm-8 139.7c-.1-1.3-.1-2.7-.2-4 0-.9-.1-1.8-.1-2.8 1.6-4.6 11-29.9 28-50.1 20.8.2 105.5 0 138.1-13.8 6.4 10.1 20 33.9 27.1 63.7-.1 1-.1 1.9-.2 2.9-.1 1.3-.1 2.7-.2 4C308.3 238.7 266 288 215.5 288s-92.8-49.3-96.3-112.1m32.3 130.2l52.2 52.2-16.4 10.9-16.7 11.2s-.2.1-.4.1-.2-.2-.3-.2c-16.5-29.6-28.1-50.6-33.1-59.5l14.7-14.7zM15 439.5v-52.3c0-19.8 12.4-33 36.7-39.1l73-18.2c4.3 7.8 13.3 23.9 32 57.7 2.1 3.8 5.7 6.5 9.9 7.5 1.2.3 2.4.4 3.6.4 3 0 6.1-.9 8.6-2.6l5.1-3.4v2c0 6.9 3 13 7.7 17.3L185 448H87v-40.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5V448H23.5c-4.7 0-8.5-3.8-8.5-8.5m401 0c0 4.7-3.8 8.5-8.5 8.5H359v-40.5c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5V448h-98l-6.7-39.2c4.7-4.3 7.7-10.5 7.7-17.3v-2l5.1 3.4c2.6 1.7 5.6 2.6 8.6 2.6 1.2 0 2.4-.1 3.6-.4 4.2-1 7.8-3.7 9.9-7.5 18.7-33.7 27.7-49.8 32-57.6l73 18.2c24.4 6.1 36.7 19.2 36.7 39.1v52.2z"/></svg>
          <span>
            Nos Abonnements
          </span>
        </h2>
        <div class="section-price-contenu">
        <article>
            <h3 class="title">Easy plan 3d</h3>
            <p class="price"><strong>100€</strong> <span>/ mois</span></p>
            <p class="desc">Jusqu’à 15 pièces/mois <br> (Soit moins de 7€/pièce)</p>
          </article>
          <article>
            <h3 class="title">Staging 3d</h3>
            <p class="price"><strong>120€</strong> <span>/ mois</span></p>
            <p class="desc">jusqu’à 3 HOME STAGING <br> (Soit 40€/PROJET)</p>
          </article>
        </div>
      </section>

      <div class="section-price">
        <div class="mentions">
          <p>* 1 pièce = 1 fonction = dans la limite de 40m2 hors WC, dégagements et couloirs, extérieur = dans la limite de 500m2 / ambiance prédéfinie au choix</p>
          <p>** Aménagements particuliers hors ambiances prédéfinies</p>
          <p>Minimum de commande de 3 pièces/projet  images livrées en Full HD (1920*1080 Pixels)
          (Tous les prix affichés sont en HT)</p>
          <p><a class="button download-btn" href="#">Téléchargez le bon de commande</a></p>
        </div>
      </div>

      @include('partials.content-page')
    </div>

  @endwhile
@endsection

@extends('layouts.login')

@section('content')
<style>
	.mdl-layout__container {
		position: relative;
	}
	a:link 
    { 
     text-decoration:none; 
    } 
</style>

<div class="mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <div class="page-ribbon mdl-color--primary"></div>
      <main class="page-main mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="page-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
			
			<!-- Left aligned menu below button -->
            <button id="demo-menu-lower-left"
                    class="mdl-button mdl-js-button mdl-button--icon">
              <i class="material-icons">language</i>
            </button>
            
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                for="demo-menu-lower-left">
              <li class="mdl-menu__item">
              	<a href="{{url('/')}}/web-pages/lang/en">{!!Lang::get('general.en')!!}</a>
              </li>
              <li class="mdl-menu__item">
              	<a href="{{url('/')}}/web-pages/lang/pt-br">{!!Lang::get('general.pt-br')!!}</a>
              </li>
            </ul>
            
			@yield('contentpage')

          </div>
        </div>
      </main>
    </div>
@endsection
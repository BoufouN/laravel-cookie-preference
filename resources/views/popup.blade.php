<link rel="stylesheet" type="text/css" href="{{asset('vendor/cookie-preference/css/lcp.css')}}">

<div id="lcp-popup" role="dialog" aria-labelledby="clp-popup-aria-label" aria-describedby="clp-popup-aria-description">
	<div class="lcp-popup-message">
		<div class="lcp-popup-heading">
			<span id="lcp-popup-aria-label">{{trans('cookie-preference:popup.title')}}</span>
		</div>
		<p id="lcp-popup-aria-description">{{trans('cookie-preference:popup.description')}}</p>
	</div>
	<div class="lcp-popup-actions">
		<div class="lcp-popup-action lcp-popup-action-accept">
			<a title="{{trans('cookie-preference:popup.accept_and_continue')}}"
			href="{{ route('cookie-preference.update', ['types' => array_keys(config('cookie-preference.cookie_groups'))])
			}}
			">
			{{trans('cookie-preference:popup.accept_and_continue')}}
		</a>
		</div>
		<div class="lcp-popup-action lcp-popup-action-manage">
			<a title="{{trans('cookie-preference:popup.manage_cookies')}}" href="{{route('cookie-preference.manage')}}">{{trans('cookie-preference:popup.manage_cookies')}}</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('vendor/cookie-preference/js/lcp.js')}}"></script>
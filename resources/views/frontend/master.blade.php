<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>২নং দক্ষিণ ধুরুং ইউনিয়ন পরিষদ</title>
<base ><meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('new_frontend') }}/aup/assets/img/favicon.png">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/normalize.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/icomoon.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/animate.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/prettyPhoto.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/owl.carousel.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/owl.theme.default.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/transitions.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/main.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/color.css">
<link rel="stylesheet" href="{{ asset('new_frontend') }}/css/responsive.css">
<script src="{{ asset('new_frontend') }}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homeone">
	<div id="tg-wrapper" class="tg-wrapper">
		<link href="{{ asset('new_frontend') }}/fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
        @include('frontend.body.header')
        @yield('content')
		@include('frontend.body.footer')
	</div>
<script src="{{ asset('new_frontend') }}/js/vendor/jquery-library.js"></script>
<script src="{{ asset('new_frontend') }}/js/vendor/bootstrap.min.js"></script>
<script>
    // Disable right-click context menu
    <!--document.addEventListener('contextmenu', function (e) {-->
    <!--    e.preventDefault();-->
    <!--});-->

    // Disable function keys (F1-F12)
    <!--document.addEventListener('keydown', function (e) {-->
    <!--    // Check if the pressed key is an F1 through F12 key-->
    <!--    if (e.key.startsWith('F') && !isNaN(e.key.substring(1))) {-->
    <!--        e.preventDefault(); // Prevent the default action-->
    <!--    }-->
    <!--});-->

    // Disable any key combination with Ctrl and prevent text selection
    <!--document.addEventListener('keydown', function (e) {-->
    <!--    // Check if the Ctrl key is pressed-->
    <!--    if (e.ctrlKey || e.metaKey) {-->
    <!--        e.preventDefault(); // Prevent the default action-->

    <!--        // Additionally, prevent text selection-->
    <!--        if (window.getSelection) {-->
    <!--            window.getSelection().removeAllRanges();-->
    <!--        } else if (document.selection) {-->
    <!--            document.selection.empty();-->
    <!--        }-->
    <!--    }-->
    <!--});-->

</script>

<script src="{{asset('new_frontend')}}/js/vendor/jquery-library.js"></script>
<script src="{{asset('new_frontend')}}/js/vendor/bootstrap.min.js"></script>
<script src="{{asset('new_frontend')}}/js/mapclustering/data.json"></script>
<script src="{{asset('new_frontend')}}/js/mapclustering/markerclusterer.min.js"></script>
<script src="{{asset('new_frontend')}}/js/mapclustering/infobox.js"></script>
<script src="{{asset('new_frontend')}}/js/mapclustering/map.js"></script>
<script src="{{asset('new_frontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('new_frontend')}}/js/isotope.pkgd.js"></script>
<script src="{{asset('new_frontend')}}/js/prettyPhoto.js"></script>
<script src="{{asset('new_frontend')}}/js/countdown.js"></script>
<script src="{{asset('new_frontend')}}/js/collapse.js"></script>
<script src="{{asset('new_frontend')}}/js/moment.js"></script>
<script src="{{asset('new_frontend')}}/js/gmap3.js"></script>
<script src="{{asset('new_frontend')}}/js/main.js"></script>
</body>
<script>
$(document).ready(function() {
    // Add new item
    $(document).on('click', '[data-add]', function() {
        var newRow = $(this).closest('tr').clone();
        newRow.find('input').val(''); // clear inputs in the cloned row
        $(this).closest('tbody').append(newRow);
    });

    // Remove item
    $(document).on('click', '[data-remove]', function() {
        if ($(this).closest('tbody').find('tr').length > 1) { // Prevent removing if only one row left
            $(this).closest('tr').remove();
        } else {
            alert("You cannot remove the last item.");
        }
    });

    // Example move functionality would need more specific logic depending on the needs
});
</script>
</html>
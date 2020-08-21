<!DOCTYPE html>
<html>
<head>
    <title>@if(!empty($title)) {{ $title }} @endif</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <script>var BASE_URL = "{{ url('') }}/";</script>
</head>
<body>
<header>
@include('inc.nav')<!-- call nav.blade.php from inc -->
</header>
<br><br>
<main>
    <div class="container">
        <div class="col-md-12">
            <h2 class="text-center"><i>B</i>-Hatikvah Consulting & Investments</h2>
        </div>
    @include('inc.sm') <!-- call sm alert from the folder views/inc -->
    <!--Errors validations on top of the signin page
        @if ($errors->any())
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger">
              <ul>
@foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                  @endforeach
            </ul>
          </div>
        </div>
      </div>
@endif
        End of Errors validation -->
        @yield('content')
    </div>
</main>
<hr>
<footer>
    <div id="google_translate_element"></div>

    <div class="container">
        <div class="col-md-12">
            <p class="text-center"><b><i>B</i>-HCI</b> ** B-Hatikvah Consulting & Investiments &copy 2019
                - {{date('Y')}} Designed by JMBA</p>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript">
    <
    script
    type = "text/javascript"
    src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" ></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }

    function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
            event = document.createEvent('HTMLEvents');
            event.initEvent(eventName, true, true);
            element.dispatchEvent(event);
        } else {
            event = document.createEventObject();
            event.eventType = eventName;
            element.fireEvent('on' + event.eventType, event);
        }
    }

    function changeLanguage(lang) {
        var trans = jQuery('select.goog-te-combo');
        trans.val(lang)
        trans.change();
        triggerHtmlEvent(trans[0], 'change')
    }

    $('.lang').on('click', function () {
        var lang = $(this).data('lang');
        changeLanguage(lang);
        return false;
    })
</script>
<style>
    .skiptranslate {
        display: none;
    }
</style>
</body>
</html>


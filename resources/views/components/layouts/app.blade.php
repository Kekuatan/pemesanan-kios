<div>
    <head>
        <link href="{{ asset('css/base.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="{{ asset('css/font-bg-custom-css.css') }}" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
        @livewireStyles

        <style>
            @font-face {
                font-family: mazeletter;
                src: url({{ asset('/font/mazeletter-path.woff') }}) format('woff'),
                url({{asset('/font/mazeletter-path.woff2') }}) format('woff2');
            url('font/mazeletter-path.ttf')format('truetype');
            }

            #demo-modal{
                width: 100%;
            }
            .alertify-notifier {
                color: white;
                font-size: 14px;
                text-align: center;
                font-weight: bolder;
                letter-spacing: 2px;
                text-transform: uppercase;
                font-family: Arial;
            }

            .modal {
                visibility: hidden;
                opacity: 0;
                width: 100%;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(77, 77, 77, .7);
                transition: all .4s;
            }

            .modal:target {
                visibility: visible;
                opacity: 1;
            }

            .modal__content {
                border-radius: 4px;
                position: relative;
                width: 500px;
                max-width: 90%;
                background: #fff;
                padding: 1em 2em;
            }

            .modal__footer {
                text-align: right;
            }
            .modal__close {
                position: absolute;
                top: 10px;
                right: 10px;
                color: #585858;
                text-decoration: none;
            }
        </style>


    </head>
    <body dir="ltr">
    {{ $slot }}

    @livewireScripts
    <script type="text/javascript" src="{{ asset('js/bootstrap-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
    <p id="tester-trim" class="quilt trim">
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>

        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>

        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>

        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>

        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>
        <span>
            aednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaednaedn<br>
        </span>


    </p>

    <script>
        function ExportToExcel(id, fn, dl) {
            var elt = document.getElementById(id);
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: 'xlsx', bookSST: true, type: 'base64' }):
                XLSX.writeFile(wb, fn || ('MySheetName.' + ('xlsx')));
        }
    </script>
</div>




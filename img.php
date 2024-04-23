<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <script src="src/images-grid.js"></script>
        <link rel="stylesheet" href="src/images-grid.css">

        <style>
        body { background-color:#fafafa;}
            p {
                text-align: center;
                font-weight: bold;
                font-family: sans-serif;
            }
            h1 { text-align:center; margin-top:50px;}
        </style>

    </head>
    <body>
<h1>jQuery images-grid Plugin Demo</h1>

<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
        <p>More than five images</p>
        <div id="gallery1"></div>


        <script>

            var images = [
                'Kaelco Logo.jpg',
                'Kaelco Logo.jpg',
                'Kaelco Logo.jpg',
                'Kaelco Logo.jpg',
                'Kaelco Logo.jpg',
                'https://unsplash.it/1300/800?image=838'
            ];

            $(function() {

                $('#gallery1').imagesGrid({
                    images: images
                });
              
               

            });

        </script>

    </body>
</html>

<!doctype html>
<html lang="en">
  <head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="zHIJzSY1xOCZ5mPr8i3u8qoXt1I0rp2ijkKWlsBB">

    <link name="favicon" type="image/x-icon" href="https://eshop.co.bd/public/uploads/favicon/IqkT5iIdDuw9doSwX2zVbK9I2AMi5yyviLCPfFaD.png" rel="shortcut icon" />

    <title>Eshop.co.bd | Best water filter solution in Bangladesh</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="https://eshop.co.bd/public/css/bootstrap.min.css" rel="stylesheet">

    <!--active-shop Stylesheet [ REQUIRED ]-->
    <link href="https://eshop.co.bd/public/css/sm-shop.min.css" rel="stylesheet">

	<!--active-shop Premium Icon [ DEMONSTRATION ]-->
    <link href="https://eshop.co.bd/public/css/demo/active-shop-demo-icons.min.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="https://eshop.co.bd/public/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- <link href="https://eshop.co.bd/public/css/themes/type-full/theme-dark-full.min.css" rel="stylesheet"> -->
    <link href="https://eshop.co.bd/public/css/themes/type-c/theme-navy.min.css" rel="stylesheet">


    <!--Custom Stylesheet [ REQUIRED ]-->
    <link href="https://eshop.co.bd/public/css/custom.css" rel="stylesheet">



    <!--Custom JavaScript [ REQUIRED ]-->
    <script src="https://eshop.co.bd/public/js/custom.js"></script>
  </head>
  <body>
    <div class="container py-5">
        <div class="row">
            <h2 class="fs-4 fw-bold text-center mb-5">
               Google Analytics <br><br>
                Total Visits : {{ $totalViews }}
            </h2>
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold">
                            Visitors and Page Views
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th style="width: 65%">Page</th>
                                        <th style="width: 15%">Active Users</th>
                                        <th style="width: 15%">Page views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($visitorsAndPageViews as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data['pageTitle'] }}</td>
                                        <td>{{ $data['activeUsers'] }}</td>
                                        <td>{{ $data['screenPageViews'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold">
                            Total Visitors and Pageviews
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th style="width: 65%">Date</th>
                                        <th style="width: 15%">Active Users</th>
                                        <th style="width: 15%">Page views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($totalVisitorsAndPageViews as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data['date'] }}</td>
                                        <td>{{ $data['activeUsers'] }}</td>
                                        <td>{{ $data['screenPageViews'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold">
                            Most Visited Pages
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th style="width: 45%">Page</th>
                                        <th style="width: 35%">URL</th>
                                        <th style="width: 15%">Page views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mostVisitedPages as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data['pageTitle'] }}</td>
                                        <td>{{ $data['fullPageUrl'] }}</td>
                                        <td>{{ $data['screenPageViews'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold">
                            Top Referrers
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th style="width: 65%">Page Referrer</th>
                                        <th style="width: 30%">Page views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($topReferrers as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data['pageReferrer'] }}</td>
                                        <td>{{ $data['screenPageViews'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold">
                            User Types
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th style="width: 65%">Type</th>
                                        <th style="width: 30%">Active Users</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($userTypes as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data['newVsReturning'] }}</td>
                                        <td>{{ $data['activeUsers'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="fs-5 fw-bold">
                            Top Browsers
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No.</th>
                                        <th style="width: 65%">Browser</th>
                                        <th style="width: 30%">Page Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($topBrowsers as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data['browser'] }}</td>
                                        <td>{{ $data['screenPageViews'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

@include('shared.styles',['title' => 'Past Candidates','description'=>'Miss Career Africa'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax-1" style="background-image: url(images/vots.jpeg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <!-- <h1 class="text-center">Become a volunteer</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    <div class="row">
                    @foreach($candidates as $candidate)
                    <div class="col-md-4">
                            <div class="card border-success mb-3" style="max-width: 100%">
                            <div class="card-header bg-transparent border-success"><b>{{$candidate->fname}} {{$candidate->lname}}</b></div>
                           
                           
                        </div>
                  </div>
                  @endforeach

                    </div>
                  
                </div>

            </div>
        </div>
        @include('shared.footer')

</body>

</html>

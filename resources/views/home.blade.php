@extends('layouts.app')

@section('content')
    <div id="body">
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @for($i=count($posts)-1;$i>count($posts)-4;$i--)
                @if($i=count($posts)-1)
                    <div class="item active">
                        <img src="img/{{ $posts[$i]->image }}" alt="Image">               
                        <div class="carousel-caption">
                            <h3>Slide 1</h3>
                            <p>{{ $posts[$i]->title }}</p>
                        </div>      
                    </div>
                @endif

                @if($i=count($posts)-2)
                    <div class="item ">
                        <img src="img/{{ $posts[$i]->image }}" alt="Image">               
                        <div class="carousel-caption">
                            <h3>Slide 2</h3>
                            <p>{{ $posts[$i]->title }}</p>
                        </div>      
                    </div>
                @endif

                @if($i=count($posts)-3)
                    <div class="item">
                        <img src="img/{{ $posts[$i]->image }}" alt="Image">               
                        <div class="carousel-caption">
                            <h3>Slide 3</h3>
                            <p>{{ $posts[$i]->title }}</p>
                        </div>      
                    </div>
                @endif
            @endfor
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- //banner -->
    <div class="container">
        <div class="team agileits-w3layouts" id="team"><br><br>
            <h4 class="w3ls-inner-title">Bệnh lý</h4>
            <div class="team-w3ls">
                
                @for($i=count($posts)-1;$i>count($posts)-7;$i--)
                <div class="col-md-6 col-sm-6 col-xs-6 team-grid w3_agileits">
                    <a href="{{ route("posts.show", $posts[$i]->id) }}"><img class="col-md-3 img-w3l t1-wthree img-responsive" src="img/{{ $posts[$i]->image }}" alt=""></a>
                    <div class="col-md-9 team-w3ls-txt">
                        <a href="{{ route("posts.show", $posts[$i]->id) }}"><h5 class="h-t">{{$posts[$i]->title }}</h5></a>
                        <p>{{ mb_substr($posts[$i]->content,0,100-2,'UTF-8').'...' }}</p>
                    </div>  
                    <div class="clearfix"> </div>
                </div>
                @endfor
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-link btn-right">Xem thêm...</a>
                </div>
                <div class="clearfix"> </div>
            </div>  

        </div>
        <!-- //team--> 
    </div>

    <!-- ---Cau hoi moi--- -->
    <div class="container">
        <div class="team agileits-w3layouts" id="team"><br><br>
            <h4 class="w3ls-inner-title">Câu hỏi mới</h4>
            <div class="post-media">
                <div class="blog-text">
                    <a href="#"><h5 class="h-t">Tiêu đề câu hỏi</h5></a>
                    <div class="entry-meta">
                        <h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2017</h6>
                        <div class="icons">
                            <a href="#"><i class="fa fa-user"></i> Admin</a>
                            <a href="#"><i class="fa fa-comments-o"></i> 2</a>
                        </div>
                        <div class="clearfix"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
                    </div>
                </div>
                <div class="blog-text">
                    <a href="#"><h5 class="h-t">Tiêu đề câu hỏi</h5></a>
                    <div class="entry-meta">
                        <h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2017</h6>
                        <div class="icons">
                            <a href="#"><i class="fa fa-user"></i> Admin</a>
                            <a href="#"><i class="fa fa-comments-o"></i> 2</a>
                        </div>
                        <div class="clearfix"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
                    </div>
                </div>
                <div class="blog-text">
                    <a href="#"><h5 class="h-t">Tiêu đề câu hỏi</h5></a>
                    <div class="entry-meta">
                        <h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2017</h6>
                        <div class="icons">
                            <a href="#"><i class="fa fa-user"></i> Admin</a>
                            <a href="#"><i class="fa fa-comments-o"></i> 2</a>
                        </div>
                        <div class="clearfix"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="#" class="btn btn-link btn-right">Xem thêm...</a>
            </div>
        </div>
    </div>
    <!-- ---/Cau hoi moi--- -->
    </div> <!-- end body -->
@endsection

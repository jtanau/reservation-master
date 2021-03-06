@extends('layouts.goodentete')

@section('content')
<div id="wrapper">
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside>
                        <div class="widget">
                            <h4 class="rheading">Nos Reservations<span></span></h4>
                            <ul class="cat">
                                <li><a href="{{url('/logement')}}">Logement</a></li>
                                <li><a href="{{url('/hopitql')}}">Hopital</a></li>
                                <li><a href="{{url('/restaurant')}}">Restaurant</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="rheading">Recent posts<span></span></h4>
                            <ul class="recent-posts">
                                <li><a href="#">Lorem ipsum dolor sit amet munere commodo ut nam</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 4 Comments</span>
                                </li>
                                <li><a href="#">Sea nostrum omittantur ne mea malis nominavi insolens</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 2 Comments</span>
                                </li>
                                <li><a href="#">Eius graece recusabo no pri odio tale quo id, mea at saepe</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 4 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 12 Comments</span>
                                </li>
                                <li><a href="#">Malorum deserunt at nec usu ad graeco elaboraret at rebum</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 3 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 3 Comments</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="rheading">Post tags<span></span></h4>
                            <ul class="tags">
                                <li><a href="#" class="btn">Tutorial</a></li>
                                <li><a href="#" class="btn">Tricks</a></li>
                                <li><a href="#" class="btn">Design</a></li>
                                <li><a href="#" class="btn">Trends</a></li>
                                <li><a href="#" class="btn">Online</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="span8">
                    <!-- start article 1 -->
                    <article class="blog-post">
                        <div class="post-heading">
                            <h3><a href="{{url('/logement/residence').'?sel='.$log->reference}}">{{$log->designation}}</a></h3>
                        </div>
                        <div class="row">
                            <div class="span8">
                              {{--  <ul class="post-meta">
                                    <li class="first"><i class="icon-calendar"></i><span>Mar 13, 2013</span></li>
                                    <li><i class="icon-comments"></i><span><a href="#">4 comments</a></span></li>
                                    <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li>
                                </ul>--}}
                                <div class="clearfix">
                                </div>
                                <p>
                                <div class="post-heading">
                                    <h3>{{$app->libelle}}</h3>
                                </div>
                                <div class="row">
                                    <div class="span8">
                                        <div class="post-image">
                                            <section id="intro">

                                                <!-- Place somewhere in the <body> of your page -->
                                                <div id="mainslider" class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                                                            <img src="{{asset('assets/img/slides/flexslider/img1.jpg')}}" alt="" />
                                                            <div class="flex-caption primary">
                                                                <h2>Bootstrap</h2>
                                                                <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                                            </div>
                                                        </li>
                                                        <li data-thumb="assets/img/slides/flexslider/img2.jpg">
                                                            <img src="{{asset('assets/img/slides/flexslider/img2.jpg')}}" alt="" />
                                                            <div class="flex-caption warning">
                                                                <h2>Responsive layout</h2>
                                                                <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                                            </div>
                                                        </li>
                                                        <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                                                            <img src="{{asset('assets/img/slides/flexslider/img3.jpg')}}" alt="" />
                                                            <div class="flex-caption success">
                                                                <h2>Rich of features</h2>
                                                                <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>
                                        <ul class="post-meta">
                                            <li class="first"><i class="icon-calendar"></i><span>Mar 13, 2013</span></li>
                                            <li><i class="icon-comments"></i><span><a href="#">    {{$app->commentaire}}</a></span></li>
                                            <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li>
                                        </ul>
                                        <div class="clearfix">
                                        </div>
                                        <p>
                                        @auth

                                                <a href="{{route('')}}" class="btn">Choisir Ma plage</a>
                                        @else
                                            <a class="btn" href="{{ route('login') }}">Reserver</a>
                                            @endif
                                        </p>
                                    </div>
                                </p>
                            </div>

                        </div>

                    <article class="blog-post">

                    </article>

                    <!-- end article 1 -->
                </div>

                </div>
        </div>
    </section>
    <!-- Footer
 ================================================== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="widget">
                        <h5>Interesting pages</h5>
                        <ul class="regular">
                            <li><a href="#">About our company</a></li>
                            <li><a href="#">How we do all stuff</a></li>
                            <li><a href="#">Our recent works</a></li>
                            <li><a href="#">Press releases</a></li>
                            <li><a href="#">Get in touch with us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5>Flickr photostream</h5>
                        <div class="flickr-badge">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5>How to find us</h5>
                        <address>
                            <i class="icon-home"></i> <strong>Lumia company, Inc.</strong><br>
                            X104 Awesome ville, Suite AB12<br>
                            Jakarta 12420 Indonesia
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-8890<br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                    <div class="widget">
                        <ul class="social">
                            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square icon-32"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="verybottom">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <p>
                            &copy; Lumia - All right reserved
                        </p>
                    </div>
                    <div class="span6">
                        <div class="pull-right">
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                                -->
                                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end wrapper -->
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('assets/js/jquery.elastislide.js')}}"></script>
<script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/jquery-hover-effect.js')}}"></script>
<script src="{{asset('assets/js/animate.js')}}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $(function () {
        // Initialisation des DateTimePicker
        $('.date').datetimepicker({ locale: 'fr', format: 'LT' });

        // Initialisation index pour ??tiquettes
        var index = {{ $index }};

        // Suppression d'une ligne de r??ponse (utilisation de "on" pour g??rer les boutons cr????s dynamiquement)
        $(document).on('click', '.btn-danger', function(){
            $(this).parents('.ligne').remove();
        });

        // Ajout d'une ligne de plage horaire
        $('.add_plage').click(function() {
            var html = '<div class="ligne">\n'
                + '<div class="row form-group">\n'
                + '<div class="col-sm-10">\n'
                + '<label for="start' + index++ + '" class="col-sm-4 control-label">Heure de d??but :</label>\n'
                + '<div class="col-sm-8 input-group date">\n'
                + '<input class="form-control" name="start[' + $(this).attr("id") + '][]" id ="' + index++ + '" type="text">\n'
                + '<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>\n'
                + '</div></div></div>\n'
                + '<div class="row form-group">\n'
                + '<div class="col-sm-10">\n'
                + '<label for="end' + index++ + '" class="col-sm-4 control-label">Heure de fin :</label>\n'
                + '<div class="col-sm-8 input-group date">\n'
                + '<input class="form-control" name="end[' + $(this).attr("id") + '][]" id ="' + index++ + '" type="text">\n'
                + '<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>\n'
                + '</div></div>\n'
                + '<div class="col-sm-2"><button type="button" class="btn btn-danger">Supprimer</button></div></div>\n'
                + '</div>\n';
            $(this).parents('.panel').find('.panel-body').append(html);
            $('.date').datetimepicker({ locale: 'fr', format: 'LT' });
        });

        // Soumission
        $(document).on('submit', 'form', function(e) {
            e.preventDefault();
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json"
            })
                .done(function(data) {
                    window.location.href = '{!! url('restaurant') !!}';
                })
                .fail(function(data) {
                    var obj = data.responseJSON;
                    // Nettoyage pr??liminaire
                    $('.help-block').text('');
                    $('.form-group').removeClass('has-error');
                    $('.alert').addClass('hidden');
                    // Balayage de l'objet
                    $.each(data.responseJSON, function (key, value) {
                        // Traitement du nom
                        if(key == 'name') {
                            $('.help-block').eq(0).text(value);
                            $('.form-group').eq(0).addClass('has-error');
                        }
                        // Traitement des erreurs des plages horaires
                        else {
                            $('.alert').removeClass('hidden');
                        }
                    });
                });
        });
    });
</script>
@endsection

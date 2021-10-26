<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site web</title>
</head>
<body>
    <section class="baniere" id="baniere">
        <div class="logo">
            <!-- <img src="./image/logo.png" alt=""> -->
        </div>
        <div class="baniere-text">
            <h1>Artem Agency</h1>
            <p>La meiileure Entreprise Pour La Prise d'un Rendez-Vous</p>
        </div>
        <div class="baniere_btn">
            <a href="#service"> <span></span> Prise un rendez-vous</a>
            <!-- <a href="#"> <span></span> Savoir Plus</a> -->
            @auth
                <a class="dropdown-item" href="#.">
                    <form method="post" action="{{route('logout')}}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    @csrf
                        <i class="mr-50" data-feather="power"></i> Logout
                    </form>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth

            @guest
                <a href="{{ route('is_login') }}">Login/Register</a>
            @endguest
        </div>
    </section>

    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="#baniere">Accueil</a></li>
                <li><a href="#mission">Notre Mission</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#temoignage">Temoignage</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="btn-menu">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </div>

    <section class="mission" id="mission">
        <div class="titre-text">
            <p>MISSION</p>
            <h1>Pourquoi Nous?</h1>
        </div>
        <div class="mission_boite">
            <div class="missions">
                <h1>Mission Title</h1>
                <div class="description">
                    <div class="mission_icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mission-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis commodi distinctio ipsam nulla, ducimus omnis fugit eum. Aliquam quam ut quibusdam iusto iste eaque! Quasi laboriosam iure dolorem ratione dolores!</p>
                    </div>
                </div>
                <h1>Mission Title</h1>
                <div class="description">
                    <div class="mission_icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mission-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis commodi distinctio ipsam nulla, ducimus omnis fugit eum. Aliquam quam ut quibusdam iusto iste eaque! Quasi laboriosam iure dolorem ratione dolores!</p>
                    </div>
                </div>
                <h1>Mission Title</h1>
                <div class="description">
                    <div class="mission_icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mission-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis commodi distinctio ipsam nulla, ducimus omnis fugit eum. Aliquam quam ut quibusdam iusto iste eaque! Quasi laboriosam iure dolorem ratione dolores!</p>
                    </div>
                </div>
                <!-- <h1>Credit Immobilier</h1> -->
                <!-- <div class="description">
                    <div class="mission_icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="mission-text">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis commodi distinctio ipsam nulla, ducimus omnis fugit eum. Aliquam quam ut quibusdam iusto iste eaque! Quasi laboriosam iure dolorem ratione dolores!</p>
                    </div>
                </div> -->
            </div>
            <div class="im-mission">
            </div>
        </div>
    </section>


    <section class="service" id="service">
        <div class="titre-text">
            <p>SERVICE</p>
            <h1>Notre Services</h1>
        </div>
        <div class="service_boite">
            @foreach ($categories as $category)
            <div class="service_unique">
                <a href="{{ url('view-category/'.$category->name) }}">
                <img src="{{ asset($category->image)}}" alt="">
                <div class="text_sur">
                    <div class="descrip">
                        <h3>{{ $category->name }}</h3>
                        <hr>
                        <p>{{ $category->des }}</p>
                    </div>
                </div>
            </a>
            </div>

            @endforeach
        </div>

    </section>

    <section class="temoignge" id="temoignage">
        <div class="titre-text">
            <p>TEMOIGNAGE</p>
            <h1>Que Disent nos clients?</h1>
        </div>
        <div class="temoignagee-boite">
            <div class="temoignage-simple">
                <div class="utilisateur">
                    <img src="{{asset('img/u1.jpg')}}" alt="">
                    <div class="info_util">
                        <h4>FRANCK DUBOI</h4>
                        <small>@franckduboi</small>
                        <div class="reseux_uti">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit corporis ad similique iure harum nam, eos odit est quos nostrum enim voluptate dolorum facere aliquam fugiat eligendi expedita sit nisi quasi! Perferendis natus unde magni quod molestias nostrum excepturi qui?</p>
            </div>
            <div class="temoignage-simple">
                <div class="utilisateur">
                    <img src="{{asset('img/u2.jpg')}}" alt="">
                    <div class="info_util">
                        <h4>FRANCK DUBOI</h4>
                        <small>@franckduboi</small>
                        <div class="reseux_uti">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit corporis ad similique iure harum nam, eos odit est quos nostrum enim voluptate dolorum facere aliquam fugiat eligendi expedita sit nisi quasi! Perferendis natus unde magni quod molestias nostrum excepturi qui?</p>
            </div>
            <div class="temoignage-simple">
                <div class="utilisateur">
                    <img src="{{asset('img/u3.jpg')}}" alt="">
                    <div class="info_util">
                        <h4>FRANCK DUBOI</h4>
                        <small>@franckduboi</small>
                        <div class="reseux_uti">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit corporis ad similique iure harum nam, eos odit est quos nostrum enim voluptate dolorum facere aliquam fugiat eligendi expedita sit nisi quasi! Perferendis natus unde magni quod molestias nostrum excepturi qui?</p>
            </div>
        </div>
    </section>

    <section class="Contact" id="contact">
        <!-- <img src="" alt="" class="img-footer"> -->
        <div class="titre-text">
            <p>CONTACT</p>
            <h1>Nous contactez</h1>
        </div>
        <div class="pied-page">
            <div class="pied-g">
                {{-- add form contact --}}
            </div>
            <div class="pied-d">
                <h1>Pour plus d'informations</h1>
                <p>Artem Agency <i class="fas fa-map-marker"></i></p>
                <p>contact@Artem.com<i class="far fa-envelope"></i></p>
                <p>+2125757xxxx<i class="fas fa-mobile"></i></p>
            </div>
        </div>
        <div class="reseaux-sociaux">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </section>
    <script>

        document.querySelector('.fa-times').style.display ="none"

        const menuBtn = document.querySelector(".btn-menu")
        const Sibebar = document.querySelector(".sidebar")

        menuBtn.onclick = function(){

            if(Sibebar.style.right == "-250px"){
                Sibebar.style.right = "0"
                document.querySelector('.fa-times').style.display =""
                document.querySelector('.fa-bars').style.display ="none"

            }else{
                Sibebar.style.right = "-250px"
                document.querySelector('.fa-times').style.display ="none"
                document.querySelector('.fa-bars').style.display =""
            }

        }

    </script>
</body>
</html>

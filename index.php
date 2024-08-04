<html lang="en"><head><style>
    
/*
Theme Name: Engenharia Pedroso
Author: Pedroso
Description: Engenharia Pedroso
Version: 1.2
*/
* {
    padding: 0;
    margin: 0;
    font-family: 'Inter', sans-serif;
}

header {
    background-color: #000;
    box-shadow: 0px 3px 10px #fff;
}

.hidden{
    opacity: 0;
    filter: blur(15px);
    transform: translateX(-100%);
    transition: all 2.5s;
}

.show{
    opacity: 1;
    filter: blur(0);
    transform: translateX(0);
    transition: all 2.5s;
}

/*
header {
    background-color: #000;
    box-shadow: 0px 3px 10px #464646;
} 
*/

.nav-bar {
    display: flex;
    justify-content: space-between;
    padding: 1.5rem 4rem;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-bar a{
    position: relative;
    color: white;
}

.nav-bar a:hover{
    color: grey;
    transition: 1.3s;
}

.nav-bar a::after{
    content: " ";
    width: 0%;
    height: 4px;
    background-color: grey;
    position: absolute;
    bottom:-5px;
    left: 0;
}

.nav-bar a:hover::after{
    width: 100%;
    transition: 1.3s ease-in-out;
}

.nav-bar .login-button a:hover{
    color: #fff;
    transition: 0s;
}

.nav-bar .login-button a::after{
    background-color: grey;
}

.logo-nav-bar{
    width: 100px;
    height: 70px;
}


.nav-list {
    display: flex;
    align-items: center;
}

.nav-list ul {
    display: flex;
    justify-content: center;
    list-style: none;
}

.nav-item {
    margin: 0 15px;
}

.nav-linkk {
    text-decoration: none;
    font-size: 1.15rem;
    color: #fff;
    font-weight: 400;
}

.login-button button {
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    background-color: grey;
}

.login-button button a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    font-size: 1.1rem;
}

.icon{
    width: 40%;
}

.mobile-menu-icon {
    display: none;
}

.mobile-menu {
    display: none;
}

@media screen and (max-width: 730px) {
    .nav-bar {
        padding: 1.5rem 4rem;
    }
    .nav-item {
        display: none;
    }
    .login-button {
        display: none;
    }
    .mobile-menu-icon {
        display: block;
    }
    .mobile-menu-icon button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        position: relative;
        padding: 0px 0px 0px 19px;
    }
    .mobile-menu ul {
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-bottom: 1rem;
    }
    .mobile-menu .nav-item {
        display: block;
        padding-top: 1.2rem;
    }
    .mobile-menu .login-button {
        display: block;
        padding: 1rem 2rem;
    }
    .mobile-menu .login-button button {
        width: 100%;
    }
    .open {
        display: block;
    }
}

.slider{
    margin: 3px 0px -2px 0px;
    width: 100%;
    height: auto;
    padding: 0 !important;
    overflow: hidden;
}

.slider-content{
    width: 400%;
    height: auto;
    display: flex;

}

.slider-content input, .img-mobile{
    display: none;
}

.slide-box{
    background-color: #000;
    width: 25%;
    height: auto;
    position: relative;
    text-align: center;
    transition: 1s;
}

.slide-box img{
    width: 100%;
}


.nav-manual, .nav-auto{
    position: absolute;
    width: 100%;
    margin-top: 48%;
    display: flex;
    justify-content: center;
}

.nav-manual .manual-btn, .nav-auto div{
    border: 1px solid #fff;
    padding: 7px;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.2s;

}

.nav-manual .manual-btn:not(:last-child), .nav-auto div:not(:last-child){
    margin-right: 10px;
    gap: 10px;
}

.nav-manual .manual-btn:hover{
    background-color: grey;
}

#radio1:checked ~ .nav-auto .auto-btn1, #radio2:checked ~ .nav-auto .auto-btn2, #radio3:checked ~ .nav-auto .auto-btn3 {
    background-color: grey;
}

#radio1:checked ~ .primeiro{
    margin-left: 0%;
}


#radio2:checked ~ .primeiro{
    margin-left: -25%;
}


#radio3:checked ~ .primeiro{
    margin-left: -50%;
}

@media screen and (max-width:900px){
    .img-desktop{
        display: none;
    }
    
    .img-mobile{
        display:block;
    }

    .nav-auto, .nav-manual{
        margin-top: 48%;
    }
}

@media screen and (max-width:964px) {
    .icon-wpp svg{
        display: none;
    }
    
}


@media screen and(max-width: 964px) {
    .box-title-servicos-desk{
        display: none;
    }

    #news #col-md-3{
        padding: 15rem 0;
    }

    #desktop-thumbnails{
        display: none;
    }
}

.mobile-thumbnails{
    display: none;
}

.servicos-desk{
    width: auto;
    height: auto;
    background-color: grey;
    display: flex;
    flex-direction: row;
}

#teste{
    background-color: #9b9b9b;
    width: 100%;
    padding: 20px; 
    box-sizing: border-box; 
}

.title-servicos-inicio{
    background-color: #9b9b9b;
}


#news.container-fluid {
    background-color: #9b9b9b;
    width: 100%;
    padding: 20px; 
    box-sizing: border-box; 
}

.span-title-servicos-inicio{
    color: #000;
}

#news hr{
	border: rgba(0, 0, 0, 1) solid 2px;
	width: 250px;
	margin: 0 auto;
}

#news #img1{
    width: 70%;
    height: 70%;
    border-radius: 15px;
}

#news #col-md-3-nr12{
    padding: 30px 0;
}

#news .thumbnails {
    margin-top: 25px;
    margin-left: 4rem;
}

#news h2{
	color: #fff;
	font-family: "Work Sans", sans-serif;
	font-weight: bold;
	margin-bottom: 0;
}

#news .thumbnails h3{
	color: #000;
	font-size: 20px;
	font-family: "Work Sans", sans-serif;
	font-weight: bold;
	margin-bottom: 0;
}

#news .thumbnails p{
	color:  #fff;
	font-size: 15px;
	font-family: "Work Sans", sans-serif;
}

@media screen and (min-width: 768px){
    .col-md-3 {
        flex: 0 0 auto;
        width: 25%;
        padding: 30px 13px 20px 0px;
    }
}

.col-md-3 img {
    box-shadow: 10px 5px 3px rgba(0, 0, 0, 0.5);
}

.col-md-3 h3{
    margin: 4px;
}

.col-md-3 time{
    padding: 0px 0px;
}

.col-md-3 a{
    text-decoration-color: #000;
    color: #000;
}

.servico3 img{
    padding: 0rem 0 7rem 0;
}

#col-md-3-nr12 p{
   width: auto;
   max-height: 100px; 
    
}

#estat{
	background-color: #363636;
	width: 100%;
	height: 200px;
	text-align: center;
    flex-direction: row;
}

#estat p{
	color: grey;
	text-transform: uppercase;
	font-family: "Work Sans", sans-serif;
	font-size: 64px;
}

#estat p small{
	color: #FFF;
	font-size: 24px;
	display: block;
}

@media (max-width: 1024px){
    .container-top-footer, .container-bottom-footer {
        flex-direction: column;
        gap: 3rem;
    }
}

@media screen and (max-width: 768px){
    #estat{
        background-color: #363636;
        width: 100%;
        height: auto;
        text-align: center;
        flex-direction: row;
    }
    
    footer{
        background-color: #000;
        text-decoration: none;
        color: #fff;
    }
    
    #estat-mobile{
        background-color: #363636;
        width: 100%;
        height: 200px;
        text-align: center;
        flex-direction: row;
    }
    
    #estat-mobile p{
        color: grey;
        text-transform: uppercase;
        font-family: "Work Sans", sans-serif;
        font-size: 64px;
    }
    
    #estat-mobile p small{
        color: #FFF;
        font-size: 24px;
        display: block;
    }
}


#estat-mobile{
    display: none;
}

#estat-mobile p{
    display: none;
}

#estat-mobile p small{
    display: none;
}

footer{
    background-color: #000;
    text-decoration: none;
    color: #fff;
}

@media (max-width: 1024px){
    footer{
        padding: 1rem 0 3rem;
    }   
}

.container-top-footer{
    width: 100%;
    display: flex;
    align-items: center;
    border-bottom: solid 1px #959595;
    justify-content: space-between;
    padding: 1rem 2px;
    background-color: #000;
}

.container-top-footer a{
    text-decoration: none;
    color: #fff;    
}

.container-left-footer{
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 19rem;
}

.loc-text-box-footer {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.left-box-footer{
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo-footer {
    height: 140px;
    cursor: pointer;
}

.container-central-footer{
    display: flex;
    width: auto;
    flex-direction: row;
    gap: 2rem;
    justify-content: center;
}

.central-icons-footer {
    height: 50px;
}

.left-icons-footer {
    height: 2rem;
}

.container-logo-footer{
    width: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: solid 1px #959595;
}


.container-bottom-footer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 1rem 10px;
}

.container-bottom-footer .col-md-4{
    padding: 0px;
}

.text-bottom-footer a {
    text-decoration: none;
    color: #fff;
}

.text-bottom-footer a:hover{
    color: #af0017;
    transition: 2.9s;
}

.icon-wpp svg{
    position: fixed;
    width: 80px;
    height: 80px;
    bottom: 40px;
    right: 40px;
    border-radius: 50%;
    box-shadow: 2px 2px 2px 2px  rgba(0,0,0,0.4);
    color: white;
    background-color: green;
}

@media screen and (max-width:900px){
    .img-desktop{
        display: none;
    }
    
    .img-mobile{
        display:block
    }

    .nav-auto, .nav-manual{
        margin-top: 44%;
    }
}

@media screen and (max-width:900px) {
    .icon-wpp svg{
        display: none;
    }
    
}

</style>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer=""></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>⚙ Pedroso - Engenharia e Projetos </title>
<style type="text/css" id="operaUserStyle"></style></head>
<body data-rsssl="1">

    <header>
        <nav class="nav-bar">
                <img src="https://engenhariapedroso.com/wp-content/uploads/2024/05/Logo-3.jpg" alt="logo3" class="logo-nav-bar">
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#news" class="nav-link">Serviços</a></li>
                    <li class="nav-item"><a href="#section-slider" class="nav-link">Sobre nós</a></li>
                </ul>
            </div>
            <div class="login-button">
                <button><a href="https://wa.me/5511919490727?text=Olá, vim%20pelo%20site%20e%20gostaria%20de%20uma%20cotação%20de%20serviço." target="_blank">Faça uma cotação</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()">
                    <img class="icon" src="https://engenhariapedroso.com/wp-content/uploads/2024/05/menu_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="">
                </button>
            </div>
        </nav>

        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-linkk">Início</a></li>
                <li class="nav-item"><a href="#news" class="nav-linkk">Serviços</a></li>
                <li class="nav-item"><a href="#section-slider" class="nav-linkk">Sobre</a></li>
            </ul>

            <div class="login-button">
                <button><a href="https://wa.me/5511919490727?text=Olá, vim%20pelo%20site%20e%20gostaria%20de%20uma%20cotação%20dos%20serviços." target="_blank">Faça uma cotação</a></button>
            </div>
        </div>

    </header>

    <section class="slider" id="section-slider">
        <div class="slider-content">
            <input type="radio" name="btn-radio" id="radio1">
            <input type="radio" name="btn-radio" id="radio2">
            <input type="radio" name="btn-radio" id="radio3">

            <div class="slide-box primeiro">
                <img class="img-desktop" src="https://engenhariapedroso.com/wp-content/uploads/2024/08/Pedroso_Engenharia_e_projetos_logo1.webp" alt="img1">
                <img class="img-mobile" src="https://engenhariapedroso.com/wp-content/uploads/2024/08/Pedroso_Engenharia_e_projetos_logo1.webp" alt="img1">
            </div>
            <div class="slide-box">
                <img class="img-desktop" src="https://engenhariapedroso.com/wp-content/uploads/2024/08/img4.webp" alt="img2">
                <img class="img-mobile" src="https://engenhariapedroso.com/wp-content/uploads/2024/08/img4.webp" alt="img2">
            </div>
            <div class="slide-box">
                <img class="img-desktop" src="https://engenhariapedroso.com/wp-content/uploads/2024/08/img2grande.webp" alt="img3">
                <img class="img-mobile" src="https://engenhariapedroso.com/wp-content/uploads/2024/08/img2grande.webp" alt="img3">
            </div>

            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>

            <div class="nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>

        </div>
    </section>
    
    <div class="slider">
            <div class="slides"></div>

    </div>

    
    <main class="servicos-principal servico-main-principal" id="servico-main-principal">
        <section class="boxingservicos">
            <div id="news" class="container-fluid">
                <div class="row text-center">
                    <div class="box-title-servicos">
                        <h2 class="title-servicos-inicio" id="teste">Toda a gestão de segurança e projetos que sua empresa precisa
                            <br>
                            <span class="span-title-servicos-inicio">em um único lugar</span>
                        </h2>
                        <img src="https://engenhariapedroso.com/wp-content/uploads/2024/05/hr-title-servicos-inicio.png" alt="" class="line-style">
                    </div>
                </div>
                <section class="desktop-thumbnails">
                    <div class="row thumbnails justify-content-center">
                        <div class="col-md-3 hidden" style="padding: 0 0 7rem 0;">
                            <img src="https://engenhariapedroso.com/wp-content/uploads/2024/08/projeto_galpao-1.webp" alt="servico1" id="img1">
                            <h3> Projeto Galpão.</h3>
                            <p style="padding: 0 2rem 0 0;">Os projetos estruturais e de fundação,
                                para galpões industriais tem por finalidade garantir seguranças e qualidade em todas as etapas da construção na sua utilização.
                            </p>
                        </div>
                        <div class="col-md-3 hidden" style="padding: 0 0 7rem 0;" id="col-md-3-nr12">
                            <img src="https://engenhariapedroso.com/wp-content/uploads/2024/08/sobre_nr-1.webp" alt="servico2" id="img1">
                            <h3> Nr12. </h3>
                            <p style="padding: 0 2rem 0 0;">Invista agora na regularização de seus equipamentos produtivos ou de manutenção para garantir a 
                                segurança de seus colaboradores e a conformidade com o ministério do trabalho e emprego. Avaliações de risco
                                em máquinas e equipamentos,<big style="color: #000;"> segurança para nós é nosso valor!</big>
                            </p>
                        </div>
                        <div class="col-md-3 hidden" style="padding: 0 0 7rem 0;">
                            <img src="https://engenhariapedroso.com/wp-content/uploads/2024/08/vistoria_completa-1.webp" alt="servico3" id="img1">
                            <h3> Vistoria completa. </h3>
                            <p style="padding: 0 2rem 0 0;"> Nossa equipe realiza inspeções minunciosas em casas e apartamentos antes da entrega pela construtora garantindo qualidade e confromidade.
                                Oferecemos serviços de avaliação para clientes interessados em adquirir imóveis, assegurando transparência e segurança em suas escolhas.
                            </p>
                        </div>
                        <div class="col-md-3 hidden" style="padding: 0 0 7rem 0;">
                            <img src="https://engenhariapedroso.com/wp-content/uploads/2024/08/avc-1.webp" alt="servico4" id="img1">
                            <h3> AVCB e CLCB </h3>
                            <p style="padding: 0 2rem 0 0;">Garanta a segurança do seu condomínio ou comércio. Nós cuidamos de todos os trâmites para garantir que você
                                obtenha o AVCB e o CLCB necessários. E não para por aí, oferecemos cursos especiais para formação de brigada.
                                Conte conosco para tornar tudo mais seguro e simples para você.
                            </p>
                        </div>
                        <div class="col-md-3 hidden" style="padding: 0 0 7rem 0;">
                            <img src="https://engenhariapedroso.com/wp-content/uploads/2024/08/ar_condicionado.webp" alt="servico1" id="img1">
                            <h3> Ar condicionados. </h3>
                            <p style="padding: 0 2rem 0 0;">Análise técnica visando à instalação de sistemas de ar condicionado em unidades residenciais e comerciais,
                                abrangendo apartamentos, casas e condomínios.
                            </p>
                        </div>
                        <div class="col-md-3 hidden" style="padding: 0 0 7rem 0;">
                            <img src="https://engenhariapedroso.com/wp-content/uploads/2024/08/projetos_com_drone.webp" alt="servico3" id="img1">
                            <h3> Trabalhos com Drone. </h3>
                            <p style="padding: 0 2rem 0 0;">Levantamento fotográfico de terrenos, imóveis, condomínios e áreas industriais, condução de inspeções aéreas com elaboração de laudo fotográfico e produção de filmagens destinadas a fins publicitários. <a href="https://www.linkedin.com/posts/pedroso-projetos-e-engenharia_e-hoje-teve-trabalho-de-inspe%C3%A7%C3%A3o-visual-executado-activity-7195907761103138816-Rta9?utm_source=share&amp;utm_medium=member_desktop" target="_blank" rel="noopener">Clique aqui </a> para ver uma demonstração.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <div id="estat">
            <div class="container">
                <section class="hidden">
                    <div class="row">
                        <div class="col-md-4">
                            <p>300+ <small>Clientes Atendidos.</small> </p>
                        </div>
                        <div class="col-md-4">
                            <p>2020 <small>Quando foi fundado?</small> </p>
                        </div>
                        <div class="col-md-4">
                            <p>10.000+ <small>Horas dedicadas a segurança.</small> </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div id="estat-mobile">
            <div class="container-mobile">
                <section class="hidden">
                    <div class="column">
                        <div class="col-md-4-m">
                            <p>300+ <small>Clientes Atendidos.</small> </p>
                        </div>
                        <div class="col-md-4-m">
                            <p>2020 <small>Quando foi fundado?</small> </p>
                        </div>
                        <div class="col-md-4-m">
                            <p>10.000+<small>Horas dedicadas a segurança.</small> </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

<a class="icon-wpp" href="https://wa.me/5511919490727?text=Olá,%20vim%20pelo%20site." target="_blank" rel="noopener"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"></path>
        </svg>
    </a>
<footer>
            <div class="container-top-footer">
                <div class="container-left-footer">
                    <div class="left-box-footer">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEe0lEQVR4nO2aa6hVRRTH54qWFknmAykoe2iWJSakYXi/GGhaYlnhA0VSw7QHgvgh/aAfkggEHwmmYqkYlQpClthLsEjBrq+6PdTKPoRfykcZYZY/Wd7ZsBzOmZlz7tm7fU77BxsO+/5n1tp3z1ozs2YbU1BQUFBQUJAmQBMwGJgHbAEOA6eA8/Y6Ze9tsZrBphEAbgAWAMeonKPAS0A3U28AXYDFwB+0n9+BRUBnUw8Aw4AfSjyIDPONwNPA/UBPoJO9etp78rdNVutyHBhq8gzwAnDBcfwQMBG4uoJ+OgOTgCNOX38Ds00eAZY4zv5m32hTO/rsAMwsMSIWmzwBLHQcbAVur2H/NwP7HBvzTR4AnnAcex/omlJifU/ZuQg8Wms7FQH0Ac4qp/amma0ljwCfOGF2U1r2ggA7lDM/A70j2/WWtwc8Yy/53SuybTfghLL7rvkvAB5STvwLPBDRRh70C6t3kXufAaMi+mm2IZDwoMkaYLdyYE1Ae70zWkJsA64L9CnrhYQPav6APoC7nLn5lsCQlVkBp82nwOvAavtb9gSag75kCvQF/rFaGQ23mqwAXlaObg1sgj5WWnF0paz8Smh7AMucob0j4IfMOAkLTFYAXyrD4zy6Sc7DT4noe4KTIx73aCcr3R6TBUBX5eCFwDDVS9lXK7DximrX4tH1UiPmfCXL7aoBhijnvgrEaMKflSyOJAEC51T7Ph7tj0p3t0kb2jY2MfE/PjaWy7TXs8ZjHt0upXvEpA0wSxlc7dHNUbpVVdhZpdqX3QECm5Vuskkb4HllcLlHN0Xp3qzCjp7np3p065Vumsk4BDZ5dMOV7rsq7OiiSrNHt13pxpq0AUYogzs9uk7OPn5EBTbGqHangas82s+VdphJG+AOZfCXgFYWNrrI2T2if5naflLtXgsUTOQflJDNzhA4qYyWLXzY1Z0eBVL67uvR93eWzad9u0RgoNKeMFlBW/0+4bmAdqRTJ5QFyzpgNHCnfWjZJb5h9wgJss4fHeh7vtK/VfMHLYdkW/1WI6tGemETQhZOEwJ9NtmwSphosgK4xom95og2A4APIx7+I+DeiP4eVm1+zWQZrJE1gHJANkcdTAS2/r/E1hO+tddue29IZB8dga+V/aUma4Ab7alNwrMZ2n5R2T0TW05Lw5F5ypG/gPsysDnA5oiEuWnbNIHFjkxtCd+HSlntAbgW+EbZaxEf0rIXBdDPCYV3TEoAG5QdsdnP5AGu3B8IM1OwMd2xkd20F4OzK6tpPigR9ytM3qDtRFcquQlHa3FEZuO+1Tltzue3ArSVwXQ+eLth4z5Q1a1JPsh93JcDWOvkg0FV9HFP7uM+kA8OVJsPSsz3+Y37QD44W00+qLu4LwfwlBPDMyLazKjLuC+HPfyMygd1HfeBrzpaQvmgIeI+UEg948sHDRP35QCedGJ7uifux5tGhCuPuy7ng4aM+wryQVISS9ifeW0va+QcwckHCXLvNvN/ABjrfArTuHEf+Lyl1VZ3vWcABQUFBQUFBSYNLgGeQ4LYkUdduAAAAABJRU5ErkJggg==" alt="" class="left-icons-footer">
                        <div class="loc-text-box-footer">
                            <a href="https://www.google.com/maps/place/Suzano+-+Palmeiras+de+São+Paulo,+Suzano+-+SP/@-23.6152248,-46.3190781,11z/data=!3m1!4b1!4m6!3m5!1s0x94ce7176a5cf4309:0x7678f276a368e6e2!8m2!3d-23.5375265!4d-46.3092435!16zL20vMGY5Ml9x?entry=ttu" target="blank" class="left-text-footer" rel="noopener">
                                Unidade Suzano
                        </a></div><a href="https://www.google.com/maps/place/Suzano+-+Palmeiras+de+São+Paulo,+Suzano+-+SP/@-23.6152248,-46.3190781,11z/data=!3m1!4b1!4m6!3m5!1s0x94ce7176a5cf4309:0x7678f276a368e6e2!8m2!3d-23.5375265!4d-46.3092435!16zL20vMGY5Ml9x?entry=ttu" target="blank" class="left-text-footer" rel="noopener">
                    </a></div><a href="https://www.google.com/maps/place/Suzano+-+Palmeiras+de+São+Paulo,+Suzano+-+SP/@-23.6152248,-46.3190781,11z/data=!3m1!4b1!4m6!3m5!1s0x94ce7176a5cf4309:0x7678f276a368e6e2!8m2!3d-23.5375265!4d-46.3092435!16zL20vMGY5Ml9x?entry=ttu" target="blank" class="left-text-footer" rel="noopener">
                    </a><div class="left-box-footer"><a href="https://www.google.com/maps/place/Suzano+-+Palmeiras+de+São+Paulo,+Suzano+-+SP/@-23.6152248,-46.3190781,11z/data=!3m1!4b1!4m6!3m5!1s0x94ce7176a5cf4309:0x7678f276a368e6e2!8m2!3d-23.5375265!4d-46.3092435!16zL20vMGY5Ml9x?entry=ttu" target="blank" class="left-text-footer" rel="noopener"><img src="data:image/png;base64,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" alt="" class="left-icons-footer"></a><a href="tel:1155919490727" class="left-text-footer">
                        (11) 91949-0727</a>
                    </div>
                    <div class="left-box-footer">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADKUlEQVR4nO3aS6gOYRzH8ee4H7kliXSkFBFFKeqIBTssT1lZ2lraWsrO0lZWtoqFsqCIsnAiRXQkkmtux3H96q3nrelt7u9c/s+8v09ZmnlmvjPzzDvPcU5EREREREREREREOgAxRUGMURBjFMR6kLbntFGjIMYoiDEKYoyCGKMgxiiIMQpijIKEHgRY1M5QuyfuXJYJ8hSYamzUHQUcBh5VEaTvBrC7sSPoCGA7cC3H+S0cpOcvcBFY39gRBQpYA5wH/hQ4v4WD9H0DzgDjjR1hQPMEcAr4HHfiqggyTbIZ4Dgw5kYcMObPRe+cJJmuIsg84ATwJmVH94D9bkQBe4BbKefnvb9rFgwdJPIfl/nH1I+Enf4DLgOb3IgANgAX/Nwa55efR1ambKNckMgGJvzE3gsQZxY4C6xwHQUsBU4DX0l2BdicY1vDBYlsaC9wO2VAr4GTwHzXrXliCniRctz3gQMFtllNkIEBzmQM8KALHLAPuJNynK/KXICVBom5hb8MewtbA2zMeER/94/o5SW3X32QEpPcKmccDb3E1Bpk4DXwJsk+JL0Gti3na/5dYLKi/dUfJLKzY8CzlAN7DBx1RgCHgAcp433pY1X2Q7jRIHk+JXjXgZ1V77vAGLf6xw8Zn4qW1LDvZoNkfWyL+O3nn7V1jSFmTKv9hPwzYUz9j6nrahxDO0EiA9gGXE25Gj/5N7bFNY5hoX9FfZcyjt5yw666xmAmyMCCzcOUE/KkjoWxtvZrPsjAlfq27iuV7DvzY913pvkgTTzLMTh3mQ8SGdyWnG874xW+3e1o5ugCDFLV7wH/++d5xu+fI86AIIIUXBibLPCFIHGhqC3BBOnrLe4A54C5lG9Kl/y/pA+Ac34biQtFbQkuSIGvrkF+ZQ42SIGFsaDWYYIPkmNhrNRCUVs6ESRhbXt2mIWitnQqyMAfXky4AHUySMgUxBgFMUZBjFEQYxTEGAUxRkGMURBjFMQYBTFGQYxREGMUxBgFMUZBjFEQYxTEGAUxRkGMURBjFMQYBTFGQYxRkNCCSLsUxBgFMUZBjGl7ThMRERERERERERERV4H/D2II3NSy5O0AAAAASUVORK5CYII=" alt="" class="left-icons-footer">
                        <a href="mailto:gerencia@engenhariapedroso.com" class="left-text-footer" target="_blank" rel="noopener">gerencia@engenhariapedroso.com</a>
                    </div>
                </div>
                <div class="container-central-footer">
                    <a href="https://www.facebook.com/profile.php?id=61556762801098&amp;locale=pt_BR" target="blank" rel="noopener">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD1UlEQVR4nO2du2sVQRSHVyVqTFDBRhCrYCG+KmMstBBtTROD2NmI5J/QQiJiEbWzEBRTWWgtiIV2VlYmRBvFByjER0RDUD9ZmWIz3Lh3d2buPTf7+7rA3jOz57szZ7N32ZNlQgghhBBCCNEDAH3AGDANzADfEQsuF9MuN32dkjEKzCn/peQ5Gk0pYi1wuXweosAfYDLPXQohklGfyRTbVG67yE9gChgGBrKGAwy4XFxzuSmS5+5kzALu14zXwN4oA6xCgH3AGy9nc1EKvbti8FeGZLQnZdHL3VgWiruMKzIVHLQhANe93N2NEXTWC3owymwbAHDIy91sjKD5PzxFBqPMtgEAg17uFmIEXUaUmTYIYudPQsKQEGNIiDEkxBgSYgwJMYaEGENCVgDoB04BN4FnwEdgCfgFzLsbpk+BW8B54ACwLgtEQjyALcAll/Sq5Hcp7jmRG7MaSEgB4ATwjjh8Ai5kFZEQB3DObUdRySoiIdm/JIwDv1vk8637Re84MOR+5VsPbHN/HwMmgNvuWAkJBdgBfPEyueTqSH/FWIe1QgIBHnhJzLet0wHxtGXVBTjSYpeZqB1QQsLIfyL1ZDwB1gTG1AqpA7AV+OHl71iEuBJSh/y5Jy93r9pZHe4q6yxw3z2q4/9kLSF1cFdRRa618ZndwMv/CZCQmgAPveSdaeOWynsqUmNeQZ9PHzARwAtvqntKjr9YVYaEVAD44OVue8nxz73j7wBHgZ3Apipjl4zT2BWy6E11Q8nxfvFO8sB4k4UsI/bxnZpX5wMmgorzlBAJ+UfHv3ndgorz7NR5rXohtEmsOC0YD5lv0MknCdj7QoZC5ht08kkC9raQ+ap3jyUkrZBHVWQ0UkiWdqyr3nBXasSQkFgAj0MKuoshITHIawXwOaSguzgSEgNgV2hBd3EkJAb5kyqhBd3FkRArBb2RQlYiVpyQgt5qnFonnTRg7woZijHfWiedNGBvCpmv+3yXhKQRUqugN0JIrHl26rwkxCEhXQYPCZGQKF+UzgdMBFohtkBCbIGE2AIJsQUSYgskxBZIiC2QEFsgIbZAQmyBhNgCCbEFEmILJMQWSIgtkBBbICG2oEFCvvVCQxcMCgE2e8N8TdHyaDgzCDaFjKRoeTRd9bVH3QCbQm6kaArWqm3evswYGBPiXlWepG3eSo0lTUnBkBBgf7LGkv9pvbro+vSNWCj0dFmI68g24rapxWStVwsDqjmxlebEhfbdky1WiuhG+27v7Z9qcF/OXPRtqqTQj7lL4pmyV6s2hAX33se7LjdxCrgQQgghhBBCZGn5C87MLMu/QulWAAAAAElFTkSuQmCC" class="central-icons-footer">
                    </a>
                    <a href="https://www.instagram.com/pedroso.engenhariaeprojetos/" target="blank" rel="noopener">
                        <img src="data:image/png;base64,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" class="central-icons-footer">
                    </a>
                    <a href="https://www.linkedin.com/company/pedroso-projetos-e-engenharia/" target="blank" rel="noopener">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFWklEQVR4nO2dW6hWRRTHh+JYpvlgEQV2AbsgZTfKDIKkp0LRghNEDxEVVm89hUEPWnF6Syvo8hA9ZNBLkRBBFysiiJ6ii3k4GNYxxQS7ncyvMn8xOcJ8q+/sPXvv2fuMe9bv7cBa66xZf/bM7Nkz3xijKIqiKIqiKIpyAgCMAePAVmAn8DvKjKvFVlebsa7EWAdMaf1LsTVa16YQJwFPlueheBwFJmzt2hBExajPRBvdlFXb5zCwGVgBLDCZAyxwtdjiauNja7c25gAux4zvgcui/IMeAiwHpkXNpqIM9G7GIJ8MFSNMlIGo3bhpipvG+WxuHDQTgKdF7V6JEXRSBL02SrYZAFwnajcZI6h94fFZGCXbDAAWitrNxAg6RJRMM4LY9VNBmqGCJIYKkhhJCQKcDNxmp3tutvYL8DOwA3gRuNH0HFIRBLga+Jpy3gOWmJ5CCoIAN1T8RrIXWGp6yJwLAiwCfqA6X3T2USczQTYIl3+Al9zajh1T5tu1MLcqekTY3mN6RgqCfCZcNhTYbhS275uekYIgB8V3gMUFtktE+AOmZ6QgyAHhcnaB7TnCdr/pGSkI8pFw2Vhg+7Cw/dD0jBQEWS9cjriXwKvc6udpboC348efwvYB0zNSEGTMTWGrskOnvS0pDJwHfFdBjP3AhaaHzPkT4vmdAbw2YreKZDtwrukppCKI538p8BjwLrDHTYvtGtcLwCrTc0hNkNxBBUmLORcEWF1zcXEPcEvsON6+5OuBR4C3XZdpJxJ/A4fcavPHbn3Nfr+Z37hwNesXPaArSF2mY8ZxEwsrwu6K/r8BzwIXdF2/6AEbFPE/YsUBHgJ+ahjD7tLc1OT9SAasG6d2wIQEicmndt2ti/pFDxjLnoZxRmDHjOeBO4FlwFnu+8yZ7u9b3VR8tq5yF3B+YNlq1yMHQXYBdwDzAttrl34edAO9xE4GFoXEqduOvgvyHHBKYFNlvMV29XlEzFcrxslWkIPis/H6wCYWxZwHvD5ClNUVYmQryL3uPIadGd1vIgGcPuIEwFd2/An0z1MQ71jZyON1bnPFqaYGwJXuqfNZE+ibryA+7kPYfcAHbrfkcfYB24DbQwd6F+8NkdK2QD8VBFgFfEs5XwLXBBZ2pfA9HHLYNXtBgDXAXwFi+IW9KVCU3VUH96wFAS4B/ihYn5LHlY8zE7KVFXhZ+G2KXY++CfKOcLObKB61b+OezVLgqRGD9FsB8e8WPm/WbV/vBeHYl0nJXQX29m1csqzkf9glfJ/P67YvB0GeqLrHC/hE+DxeYn+xsP+xbvtyEGR76NNR0AUV7i1231d8DtVtXw6C7BMupduKgIuEz94Se7s67HO0bvtyEGQgXErfyq2N8Bl01b4cBBki9fbVZq4SpqOGqyAqSDP0CRlGuyyHKaGqfVcFrptXcgnTUcNVEBWkGfqEDKNdlsOUUNW+qwLXzSu5hOmo4SqICtIMfUKG0S7LYUqoat9VgevmlVzCdNRwFUQFaYY+IcNol+UwJVS176rAdfNKLmE6anh2glTFRI7TVb6x6lc54a4aSKQ4XeUbq36VEz6RjkWH0Pb/kQ5BScUMaA/t12zkNHBz7Dhd5RurfqbzgJmBCtJ/Qew2fh+90CUQ96PSPr/GCCoPPK5oHDQT+P+pq8k2LgXbEiXbDACeaeNSsFHX5i2PknGPAa5o69q82S6WVFFmAbi8tYslC65eHbh7+mw/mf1Az7HfJF7puqlBa1eveqLo5cSpXE7s/UzeRMDPvipdXN/tCbNWL7gPYip6N1Uy0I+7KfHOEbeB5sgM8I27AG28j7cFKYqiKIqiKIpiesm/hj3GtsFwaC4AAAAASUVORK5CYII=" class="central-icons-footer">
                    </a>
                    <a href="#" target="blank" rel="noopener">
                        <img src="data:image/png;base64,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" class="central-icons-footer">
                    </a>
                </div><img src="https://engenhariapedroso.com/wp-content/uploads/2024/05/Logo-3.jpg" class="logo-footer">
            </div>
            <div class="container-bottom-footer">
                <p class="text-bottom-footer">© desde 2024, todos os direitos reservados.</p>
                <p class="text-bottom-footer">Desenvolvido por  <a href="https://www.linkedin.com/in/pedrohenriquepedrosofarias/" target="_blank" class="link-pedroso-tech" rel="noopener">Pedrosoft</a></p>
            </div>
        </footer>
    </main>

<script>
    function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "https://engenhariapedroso.com/wp-content/uploads/2024/05/menu_24dp_FILL0_wght400_GRAD0_opsz24.png"; // Corrigido o caminho da imagem
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "https://engenhariapedroso.com/wp-content/uploads/2024/05/close_24dp_FILL0_wght400_GRAD0_opsz24.png"; // Corrigido o caminho da imagem
    }
    }

    var radio = document.querySelector('.manual-btn')
    var cont = 1;
    document.getElementById('radio1').checked = true;

    setInterval(() => {
        proximaImg()
    }, 5000)

    function proximaImg(){
        cont++

        if(cont > 3){
            cont = 1
        }

        document.getElementById('radio'+cont).checked = true;
    }


    /* console.log('#teste') */
    const myObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting){
                entry.target.classList.add('show')
            }else{
                entry.target.classList.remove('show')
            }
        })
    })

    const elements = document.querySelectorAll('.hidden')

    elements.forEach((element) => myObserver.observe(element))

    myObserver.observe(lastOne)
</script>



</body></html>
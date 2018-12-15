
<?php
require './_app/Config.inc.php';
?>

<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>  

        <title><?= $pg_title; ?></title> 
        <meta charset="UTF-8">
         <!-- metas seo da pagína--> 

        <meta name="description" content="<?= $pg_desc; ?>">
        <meta name="image" content="<?= $pg_title; ?>"/>
        <meta name="viewport" content="width=device-width" initia-scale="1.0"/>
        <meta name="robots" content="index,follow"/>
        <meta name="keywords" content="Criação de Sites, Portais,Loja Virtual">
        <meta name="geography" content="São Paulo-Brasil">
        <meta itemprop="name" content="<?= $pg_title; ?>Web"/>
        <meta itemprop="description" content="<?= $pg_desc; ?>"/>
        <meta itemprop="image" content="<?= $pg_image; ?>"/>
        <meta itemprop="url" content="<?= $pg_url; ?>"/>

        <!--fim das metas seo do site-->

        <!--metas facebook-->
       
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="<?= $pg_title; ?>"/>
        <meta property="og:description" content="<?= $pg_desc; ?>"/>
        <meta property="og:image" content="<?= $pg_image; ?>"/>
        <meta property="og:url" content="<?= $pg_url; ?>"/>
        <meta property="og:site_name" content="<?= $pg_site; ?>"/>
        <meta property="og:locale" content="pt_BR"/>
        <meta property="og:app_id" content="<?= $pg_fb_app; ?>"/>
        <meta property="article:author" content="https://www.facebook.com/<?= $pg_fb_author; ?>"/>
        <meta property="og:article:publisher" content="https://www.facebook.com/<?= $pg_fb_page; ?>"/>
        <!--fim das metas facebook--> 

        <!--inicio das metas do twitter-->
        <meta property="twitter:card" content="summary"/>
        <meta property="twitter:site" content="<?= $pg_twitter; ?>"/>
        <meta property="twitter:domain" content="<?= $pg_domain; ?>"/>
        <meta property="twitter:title" content="<?= $pg_title; ?>"/>
        <meta property="twitter:description" content="<?= $pg_desc; ?>"/>
        <meta property="twitter:image:src" content="<?= $pg_image; ?>"/>
        <meta property="twitter:url" content="<?= $pg_url; ?>"/>         
        <meta property=”twitter:card” content=”summary” />
        <!--fim das metas do twitter-->
        <meta name="viewport" content="width=device-width,inicial-scale=1,user-scalabe=no">       


        <link rel="shorcut icon" href="img/bg-icone-publishe.png"/>
        <link rel="author" href="https://plus.google.com/<?= $pg_google_author; ?>/posts"/>
        <link rel="publishe" href="https://plus.google.com/<?= $pg_google_publisher; ?>"/>
        <link rel="canonical" href="http://www.publisheweb.com.br"/>
        <link rel="base" href="http://www.publisheweb.com.br"/>
        <link rel="alternate" type="application/rss+xml" href="<?= HOME; ?>/rss.xml"/> 
        
        <link rel="stylesheet" href="css/boot.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>   

        <script src="js/jquery.js"></script>

           
        <!--[if lt IE 9]
        <script src="js/html5shiv.js"></script>
        [endif]--> 
        <!--scripts nav responsivo-->

        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="js/respNav.js"></script><!--
        -->
        <script src="js/scripts.js"></script>



    </head>
    <body>
          
        <p class="j_back backtop">Topo</p>

        <header class="main_header container bg-white" id="home">
            <div class="content">
                <img class="main_header_logo fl-left" title="Publishe Web" alt="[Publishe Web]" src="img/bg-logo2.png"/>
              <nav>       
                <ul class="main_header_nav fl-right">
                    <li><a href="#home" title="Publishe Web" class="scroll">HOME</a></li>
                    <li><a href="#sobre" title="Sobre" class="scroll">SOBRE</a></li>
                    <li><a href="#servicos" title="Sites,Loja Virtual,Portal" class="scroll">SERVIÇOS</a></li>
                    <li><a href="#marketing" title="Marketing Digital" class="scroll">MARKETING-DIGITAL</a></li>
                    <li><a href=#ideias title="Ideias para o sua empresa na internet" class="scroll">IDEIAS</a></li> 
                    <li><a href="#contato" title="Entre em Contato Com a Publishe Web" class="scroll">CONTATO</a></li>
                </ul>
                </nav>

              
                <div  class="clear"></div>   
            </div> 
            <!--menu responviso-->
   <nav id="menu">
        <a href="javascript:;" class="close"></a>
        <ul>
         <li><a href="#home" title="Publishe Web" class="scroll">HOME</a></li>
         <li><a href="#sobre" title="Sobre" class="scroll">SOBRE</a></li>
         <li><a href="#servicos" title="Sites,Loja Virtual,Portal" class="scroll">SERVIÇOS</a></li>
        <li><a href="#marketing" title="Marketing Digital" class="scroll">MARKETING-DIGITAL</a></li> 
        <li><a href=#ideias title="Ideias para o sua empresa na internet" class="scroll">IDEIAS</a></li> 
         <li><a href="#contato" title="Entre em Contato Com a Publishe Web" class="scroll">CONTATO</a></li>
        </ul>
    </nav>               
            <a href="javascript:;" class="menu_btn"></a> 
            <div class="clear"></div>     

      
            
           
    <div class="clear"></div>
    </div>   



        </header>
        <!--menu responviso-->          

    
    
    <div class="destaque container">
        <div class="content">
        <h1 class="fontsize1 al-center" style="padding-bottom:60px; margin-top:30px;">PUBLISHE WEB</p>
            <h1 class="fontsize1 al-center">CRIAÇÃO DE SITES,LOJAS VIRTUAIS E MERKETING DIGITAL</p>
            <h1 class="fontsize7 al-center">GARANTIA DE QUALIDADE E UM SITE IDEAL PARA SUA EMPRESA</h1> 
            <h1 class="tagline1 al-center">Especilista em programação web,criação de layouts,Marketing Digital,Email Marketing,Seo</h1>
        </div>
     <div class="clear"></div>  
    </div>




<main class="container"><!--todo conteudo do site-->  


    <section class="container sobre bg-lightgray" id="sobre" itemscope itemtype="https://schema.org/Person">
        <div class="content">        
             
      
        <img itemprop="image" class="round fl-left boxshadow" style="width: 16%" src="img/bg-perfil.jpg" alt="[Felipe Ferreira Campos, Publishe Web]" title="Felipe Ferreira Campos"/>
    

       
            <header>
               <div class="profile fl-left" style="width: 75%; padding-left:50px;">         
                
                <h1 class="fontsize5">Felipe Ferreira Campos</h1>
                <h1 class="tagline">Tenho 33 anos , sou de paulistano de São Paulo</h1>
                <h1 class="tagline">Sou iniciante no mercado web</h1> 
                <h1 class="tagline">gosto de promação para web.</h1>
                <h1 class="tagline">Criei minha propia agência web</h1>
                <h1 class="tagline">Meu objetivo trabalha</h1>
                <h1 class="tagline">Trabalhar Seo e Marketing Digital</h1>
                <h1 class="tagline">ser um programador Front-End e Back-end.</h1>
              
                <ul class="main_bus_person">
                    <li><a itemprop="url" class="boxshadow" target="_blank" href="https://www.facebook.com/felipe.ferreiracampos.9" title="Felipe Ferreira Campos No Facebook!">No Facebook</a></li>
                    <li><a itemprop="url" class="boxshadow g" target="_blank" href="https://plus.google.com/u/0/108289759262433735086/posts" title="Felipe Ferreira Campos No Google+">No Google+</a></li>
                    <li><a itemprop="email" class="boxshadow m" href="mailto:Felipe Ferreira Campos <felipewebsp@gmail.com>" title="Enviar E-mail Para Felipe Ferreira Campos">Por E-mail</a></li>
                </ul>

                
                  


            </header>
    </section>


    <!--container serviços-->    


<article class="container servicos  al-center destaque_servico" id="servicos" style="padding-bottom:100px 0;">
        <div class="content">  
            <img src="img/bg-10.png" alt="Serviços" title="Serviços" style="padding-top:150px;">
            <h1 class=" al-center fontsize1">Serviços</h1>     
        </div> 
    </article>            

    <section class="container servicos bg-lightgray">       
        <article class="al-center">
            <div class="content" style="padding-bottom: 10px;">

                <article class="servico box box-small al-center"> 
                <a href="criacao.php"><img src="img/bg-2.png" alt="Criação De Sites" title="Criação De Sites"></a>
                    <h1 class="al-center fontsize5">Criação de sites</h1> 
                    <h2 class="tagline al-center">Desenvolvimento de sites,blogs,portais,e-commerce(loja Virtual) atualmente otimizado com seo,o site da sua empresa nos primeiro Lugar, nas redes sociais</h2>
                </article>

                <article class="servico box box-small al-center">
                <img src="img/bg-3.png" alt="Otimização Seo" title="Otimização Seo">
                    <h1 class="al-center fontsize5">Otimização Seo</h1>
                    <h2 class="tagline">Fazemos toda a otimização do seu site ou sistema, usando a técnica de seo, que ajudar você a aparecer mais para os seus clientes na internet.</h2>
                </article> 

                <article class="servico box box-small al-center">
                   <img src="img/bg-4.png" alt="Marketing Digital" title="Marketing Digital">
                    <h1 class="al-center fontsize5">Marketing-Digital</h1>
                    <h2 class="tagline">Gestão de contas em redes sociais (Facebook, Youtube, Google+, Twitter) para divulgação e marketing. utilizamos a técnica de smo, que é a otimização das mídias sociais.</h2>
                </article> 

          <article class="servico box box-small al-center">
              <img src="img/bg-5.png" alt="Briefing" title="Briefing">
              <h1 class="al-center fontsize5">Briefing</h1>
              <h2 class="tagline">Primeiramente, sentamos com nosso cliente para conversar, e descobrir quais são suas necessidades e objetivos</h2>
          </article> 

           <div class="box-line"></div>

            <article class="servico box box-small al-center">
               <img src="img/bg-31.png" alt="Criação de sistema" title="Criação de Sistema">
                    <h1 class="al-center fontsize5">Criação de sistema</h1>     
                    <h2 class="tagline">Temos diversos sistemas a oferecer, sendo eles, sistema de gerenciamento de notícias, gerenciamento de conteúdo de site, loja virtual,catálogo eletrônico, imobiliária online, sistema de envio de newsletter, transação com bancos e operadoras de crédito, intranets e muito mais.</h2>
            </article>
           
               <article class="servico box box-small al-center">
                <img src="img/bg-30.png" alt="Sites Responsivo" title="Sites Responsivo"> 
                    <h1 class="al-center fontsize5">Criação de layout</h1>     
                    <h2 class="tagline">Precisando de layout para seu site/loja virtual ou quer reformular o layout já existente?</h2>
                    <h2 class="tagline">Todos os layouts que desenvolvo, são estudados juntamente com o cliente e voltado para as necessidades do usuário do seu site.</h2>
               </article>
               
            <article class="servico box box-small al-center">
             <img src="img/bg-32.png" alt="Sistema Personalizado" title="Sistema Personalizado">
                    <h1 class="al-center fontsize5">Sistema Único</h1>     
                    <h2 class="tagline">Precisa de um sistema personalizado para as necessidades da sua empresa um sistema de vendas,estoque</h2>
            </article>

            <article class="servico box box-small al-center">
             <img src="img/bg-33.png" alt="Reformulação de Sites" title="Reformulação de Sites">
                    <h1 class="al-center fontsize5">Sites</h1>     
                    <h2 class="tagline">Reformulamos e remodelos seu site antigo. Deixando-o com um layout moderno e código semântico!</h2>
               </article>
                  <div class="box-line"></div>

                <article class="servico  box box-small al-center">
                <img src="img/bg-11.png" alt="Mobile" title="Mobile">
                    <h1 class="al-center fontsize5">Mobile</h1>
                    <h2 class="tagline">Fazemos o seu site para qualquer dispotivo mobile</h2>
                    <h2 class="tagline">Sua empresa poder ser acessada através de uma tela de um celular. tablets, smartphones,até mesmo TV Monitor 4K</h2>    
                </article> 

                <article class="servico  box box-small al-center">
                  <img src="img/bg-12.png" alt="Email-Marketing" title="Email-Marketing">
                    <h1 class="al-center fontsize5">Email-Marketing</h1>
                    <h2 class="tagline">O e-mail marketing pode ser usado na oferta 
                        de produtos e serviços, na promoção de vendas e distribuição de interesse específico, bem como em campanhas de fidelização, pesquisas de satisfação e outras ações de comunicação.</h2>

                </article> 

                <article class="servico  box box-small al-center">
                <img src="img/bg-13.png" alt="Logotipo" title="Logotipo">
                    <h1 class="al-center fontsize5">Logotipo</h1>
                    <h2 class="tagline">A logomarca é peça-chave de uma identidade visual e, portanto,é considerada um elemento estratégico que, como tal, deve ser pensado de forma impactante e profissional,visando transmitir confiabilidade e destaque através da sua logomarca.</h2> 
                   
                </article> 




             <article class="servico  box box-small al-center">
                 <img src="img/bg-14.png" alt="Loja Virtual" title="Loja Virtual">       <h1 class="al-center fontsize5">Loja Virtual</h1>
                        <h2 class="tagline">sobre os produtos de sua loja! Produtos 
                        e Categorias ilimitados Cadastre produtos 
                        ilimitados em sua loja! loja virtual disponível em celulares
                        e tablets acesse em qualquer lugar!  Loja Virtual com Integração às redes sociais Integre sua loja às maiores redes sociais! Loja Virtual com integração com pagseguro</h2>

                </article> 

                <div class="box-line"></div>  

                <article class="servico box box-small al-center">
                  <img src="img/bg-6.png" alt="Planejamento" title="Planejamento">
                    <h1 class="al-center fontsize5">Planejamento</h1>
                    <h2 class="tagline">Depois de ter todas as informações em mãos, nós começamos a planejar o projeto, toda a parte de design, conteúdo, e publicidade.</h2>
                </article> 

                <article class="servico box box-small al-center">
                <img src="img/bg-7.png" alt="Entrega" title="Entrega">
                    <h1 class="al-center fontsize5">Entrega</h1>
                    <h2 class="tagline">Com toda a solução finalmente pronta, nós entregamos o projeto, e lhe damos um treinamento específico, para usufruir de tudo o que a ferramente te proporciona.</h2>
                </article> 

                <article class="servico box box-small al-center">
                <img src="img/bg-8.png" alt="Pós entrega" title="Pós entrega">
                    <h1 class="al-center fontsize5">Pós Entrega</p>
                    <h2 class="tagline">Mas não acaba por aqui. Depois de entregue, nós continuamos a melhorar o seu site ou sistema, para gerar mais tráfego, e trazer mais clientes para você</h2>  
                </article> 

                <article class="servico  box box-small al-center">
                 <img src="img/bg-9.png" alt="Hospedagem" title="Hospedagem">
                    <h1 class="al-center fontsize5">Hospedagem</h1>
                    <h2 class="tagline">Fazemos a hospedagem do seu sistema web em servidores poderosos, estáveis da Rapid Cloud, para você não ficar na mão quando precisar estar exatamente onde o seu cliente está</h2>      
                </article>



            </div>    
            <div class="clear"></div>
    </section>




<section class="container marketing destaque_marketing al-center" id="marketing" style="padding-top:120px;">
 <div class="content">
    <img src="img/bg-38.png" alt="Marketing Digital" title="Marketing Digital">
     <h1 class="fontsize1 al-center">Marketing-Digital</h1>
     <h1 class="fontsize6 al-center">Campanha Facebook Ads - Google Analytics - Google Adwords</h1>  

 </div>
</section>

 <article class="servico box box-small al-center">  
   <div class="content">
            <img src="img/bg-39.png" alt="Facebook Ads" title="Facebook Ads">
            <h1 class="fontsize5 al-center">Facebook Ads</h1>
            <p class="tagline">Com o Facebook Ads temos o maior retorno de investimento seu produto no Facebook</p>
            <p class="tagline">Trafego de campanha e a facilidade para um novo investimento resumindo é uma propaganda que gera resultados de busca</p>              
   </div> 
 </article> 

 <article class="servico box box-small al-center">  
   <div class="content">
            <img src="img/bg-40.png" alt="Google Analytics" title="Google Analytics">
            <h1 class="fontsize5 al-center">Google Analytics</h1>
            <p class="tagline">Com o Google Analytics você tem o controle de visitas no seu site , as pagínas mais vistas, o tempo do usuario em seu site</p>
            <p class="tagline">É um serviço que oferece as estatíscas do site</p>              
   </div> 
 </article> 

<article class="servico box box-small al-center">  
   <div class="content">
            <img src="img/bg-41.png" alt="Google AdWords" title="Google AdWords">
            <h1 class="fontsize5 al-center">Google AdWords</h1>
            <p class="tagline">Se você deseja atrair novos visitantes para sua página na internet, aumentar suas vendas, receber mais ligações ou fazer com que seus clientes interajam mais com sua marca, o Google AdWords pode ajudar</p>
            <p class="tagline">Faça com que sua empresa seja encontrada no Google quando potenciais clientes estiverem pesquisando sobre o que você oferece</p>
     </div> 
 </article> 

 <article class="servico box box-small al-center">  
   <div class="content">
            <img src="img/bg-42.png" alt="Marketing Digital" title="Marketing Digital">
            <h1 class="fontsize5 al-center">Marketing Digital</h1>
            <p class="tagline">Para conseguir aumentar a geração de Leads e oportunidades de negócio, muitas empresas recorrem à mídia paga, principalmente ao Google AdWords e ao Facebook Ads.</p>
                       
   </div> 
 </article> 



<article class="newsletter container" style="padding:10px 0;">
 <div class="content">
    <h1 class="fontsize6 al-center" style="padding-bottom:10px;">Receba novidades da Publishe Web Informe seu nome e email !</h1>
        <form class="contato">
            <input type="email" placeholder="Informe seu E-mail:"/>
            <input type="nome" placeholder="Informe seu Nome:"/>
            <input type="submit" class="btn-blue" value="Enviar"/>
        </form>
        <div class="newsletter_icon"></div>
        <div class="clear"></div>
        </div>
</article>


<article class="container bg-lightgreen al-center" style="padding-top:10px;">
<h2 class="fontsize5">Compartilhe a publishe web nas redes sociais</h2> 

</article>



 <ul class="sharebox">
    <li class="like facebook"><span class="count">0</span> <a href="https://www.facebook.com/publisheweb/?fref=ts" rel="nofollow" title="Compartilhe no Facebook">Compartilhe no Facebook</a></li>
    <li class="like google"><span class="count">0</span> <a href="https://plus.google.com/u/0/b/105879958045370823527/105879958045370823527/posts" rel="nofollow" title="Recomende no Google+">Recomende no Google+</a></li>
    <li class="like twitter"><span class="count">0</span> <a href="https://twitter.com/PublisheWebBr" rel="nofollow" title="Conte Isto no Twitter">Conte Isto no Twitter</a></li>
</ul>




<section class="solucoes container destaque_solucoes al-center" id="ideias" style="padding-top:100px;"></style>
        <div class="content">
            <img src="img/bg-24.png" alt="Soluções para sua empresa" title="Soluções para sua empresa">
            <h1 class="fontsize1 al-center">Ideias</h1>
            <h1 class="fontsize6 al-center">Sua Empresa Ainda Não Tem Um Site?</h1>
            <h1 class="fontsize6 al-center">Não perca mais tempo alcance novos negócios atraia novos clientes</h1> 
            <h1 class="fontsize6 al-center">Aumente sua competitividade e suas vendas.
</h1>

        </div> 
    </section>

    <section class="container bg-lightgray" style="padding:20px 0;"></style>
        <article class="al-center">
            <div class="content">
                <h1 class="fontsize5">Nossos Diferenciais</h1>  
            </div>
        </article>
    </section>






    <section class="criacao container bg-white" style="padding-bottom:20px;"> 

        <article class="box box-small al-center">  
            <img src="img/bg-36.png" alt="Consultoria de Sites" title="Criação de sites">
            <h1 class="fontsize5 al-center">Consultoria de Sites</h1>
            <p class="tagline">consultaria desde o planejamento até o lançamento de seu website, garantindo o sucesso de seu négocio.</p>
            <p class="tagline">codificação para websites compatível com a tecnologia cross-browser, nos padrões web, de acordo com W3C.</p>              
        </article> 

        <article class="box box-small al-center">  
            <img src="img/bg-26.png" alt="Criação de layout personalizado" title="Criação de layout personalizado">
            <h1 class="fontsize5 al-center">Layout personalizado</h1>
            <p class="tagline">O Layout é criado de acordo com a identidade visual da empresa, seguindo todas as regras de cores e alinhamento para criar similaridade com o público alvo e cliente da empresa e utilizando o visual para atraí-los.</p>                
        </article>   

        <article class="box box-small al-center">  
            <img src="img/bg-27.png" alt="Solucionar Desafios" title="Solucionar Desafios">
            <h1 class="fontsize5 al-center">Solucionar Desafios</h1>
            <p class="tagline">Se o seu negócio é um verdadeiro desafio para ser desenvolvido, ficarei muito feliz em lhe ajudar!</p>                
        </article>   
        <article class="box box-small al-center">  
            <img src="img/bg-28.png" alt="Empresa" title="Empresa">
            <h1 class="fontsize5 al-center">Redes sociais</h1>
            <p class="tagline">Tenha seu site no topo de pesquisa na web com a publishe web
            </p> 
            <p class="tagline">Seu site no topo do google ad words facebook ads</p> 
            <p class="tagline">Alcançe suas vendas para o seu negocio número de clientes e procura na pagina de pesquisa do facebook e da google</p>               
        </article>   



        </div>
        <div class="clear"></div>
    </section>





    

  <article class="contato container destaque_contato al-center" id="contato" style="padding-top:130px;"></style>
     <div class="content">
        <img src="img/bg-29.png" alt="Entre em Contato" title="Entre em Contato">
        <h1 class="fontsize1 al-center">Contato</h1>
        <h1 class="fontsize6 al-center">Entre em contato e solicite um orçamento para seu projeto.</h1>
        <h1 class="fontsize6 al-center">Estarei inteiramente a disposição e responderei o mais breve possível.</h1>   
    </div>
</article>



    <section class="form container bg-white"  style="padding:50px 0;"></style>
        <article class="contato">
            <div class="content">
                <form class="contato_form j_formsubmit al-center" action="" method="post">
                    <label class="large">
                        <span>Nome:</span>
                        <input type="text" name="nome" title="Informe Seu Nome!" placeholder="Informe Seu Nome:" required/>
                    </label>

                    <label class="large">
                        <span>E-mail:</span>
                        <input type="email" name="email" title="Informe Seu Email" placeholder="Informe Seu E-mail:" required/>
                    </label>

                    <label class="large">
                        <span>Telefone:</span>
                        <input type="telefone" name="telefone" title="Informe Seu Telefone" placeholder="Informe Seu Telefone:" required/>
                    </label>

                    <label class="large">
                        <span>Serviço Desejado</span>
                        <select name="servico" required title="Favor Selecione o Projeto!">
                            <option value="">Serviço Desejado</option>
                            <option value="">Sites</option>
                            <option value="f">Loja Virtual</option>
                            <option value="m">Email-Marketing</option>
                            <option value="e">Logotipo</option>
                            
                        </select>
                    </label>


                    <label>
                        <span>Mensagem:</span>
                        <textarea rows="15" name="mensagem" title="Deixe sua Mensagem!" placeholder="Deixe sua Mensagem:" required=""></textarea>
                    </label>

                    <img class="form_load" title="Aguarde, Enviando Contato!" alt="[Aguarde, Enviando Contato!]" src="img/ajax-loader.gif"/>
                    <button class="btn">Enviar Contato!</button>

                </form> 
            </div>
            <div class="clear"></div>    
        </article>    
    </section>

</main><!--fecha todo o conteudo do site-->


<footer class="container bg-graylight"><!--abre o rodape-->
    
    <div class="content">
        <h1 class="fontsize5 al-center" style="padding-top:30px;">Fale Conosco</h1>

     <article class="informacao" style="padding:60px 0;">
              <article class="box box-small al-center"> 
                <img src="img/bg-19.png" alt="Email" title="Email">
                <h1 class="fontsize3 al-center">E-mail</h1> 
                <p class="tagline2">felipewebsp@gmail.com</p>

            </article> 

            <article class="box box-small al-center"> 
                <img src="img/bg-20.png" alt="Whatsapp" title="Whatsapp">
                <h1 class="fontsize3 al-center">Whatsapp</h1> 
                <p class="tagline2">11-98456-2296</p>

            </article> 

            <article class="box box-small al-center">  
                <img src="img/bg-22.png" alt="Skype" title="Skype">
                <h1 class="fontsize3 al-center">Skype</h1>
                <p class="tagline2">felipe_ferreira_campos</p>
            </article> 

            <article class="box box-small al-center"> 
                <img src="img/bg-21.png" alt="Web Site" title="Web Site">
                <h1 class="fontsize3 al-center">Linkedin</h1> 
                <p class="tagline2">Felipe Ferreira Campos</p>         
            </article> 
            <div class="clear"></div>       
     </article>
    </div>
</article>
<article class="container main_footer al-center bg-grayy" style="padding-top:10px;"> 
    <div class="content">
            <ul class="main_footer_social">
                <li><a target="_blank" href="https://twitter.com/PublisheWebBr" title="Publishe Web no Twitter">
                        <img src="img/social_twitter.png" alt="Publishe Web no Twitter" title="Publishe Web no Twitter"/></a></li>

                <li><a target="_blank" href="https://plus.google.com/u/0/b/105879958045370823527/105879958045370823527" title="Publishe Web no Google+">
                        <img src="img/social_google.png" alt="Publishe no Google +" title="Publishe no Google +"/></a></li>

                <li><a target="_blank" href="https://www.facebook.com/publisheweb/?fref=ts" title="Publishe Web no Facebook">

                        <img src="img/social_facebook.png" alt="Publishe Web no Facebook" title="Publishe Web no Facebook"/></a></li>
            </ul>        
        </article>   
    <div class="clear"></div>
    </div>   
    

</footer><!--fecha o rodape-->

</body>
</html>  
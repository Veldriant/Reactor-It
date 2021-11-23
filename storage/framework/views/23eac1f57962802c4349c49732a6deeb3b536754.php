<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Reactor-It</title>
<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Style css -->
<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  </head>
  <body>

    <!-- NAvigation -->

    <div class="container py-3">
    <div class="d-flex flex-column col-sm-12 flex-md-row align-items-center pb-3 mb-4">
        <div class="nav-logo">
          <img src="/image/REACTOR IT_logo_black.png" alt="logo" height="50">
        </div>
          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="nav-links me-3 py-1 text-white text-decoration-none" href="#portfolio">Портфолио</a>
            <a class="nav-links me-3 py-1 text-white text-decoration-none" href="#">О Нас</a>
            <a class="nav-links me-3 py-1 text-white text-decoration-none" href="#contactForm">Обратная связь</a>
          </nav>
        </div>
      </div>

      <div class="bg"></div>
      <div class="bg bg2"></div>
      <div class="bg bg3"></div>

      <!-- Portfolio -->
      <div article id="portfolio" class="container">
          <h2  class="title-block"><span class="title-border">Наше <span>Портфолио</span></span></h2>
    <div class="tz-gallery d-flex flex-row">

      <div class="column col-sm-3">
        <div class="portfolio-item  partdservise">
                <div class="caption">
                    <p>S-PARTS А-сервис</p>
                    <a class="lightbox" href="/image/SAvtosrvis.jpg"><button type="button" class="btn btn-primary">Просмотреть</button></a>

                </div>
        </div>
          <div class="portfolio-item   partdetails">
                  <div class="caption">
                      <p>S-PARTS A-детали</p>
                      <a class="lightbox" href="/image/partdetails.jpg"><button type="button" class="btn btn-primary">Просмотреть</button></a>

                  </div>
          </div>
      </div>
      <div class="column col-sm-3">
        <div class="portfolio-item  partimport">
                <div class="caption">
                    <p>S-PARTS А-импорт</p>
                    <a class="lightbox" href="/image/SImport.jpg"><button type="button" class="btn btn-primary">Просмотреть</button></a>

                </div>
        </div>
          <div class="portfolio-item   obmen">
                  <div class="caption">
                      <p>ВСЕ ВИДЫ УСЛУГ ВАЛЮТООБМЕНА ПРИЕМ И ОБМЕН ВЕТХИХ КУПЮ ОПТОВЫЕ КУРСЫ УТОЧНЯЙТЕ КРОСС-КУРС ПО ЗАПРОСУ</p>
                      <a class="lightbox" href="/image/Obmen.jpg"><button type="button" class="btn btn-primary">Просмотреть</button></a>

                  </div>
          </div>
      </div>
      <div class="column col-sm-3">
        <div class="portfolio-item  sonet ">
                <div class="caption">
                    <p>Все специалисты клиники — дипломированные врачи, поэтому мы официально лицензированы МОЗ Украины</p>
                    <a class="lightbox" href="/image/Sonet.jpg"><button type="button" class="btn btn-primary">Просмотреть</button></a>

                </div>
        </div>
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
      </div>
    </div>
    <div class="tz-gallery d-flex flex-row">
      <div class="column col-sm-3">
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
      </div>


      <div class="column col-sm-3">
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
      </div>
      <div class="column col-sm-3">
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
        <div class="portfolio-item  newSite ">
                <div class="caption">

                    <a class="lightbox"  href="#contactForm"><button type="button" class="btn btn-primary">Связаться с нами</button></a>

                </div>
        </div>
      </div>

      </div>
    </div>

  <div class="button-plus">
    <button type="button" id='more' class="btn btn-primary">Показать все</button>
  </div>
</div>
      <!-- Contact form -->
<div article id="contactForm" class="container">
    <h2 class="title-block"><span class="title-border">Обратная <span>Связь</span></span></h2>
    <div class="contactForm">
      <div class="contactForm-left col-sm-5">
        <div class="contactForm-item">
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
          <div class="folowUs">
            <span class="folowUs-text">Folow <span>Us</span></span>
            <div class="folowLink">
                <a href="#" class="folowLinks Instagram"><img src="/image/Instagram_icon-icons.com_66804.svg" alt="Instagram"> /username</a>
                <a href="#" class="folowLinks FB"><img src="/image/FB_icon-icons.com_65534.svg" alt="FB"> /username</a>
                <a href="#" class="folowLinks Telegram"><img src="/image/telegram_icon_131945.svg" alt="telegram"> /username</a>
            </div>
          </div>
        </div>
      </div>



      <div class=" contactForm-right col-sm-5">
      <form id='contactForms' method="POST" action="<?php echo e(route('feedback')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input id='name' type="text" name="name" class="form-control" required />
        </div>
        <div class="form-group">
            <label for="email">Ваша почта:</label>
            <input id='email' type="text" name="email" class="form-control" required />
        </div>
        <div class="form-group">
            <label for="msg"></label>
            <textarea id='msg' name="msg" class="form-control"></textarea>
        </div>
        <button type="submit" value='Submit' class="feedback btn btn-primary" id="submit" >Отправить</button>
      </form>
    </div>
  </div>
</div>


<!-- Footer -->
<div class="container">
  <footer id="footer">
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="nav-links me-3 py-1 text-white text-decoration-none" href="#portfolio">Портфолио</a>
          <a class="nav-links me-3 py-1 text-white text-decoration-none" href="#">О Нас</a>
          <a class="nav-links me-3 py-1 text-white text-decoration-none" href="#contactForm">Обратная связь</a>
        </nav>
        <div class="footer-copywriting">
          Все права защищены Reactor-it 2021
        </div>
  </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script src="/js/script.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
  </body>
</html>
<?php /**PATH /home/dev0/EngLara3/resources/views/home.blade.php ENDPATH**/ ?>